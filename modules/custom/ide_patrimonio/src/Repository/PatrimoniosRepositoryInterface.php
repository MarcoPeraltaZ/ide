<?php


namespace Drupal\ide_patrimonio\Repository;

use Drupal\ide_patrimonio\Model\Patrimonio;
use Drupal\ide_patrimonio\Model\PatrimonioFilter;

interface PatrimoniosRepositoryInterface {

  /**
   * @return array<\Drupal\ide_patrimonio\Model\Patrimonio>
   */
  public function getAllPatrimonios(): array;

  /**
   * @param \Drupal\ide_patrimonio\Model\PatrimonioFilter $filter
   *
   * @return array<\Drupal\ide_patrimonio\Model\Patrimonio>
   */
  public function getPatrimoniosByFilter(PatrimonioFilter $filter): array;

  /**
   * @param \Drupal\ide_patrimonio\Model\PatrimonioFilter $filter
   *
   * @return array<\Drupal\ide_patrimonio\Model\Patrimonio>
   */
  public function getPatrimoniosByFilterPaginated(PatrimonioFilter $filter): array;

  /**
   * @param int $id
   *
   * @return \Drupal\ide_patrimonio\Model\Patrimonio
   */
  public function getPatrimonioById(int $id): Patrimonio;

  public function getRegionesComunasArray(): array;

  public function getInitialPatrimonios(string $latitude = NULL, string $longitude = NULL): array;

  public function countPatrimoniosByFilter(PatrimonioFilter $filter);
}
