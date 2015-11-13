<?php
/**
 * @file
 * Contains \Drupal\hello\Controller\HelloController.
 */

namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function content() {
    $page = array(
        '#type' => 'markup',
        '#markup' => t('Hello World'),
      );
    return $page;
  }

}
