<?php

/**
 * @file
 * Contains population.page.inc.
 *
 * Page callback for Population entities.
 */

use Drupal\Core\Render\Element;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Prepares variables for Population templates.
 *
 * Default template: population.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_population(array &$variables) {
  // Fetch PopulationEntity Entity Object.
  $population = $variables['elements']['#population'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
