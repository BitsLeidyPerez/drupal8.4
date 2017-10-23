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


class YoutubeButton implements SocialShareButtonInterface{
  
  public function getName(){
    return "youtube";
  }
  public function render(){
    $response =  [
      '#theme' => 'share_youtube',
      '#url' => \Drupal::url('<current>', [], ['absolute' => true]),
    ];
    return $response;
  }
  
}