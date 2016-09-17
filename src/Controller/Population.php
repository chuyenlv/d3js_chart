<?php

namespace Drupal\d3js_chart\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class Population.
 *
 * @package Drupal\d3js_chart\Controller
 */
class Population extends ControllerBase {

  /**
   * Getcsv.
   *
   * @return string
   *   Return Hello string.
   */
  public function getCSV() {
    $query = \Drupal::entityQuery('population');
    $query->condition('status', 1);
    $entity_ids = $query->execute();

    $populations = \Drupal::entityTypeManager()->getStorage('population')->loadMultiple($entity_ids);

    if (empty($populations)) {
      exit();
    }

    $fp = fopen('php://output', 'w');

    $names = [
      'State',
      'Under 5 Years',
      '5 to 13 Years',
      '14 to 17 Years',
      '18 to 24 Years',
      '25 to 44 Years',
      '45 to 64 Years',
      '65 Years and Over',
    ];

    fputcsv($fp, $names);

    foreach ($populations as $entity) {
      $e_array = $entity->toArray(TRUE);
      fputcsv($fp, $e_array);
    }

    fclose($fp);
    exit();
  }

}
