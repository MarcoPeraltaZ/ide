<?php

namespace Drupal\ide_patrimonio\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\ide_patrimonio\Repository\CapasRepository;

/**
 * Provides a slider block.
 *
 * @Block(
 *   id = "ide_patrimonio_slider",
 *   admin_label = @Translation("Slider"),
 *   category = @Translation("IDE_Patrimonio")
 * )
 */
class SliderBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $capasRepository = new CapasRepository();

    return [
      '#theme' => 'block-slider',
      '#capas' => $capasRepository->getCapas()
    ];
  }

}
