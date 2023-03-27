<?php

namespace Drupal\ide_patrimonio\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Que Es IDE block.
 *
 * @Block(
 *   id = "ide_patrimonio_queeside",
 *   admin_label = @Translation("Que es IDE"),
 *   category = @Translation("IDE_Patrimonio")
 * )
 */
class QueesideBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'block-acerca-de'
    ];
  }

}
