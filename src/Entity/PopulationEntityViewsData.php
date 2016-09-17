<?php

namespace Drupal\d3js_chart\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Population entities.
 */
class PopulationEntityViewsData extends EntityViewsData implements EntityViewsDataInterface {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['population']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Population'),
      'help' => $this->t('The Population ID.'),
    );

    return $data;
  }

}
