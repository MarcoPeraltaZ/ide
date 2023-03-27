<?php

namespace Drupal\ide_patrimonio\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a herramientas ide patrimonio block.
 *
 * @Block(
 *   id = "ide_patrimonio_herramientas_ide_patrimonio",
 *   admin_label = @Translation("Herramientas IDE Patrimonio"),
 *   category = @Translation("IDE_Patrimonio")
 * )
 */
class HerramientasIdePatrimonioBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'block-herramientas-ide'
    ];
  }

}
