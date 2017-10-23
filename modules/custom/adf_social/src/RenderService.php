<?php

namespace Drupal\adf_social_field;

use Drupal\Core\Url;
use Drupal\adf_social_field\Sharebutton\SocialShareButtonInterface;

/**
 * Class RenderService.
 *
 * @package Drupal\adf_social_field
 */
class RenderService {

  private $social_networks = [];

  public function addSocialMedia(SocialShareButtonInterface $social_network) {
    $this->social_networks[] = $social_network;
  }
  /**
   * Constructor.
   */
  public function __construct() {

  }

  public function render(){
    $config = \Drupal::config("adf_social_field.global_settings");
    $allowed = $config->get('allowed');
    $email = $config->get('email');

    foreach ($allowed as $key => $value){
      if($value == 0){
        unset($allowed[$key]);
      } else {
        $allowed[$key] = $key;
      }
    }
    unset($key);
    $output = [];

    $reversed = array_reverse($this->social_networks);
    foreach ($reversed as $social_network){
      $social_network_name = $social_network->getName();


      if( in_array($social_network_name, $allowed)){
        $output[$social_network_name] = $social_network->render();
      }
    }
      $output['email']=$email;

    return $output;





    $response =  [
      '#theme' => 'share_facebook',
      '#url' => Url::fromRoute('<current>', [], ['absolute' => true]),
    ];

    return drupal_render($response);

  }

}
