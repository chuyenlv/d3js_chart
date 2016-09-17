<?php

namespace Drupal\d3js_chart\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ChartBlock' block.
 *
 * @Block(
 *  id = "chart_block",
 *  admin_label = @Translation("Grouped Bar Chart"),
 * )
 */
class ChartBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['chart_block']['#markup'] = '<div id="d3-js-chart"></div>';
    $build['#attached']['library'][] = 'd3js_chart/d3.js';

    return $build;
  }

}
