<?php

namespace Drupal\error_builder\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for TFA SendGrid Reports routes.
 */
class errorController extends ControllerBase {

  /**
   * Bounces by Date Summary Report.
   * Version 00
   */
  public function shoutOut() {
     $build['header'] = [
      '#type' => 'item',
      '#markup' => '<h1>' . 'yo' . '</h1>',
    ];
    return $build;
  }

}
