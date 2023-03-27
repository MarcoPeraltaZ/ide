<?php

namespace Drupal\ide_patrimonio\Repository;

use Drupal;
use Drupal\Core\Database\Database;
use Drupal\ide_patrimonio\Model\Capa;
use Drupal\ide_patrimonio\Model\CapasMapper;
use Drupal\ide_patrimonio\Model\PatrimonioFilter;

class CapasRepository  implements CapasRepositoryInterface {

  private Drupal\Core\Database\Connection $connection;
  private $modulePath;

  public function __construct() {
    $this->connection = Database::getConnection('default', 'postgres');
    $this->modulePath = Drupal::service('module_handler')->getModule('ide_patrimonio')->getPath();
  }

  public function getCapas(): array {
    $query = $this->connection->query("SELECT * from capas order by nombre");
    $capas = $query->fetchAll();
    return Drupal\ide_patrimonio\Model\CapasMapper::mapEntityFromModelList($capas, $this->modulePath);
  }

  public function getCapasEstadisticas(PatrimonioFilter $filter) {
    $conditions = "";
    if (!empty($filter->getRegion())) {
	    $region = str_replace("'", "''", $filter->getRegion());
      $conditions .= " AND region = '".$region."'";
    }

    if (!empty($filter->getComuna())) {
      $conditions .= " AND comuna = '".$filter->getComuna()."'";
    }

    $query = $this->connection->query("
      SELECT c.id, c.nombre, c.icono, c.extent, c.visor, count(p.id) as cantidad_nacional,
        (
            SELECT count(p1.id)
                from capas c1
            inner join patrimonios p1 on c1.id = p1.capa_id
            where c1.id =c.id ". $conditions ."
        ) as cantidad_filtrada
        from capas c
      inner join patrimonios p on c.id = p.capa_id
      group by c.id
      order by c.nombre
        ");
    $capas = $query->fetchAll();

    return Drupal\ide_patrimonio\Model\CapasMapper::mapResultCapasEstadisticas($capas, $this->modulePath);
  }

  public function getCapaByName($capa): ?Capa {
    $query = $this->connection->query("SELECT * from capas where nombre = '".$capa."'");
    $result = $query->fetchObject();
    if($result === false){
      return null;
    }
    return CapasMapper::mapEntityFromModel($result, $this->modulePath);
  }

}
