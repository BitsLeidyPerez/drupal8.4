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


class PinterestShareButton implements SocialShareButtonInterface{
  
  public function getName(){
    return "pinterest";
  }
  public function render(){
    $response =  [
      '#theme' => 'share_pinterest',
      '#url' => \Drupal::url('<current>', [], ['absolute' => true]),
    ];
    return $response;
  }
  
}