<?php

namespace Drupal\ide_patrimonio\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a banner block.
 *
 * @Block(
 *   id = "ide_patrimonio_banner",
 *   admin_label = @Translation("Banner"),
 *   category = @Translation("IDE_Patrimonio")
 * )
 */
class BannerBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'block-banner'
    ];
  }

}
