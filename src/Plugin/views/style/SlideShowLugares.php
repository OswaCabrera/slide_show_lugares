<?php

/**
 * @file
 * Definition of Drupal\slide_show_lugares\Plugin\views\style\SlideShowLugares.
 */

namespace Drupal\slide_show_lugares\Plugin\views\style;

use Drupal\core\form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Style plugin to render a list contents
 * in special format.
 *
 * @ingroup slide_show_lugares
 *
 * @ViewsStyle(
 * id = "slide_show_lugares_plugin",
 * title = @Translation("Estilo de Slide Show Lugares"),
 * help = @Translation("Render a list of contents in a specific format."),
 * theme = "slide-show-lugares-template",
 * display_types = { "normal" }
 * )
 *
 */

class SlideShowLugares extends StylePluginBase
{

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * Set default options
   */
  protected function defineOptions() {
    $options = parent::defineOptions();
    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);
    $form['classes'] = [
      '#type' => 'textfield',
      '#title' => t('CSS classes'),
      '#default_value' => (isset($this->options['classes'])) ? $this->options['classes'] : 'custom-views-block',
      '#description' => t('CSS classes for further customization of any related page.'),
    ];
  }

  public function render() {
    return parent::render();
  }

}
