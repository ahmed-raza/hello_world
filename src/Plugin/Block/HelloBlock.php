<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class HelloBlock extends BlockBase {
  public function build() {
    $block = array(
        '#markup' => $this->t('Hello World'),
      );
    return $block;
  }
}
