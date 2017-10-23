<?php
/**
 * Created by PhpStorm.
 * User: bits
 * Date: 2/01/17
 * Time: 4:40 PM
 */

namespace Drupal\adf_social_field\Sharebutton;

use Drupal\adf_social_field\Sharebutton\SocialShareButtonInterface;
use Drupal\core\Url;


class InstagramShareButton implements SocialShareButtonInterface{
  
  public function getName(){
    return "instagram";
  }
  public function render(){
    $response =  [
      '#theme' => 'share_instagram',
      '#url' => \Drupal::url('<current>', [], ['absolute' => true]),
    ];
    return $response;
  }
  
}