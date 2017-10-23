<?php

/**
 * @file
 * Contains bits_alianzas.page.inc.
 *
 * Page callback for Bits alianzas entities.
 */

use Drupal\Core\Render\Element;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Prepares variables for Bits alianzas templates.
 *
 * Default template: bits_alianzas.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_bits_alianzas(array &$variables) {
  // Fetch BitsAlianzas Entity Object.
  $bits_alianzas = $variables['elements']['#bits_alianzas'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
