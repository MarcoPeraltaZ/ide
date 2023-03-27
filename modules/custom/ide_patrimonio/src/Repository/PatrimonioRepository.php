<?php

namespace Drupal\ide_patrimonio\Repository;

use Drupal;
use Drupal\Core\Database\Database;
use Drupal\Core\Database\Query\SelectInterface;
use Drupal\ide_patrimonio\Model\Patrimonio;
use Drupal\ide_patrimonio\Model\PatrimonioFilter;
use Drupal\ide_patrimonio\Model\PatrimonioMapper;

class PatrimonioRepository implements PatrimoniosRepositoryInterface {
    private Drupal\Core\Database\Connection $connection;

    private $modulePath;

    public function __construct() {
        $this->connection = Database::getConnection('default', 'postgres');
        $this->modulePath = Drupal::service('module_handler')->getModule('ide_patrimonio')->getPath();
    }

    public function getPatrimonioById(int $id): Patrimonio {
        $query = $this->getPatrimonioSelectBaseQuery();
        $query->condition('p.id', $id);
        $result = $query->execute();
        $patrimonio = $result->fetch();
        return PatrimonioMapper::mapEntityFromModel($patrimonio, $this->modulePath);
    }

    public function getAllPatrimonios(): array {
        $query = $this->getPatrimonioSelectBaseQuery();
        $result = $query->execute();
        $patrimonios = $result->fetchAll();
        return PatrimonioMapper::mapEntityFromModelList($patrimonios, $this->modulePath);
    }

    public function getPatrimoniosByFilter(PatrimonioFilter $filter): array {
        $query = $this->getPatrimonioSelectBaseQuery();
        $query = $this->applyFilter($filter, $query);
        $result = $query->execute();
        $patrimonios = $result->fetchAll();
        return PatrimonioMapper::mapEntityFromModelList($patrimonios, $this->modulePath);
    }

    public function getPatrimoniosByFilterPaginated(PatrimonioFilter $filter): array {
        $query = $this->getPatrimonioSelectBaseQuery();
        $query = $this->applyFilter($filter, $query);
        $query = $this->applyPager($filter, $query);
        $result = $query->execute();
        $patrimonios = $result->fetchAll();
        return PatrimonioMapper::mapEntityFromModelList($patrimonios, $this->modulePath);
    }

    public function getInitialPatrimonios(string $latitude = NULL, string $longitude = NULL): array {

        if (!empty($latitude) && !empty($longitude)) {
            $query = $this->connection->query("SELECT p.*, c.icono AS icono_capa, c.nombre AS nombre_capa FROM patrimonios p INNER JOIN public.capas c ON c.id = p.capa_id where c.in_app = true ORDER BY ST_Distance(ST_SetSRID(ST_POINT(" . $longitude . "," . $latitude . "), 4326), centroide) ASC LIMIT 10");
        } else {
            $query = $this->connection->query("SELECT p.*, c.icono AS icono_capa, c.nombre AS nombre_capa FROM patrimonios p INNER JOIN public.capas c ON c.id = p.capa_id where c.in_app = true ORDER BY RANDOM() LIMIT 10");
        }
        $patrimonios = $query->fetchAll();
        return PatrimonioMapper::mapEntityFromModelList($patrimonios, $this->modulePath);
    }

    public function getPatrimoniosByFilterPaginatedAPI(PatrimonioFilter $filter): array {
        $query = $this->getPatrimonioSelectBaseQuery();
        $query = $this->applyFilterAPI($filter, $query);
        $query = $this->applyPager($filter, $query);
        $result = $query->execute();
        $patrimonios = $result->fetchAll();
        return PatrimonioMapper::mapEntityFromModelList($patrimonios, $this->modulePath);
    }

    public function countPatrimoniosByFilter(PatrimonioFilter $filter) {
        $query = $this->getPatrimonioSelectBaseQuery();
        $query = $this->applyFilter($filter, $query);
        return $query->countQuery()->execute()->fetchField();
    }

