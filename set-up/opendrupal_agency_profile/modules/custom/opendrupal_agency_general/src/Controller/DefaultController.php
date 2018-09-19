<?php

/**
 * @file
 * Contains Drupal\opendrupal_agency_general\Controller\DefaultController.
 */

namespace Drupal\opendrupal_agency_general\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Controller callback: Empty page.
   *
   * @return array
   *   Returns an empty page.
   */
  public function emptyPage() {
    return [];
  }

}
