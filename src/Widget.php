<?php

namespace Drupal\widgets;

/**
 * Class Widget.
 */
class Widget {

  /**
   * Returns the plugin manager for the Widget plugin type.
   *
   * @return \Drupal\widgets\Plugin\Widget\WidgetPluginManagerInterface
   *   Widget manager.
   */
  public static function widgetPluginManager() {
    return \Drupal::service('plugin.manager.widget');
  }

}
