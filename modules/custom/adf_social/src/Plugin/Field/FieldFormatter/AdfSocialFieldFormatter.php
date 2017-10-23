<?php

namespace Drupal\adf_social_field\Plugin\Field\FieldFormatter;

use Drupal\Component\Utility\Html;
use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Plugin implementation of the 'adf_social_field_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "adf_social_formatter_type",
 *   label = @Translation(" Adf Social field formatter"),
 *   field_types = {
 *     "adf_social_field_type"
 *   }
 * )
 */
class SocialShareFieldFormatter extends FormatterBase {
  
  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
        // Implement default settings.
      ] + parent::defaultSettings();
  }
  
  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    return [
        // Implement settings form.
      ] + parent::settingsForm($form, $form_state);
  }
  
  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];
    // Implement settings summary.
    
    return $summary;
  }
  
  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    

    $response = [];
    // Si esta marcado "Compartir en redes sociales"
    if($items[0]->value) {
      
      $render_service = \Drupal::service('adf_social_field.render');
      $social_networks = $render_service->render();
      //$response = \Drupal::service('renderer')->render($response)->__toString();
     
      
      
      $response =  [
        '#theme' => 'share_social_networks_field',
        '#social_networks' => $social_networks,
      ];
      
      
      return $response;
      
      return ['#markup' => $response];
    }
    
    return $response;
  }
  
  /**
   * Generate the output appropriate for one field item.
   *
   * @param \Drupal\Core\Field\FieldItemInterface $item
   *   One field item.
   *
   * @return string
   *   The textual output generated.
   */
  protected function viewValue(FieldItemInterface $item) {
    // The text value has no text format assigned to it, so the user input
    // should equal the output, including newlines.
    return nl2br(Html::escape($item->value));
  }
  
}
