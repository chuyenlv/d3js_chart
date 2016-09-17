<?php

namespace Drupal\d3js_chart\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Population entities.
 *
 * @ingroup d3js_chart
 */
interface PopulationEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Population name.
   *
   * @return string
   *   Name of the Population.
   */
  public function getName();

  /**
   * Sets the Population name.
   *
   * @param string $name
   *   The Population name.
   *
   * @return \Drupal\d3js_chart\Entity\PopulationEntityInterface
   *   The called Population entity.
   */
  public function setName($name);

  /**
   * Gets the Population creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Population.
   */
  public function getCreatedTime();

  /**
   * Sets the Population creation timestamp.
   *
   * @param int $timestamp
   *   The Population creation timestamp.
   *
   * @return \Drupal\d3js_chart\Entity\PopulationEntityInterface
   *   The called Population entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Population published status indicator.
   *
   * Unpublished Population are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Population is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Population.
   *
   * @param bool $published
   *   TRUE to set this Population to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\d3js_chart\Entity\PopulationEntityInterface
   *   The called Population entity.
   */
  public function setPublished($published);

}