    /**
     * @return array
     */
    public function getRegionesComunasArray(): array {
        try {
            $query = $this->connection->query("SELECT distinct(comuna), region from patrimonios order by region");
            $regiones = $query->fetchAll();
            $regionesArray = [];
            foreach ($regiones as $region) {
                $array = [];
                $array['region'] = $region->region;
                $array['comuna'] = $region->comuna;
                $regionesArray[] = $array;
            }
            $regiones = $this->groupBy('region', $regionesArray, true);
        } catch (Drupal\Core\Database\DatabaseExceptionWrapper $exception) {
            $regiones = [];
        }
        return $regiones;
    }

    /**
     * @param \Drupal\ide_patrimonio\Model\PatrimonioFilter $filter
     * @param \Drupal\Core\Database\Query\SelectInterface $query
     *
     * @return \Drupal\Core\Database\Query\SelectInterface
     */
    private function applyPager(PatrimonioFilter $filter, SelectInterface $query): SelectInterface {
        if ($filter->getPage() !== null) {
            $resultsPerPage = $filter->getResultsPerPage();
            $query = $query->range($resultsPerPage * $filter->getPage(), $resultsPerPage);
        } else {
            $resultsPerPage = $filter->getResultsPerPage();
            $query = $query->range($resultsPerPage * 0, $resultsPerPage);
        }
        return $query;
    }

    private function groupBy($key, $data, bool $unsetKey = FALSE): array {
        $result = array();

        foreach ($data as $val) {
            if (array_key_exists($key, $val)) {
                $auxVal = $val;
                if ($unsetKey) {
                    unset($auxVal[$key]);
                }
                $result[$val[$key]][] = $auxVal;
            } else {
                $result[""][] = $val;
            }
        }
        return $result;
    }

    /**
     * @return \Drupal\Core\Database\Query\SelectInterface
     */
    private function getPatrimonioSelectBaseQuery(): SelectInterface {
        $query = $this->connection->select('public.patrimonios', 'p');
        $query->join('public.capas', 'c', 'c.id = p.capa_id');
        $query->fields('p');
        $query->addField('c', 'icono', 'icono_capa');
        $query->addField('c', 'nombre', 'nombre_capa');
        $query->addField('c', 'visor', 'visor_capa');
        $query->addField('c', 'visor_satelital', 'visor_capa_satelital');
        $query->addField('c', 'zoom', 'zoom');

        return $query;
    }

    /**
     * @param \Drupal\ide_patrimonio\Model\PatrimonioFilter $filter
     * @param \Drupal\Core\Database\Query\SelectInterface $query
     *
     * @return \Drupal\Core\Database\Query\SelectInterface
     */
    private function applyFilter(PatrimonioFilter $filter, $query): SelectInterface {
        if (!empty($filter->getSearchText())) {
            $query->condition('name', "%" . $filter->getSearchText() . "%", 'LIKE');
        }

        if (!empty($filter->getRegion())) {
            $query->condition('region', $filter->getRegion());
        }

        if (!empty($filter->getComuna())) {
            $query->condition('comuna', $filter->getComuna());
        }

        if (!empty($filter->getCapa())) {
            $query->condition('c.nombre', explode('|', $filter->getCapa()), 'IN');
        }

        return $query;
    }

    /**
     * @param \Drupal\ide_patrimonio\Model\PatrimonioFilter $filter
     * @param \Drupal\Core\Database\Query\SelectInterface $query
     *
     * @return \Drupal\Core\Database\Query\SelectInterface
     */
    private function applyFilterAPI(PatrimonioFilter $filter, $query): SelectInterface {

        if (!empty($filter->getSearchText())) {

            $query->condition('name', "%" . $filter->getSearchText() . "%", 'LIKE');
        }

        if (!empty($filter->getRegion())) {

            $query->condition('region', $filter->getRegion());
        }

        if (!empty($filter->getComuna())) {

            $query->condition('comuna', $filter->getComuna());
        }

        if (!empty($filter->getCapa())) {

            $query->condition('c.id', explode('|', $filter->getCapa()), 'IN');
        }
        $query->condition('c.in_app', true);

        return $query;
    }

}
