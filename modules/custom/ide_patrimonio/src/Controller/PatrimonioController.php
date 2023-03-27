<?php

namespace Drupal\ide_patrimonio\Controller;

use Drupal;
use Drupal\Core\Controller\ControllerBase;
use Drupal\ide_patrimonio\Entity\Patrimonio;
use Drupal\ide_patrimonio\Entity\Patrimonio as PatrimonioAlias;
use Drupal\ide_patrimonio\Model\PatrimonioFilter;
use Drupal\ide_patrimonio\Repository\CapasRepository;
use Drupal\ide_patrimonio\Repository\PatrimonioRepository;

/**
 * Returns responses for ide_patrimonio routes.
 */
class PatrimonioController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function index() {

    $patrimonioRepository = new PatrimonioRepository();
    $capasRepository = new CapasRepository();
    $pager_manager = Drupal::service('pager.manager');

    $noFilters =
      empty(\Drupal::request()->query->get('search-text')) &&
      empty(\Drupal::request()->query->get('region')) &&
      empty(\Drupal::request()->query->get('comuna')) &&
      empty(\Drupal::request()->query->get('capa'));


    $filter = new PatrimonioFilter();
    $filter
      ->setResultsPerPage(empty(\Drupal::request()->query->get('result-per-page')) ? 6 : \Drupal::request()->query->get('result-per-page'))
      ->setSearchText(\Drupal::request()->query->get('search-text') ?? '')
      ->setRegion(\Drupal::request()->query->get('region') ?? '')
      ->setComuna(\Drupal::request()->query->get('comuna') ?? '')
      ->setCapa(\Drupal::request()->query->get('capa') ?? '')
      ->setPage(\Drupal::request()->query->get('page') ?? 0);

    $patrimonios = $patrimonioRepository->getPatrimoniosByFilterPaginated($filter);
    $totalItems = $patrimonioRepository->countPatrimoniosByFilter($filter);

    $regiones = $patrimonioRepository->getRegionesComunasArray();

    $pager_manager->createPager($totalItems, $filter->getResultsPerPage());

    $showVisorSliderEstadisticas =
      empty(\Drupal::request()->query->get('search-text'));

    /**
     * valida si debe mostrar el visor con todas las capas o si debe mostrar
     * un visor especifico para la capa filtrada.
     */

    $urlIframeVisor = "https://geoportalcmn.cl/portal/apps/webappviewer/index.html?id=317776abd71846f78a2ba2c6a6f6d585";
    if(!empty(\Drupal::request()->query->get('capa'))){
      $capaFiltrada = $capasRepository->getCapaByName(\Drupal::request()->query->get('capa'));
      if($capaFiltrada !== null){
        $urlIframeVisor = $capaFiltrada->getVisor();
      }
    }
    if(!empty(\Drupal::request()->query->get('region'))){
      $urlIframeVisor = "https://geoportalcmn.cl/portal/apps/webappviewer/index.html?id=317776abd71846f78a2ba2c6a6f6d585";
      $urlIframeVisor .= $this->getExtentByRegion(\Drupal::request()->query->get('region'));
    }

    $build['content'] = [
      '#theme' => 'patrimonios-index',
      '#patrimonios' => $patrimonios,
      '#totalItems' => $pager_manager->getPager()->getTotalItems(),
      '#regiones' => $regiones,
      '#regionesJson' => json_encode($regiones),
      '#noFilters' => $noFilters,
      '#filter' => $filter,
      '#capas' => $capasRepository->getCapas(),
      '#capasEstadisticas' => $capasRepository->getCapasEstadisticas($filter),
      '#showVisorSliderEstadisticas' => $showVisorSliderEstadisticas,
      '#urlIframeVisor' => $urlIframeVisor,
      '#pager' => [
        '#type' => 'pager',
      ]
    ];
    return $build;
  }

  /**
   * @param int $patrimonio
   *
   * @return array[]
   */
  public function showPatrimonio(int $patrimonio): array {
    $patrimonioRepository = new PatrimonioRepository();
    $patrimonioFull = $patrimonioRepository->getPatrimonioById($patrimonio);
    $build['content'] = [
      '#theme' => 'patrimonio-show',
      '#patrimonio' => $patrimonioFull,
    ];
    return $build;

  }

  private function getExtentByRegion(string $region) {
    $result = '';

    switch ($region){
      case 'Arica y Parinacota':
        $result = '&extent=-71.5027,-19.4764,-67.446,-17.4706';
        break;
      case 'Tarapacá':
        $result = '&extent=-73.0106,-22.314,-64.8972,-18.3487';
        break;
      case 'Antofagasta':
        $result = '&extent=-76.7432,-28.0666,-60.5164,-20.3595';
        break;
      case 'Atacama':
        $result = '&extent=-73.7631,-29.5347,-65.6497,-25.7895';
        break;
      case 'Coquimbo':
        $result = '&extent=-74.686,-32.5509,-66.5726,-28.9163';
        break;
      case 'Valparaíso':
        $result = '&extent=-72.946,-33.7113,-68.8893,-31.9342';
        break;
      case 'Metropolitana de Santiago':
        $result = '&extent=-72.6741,-34.5242,-68.6174,-32.7637';
        break;
      case "Libertador General Bernardo O'Higgins":
      case 'Libertador General Bernardo O’Higgins':
        $result = '&extent=-73.001,-35.3796,-68.9443,-33.637';
        break;
      case 'Maule':
        $result = '&extent=-73.3278,-36.4318,-69.2711,-34.7118';
        break;
      case 'Ñuble':
        $result = '&extent=-73.8469,-37.5942,-69.7902,-35.8997';
        break;
      case 'Biobío':
        $result = '&extent=-74.215,-38.2981,-70.1583,-36.6195';
        break;
      case 'La Araucanía':
        $result = '&extent=-74.2232,-39.4654,-70.1665,-37.8136';
        break;
      case 'Los Ríos':
        $result = '&extent=-74.3495,-40.8653,-70.2928,-39.2467';
        break;
      case 'Los Lagos':
        $result = '&extent=-76.9712,-43.3747,-68.8577,-40.2225';
        break;
      case 'Aysén del General Carlos Ibáñez del Campo':
        $result = '&extent=-80.6433,-49.2477,-64.4165,-43.4146';
        break;
      case 'Magallanes y de la Antártica Chilena':
        $result = '&extent=-87.0978,-57.4697,-54.6442,-47.1912';
        break;
    }
    return $result;
  }



}
