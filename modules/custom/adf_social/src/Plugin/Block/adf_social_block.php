<?php

namespace Drupal\adf_social_field\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'adf_social_block' block.
 *
 * @Block(
 *  id = "adf_social_block",
 *  admin_label = @Translation("Adf Social block"),
 * )
 */
class adf_social_block extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $render_service = \Drupal::service('adf_social_field.render');
      $render = $render_service->render();
      $email = $render['email'];
      unset($render['email']);
      $social_networks=$render;
    
    $html = array(
      '#theme' => 'share_social_networks_field',
      '#social_networks' => $social_networks,
      '#email' => $email,
      '#attached' => array(
//        'library' => array(
//          'adf_social_field/adf_social',
//        ),
      ),
    );
  
    $build['adf_social_block'] = $html;

    return $build;
  }

}
