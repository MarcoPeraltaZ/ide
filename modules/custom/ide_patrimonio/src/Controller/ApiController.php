<?php

namespace Drupal\ide_patrimonio\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\ide_patrimonio\Model\PatrimonioFilter;
use Drupal\ide_patrimonio\Repository\PatrimonioRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Provides route responses for the DrupalBook module.
 */
class ApiController extends ControllerBase{

  private const API_TOKEN = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9';
  private PatrimonioRepository $patrimonioRepository;

  public function __construct() {

    $this->patrimonioRepository = new PatrimonioRepository();
  }

  public function getInitialPatrimonios() {
    if(\Drupal::request()->headers->get('token') !== '' . self::API_TOKEN . ''){
      return JsonResponse::create(['message' => 'Acceso no válido'], 403);
    }

    $latitude = \Drupal::request()->query->get('latitude', null);
    $longitude = \Drupal::request()->query->get('longitude', null);

    return new JsonResponse($this->patrimonioRepository->getInitialPatrimonios($latitude, $longitude));
  }

  public function getPatrimoniosWithFilter() {
    if(\Drupal::request()->headers->get('token') !== self::API_TOKEN){
      return JsonResponse::create(['message' => 'Acceso no válido'], 403);
    }
    $filter = new PatrimonioFilter();
    $filter->loadFromRequest(\Drupal::request());

    $patrimonioRepository = new PatrimonioRepository();
    $responseArray['data'] = $patrimonioRepository->getPatrimoniosByFilterPaginatedAPI($filter);
    $responseArray['page'] = \Drupal::request()->query->get('page') ?? 0;
    $responseArray['count'] = count($responseArray['data']);

    return new JsonResponse($responseArray);
  }

  public function getRegionComuna(){
    if(\Drupal::request()->headers->get('token') !== self::API_TOKEN){
      return JsonResponse::create(['message' => 'Acceso no válido'], 403);
    }

    $patrimonioRepository = new PatrimonioRepository();
    return new JsonResponse($patrimonioRepository->getRegionesComunasArray());
  }

}
