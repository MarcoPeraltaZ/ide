<?php


namespace Drupal\ide_patrimonio\Repository;


use Drupal\ide_patrimonio\Model\Capa;

interface CapasRepositoryInterface {

  /**
   * @return array
   */
  public function getCapas(): array;
  public function getCapaByName($capa): ?Capa;
}
