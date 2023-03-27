<?php

namespace Drupal\ide_patrimonio\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

/**
 * Returns responses for ide_patrimonio routes.
 */
class IdePatrimonioController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function acercaDe() {
    return [
      '#theme' => 'acerca-de'
    ];
  }

  public function visorEstadistico() {
    return [
      '#theme' => 'visor-estadistico',
      '#visor_url' => $this->config('ide_patrimonio.settings')->get('visor_estadistico_url')
    ];
  }

  public function visorTerritorial() {
    return [
      '#theme' => 'visor-territorial',
      '#visor_url' => $this->config('ide_patrimonio.settings')->get('visor_territorial_url')
    ];
  }

  public function visorCerca() {
    return [
      '#theme' => 'visor-cerca',
      '#visor_url' => $this->config('ide_patrimonio.settings')->get('visor_cerca_url')
    ];
  }

  public function catalogo() {
    return [
      '#theme' => 'catalogo'
    ];
  }

  public function contacto() {
    return [
      '#theme' => 'contacto'
    ];
  }
  public function tutoriales() {
    $tutoriales_ids = \Drupal::entityQuery('node')->condition('type','tutorial')
      ->condition('status', 1)->execute();
    $tutoriales =  Node::loadMultiple($tutoriales_ids);

    return [
      '#theme' => 'tutoriales',
      '#tutoriales' => $tutoriales
    ];
  }

  /**
   * @param int $visor_id
   *
   * @return string
   */
  private function getVisorUrl(int $visor_id): string {
    $visorUrl = "";
    $visor = Node::load($visor_id);
    if (isset($visor)) {
      $visorUrl = $visor->get('field_visor_url')->value;
    }
    return $visorUrl;
}
}
