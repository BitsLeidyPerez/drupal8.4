<?php
/**
 * Created by PhpStorm.
 * User: dogamboar
 * Date: 2/01/17
 * Time: 11:19 AM
 */

namespace Drupal\adf_social_field\Sharebutton;

use Drupal\adf_social_field\Sharebutton\SocialShareButtonInterface;
use Drupal\core\Url;


class FacebookShareButton implements SocialShareButtonInterface{
  
  public function getName(){
    return "facebook";
  }
  public function render(){
    $response =  [
      '#theme' => 'share_facebook',
      '#url' => \Drupal::url('<current>', [], ['absolute' => true]),
    ];
    return $response;
  }
  
}