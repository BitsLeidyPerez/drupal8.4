<?php

namespace Drupal\bits_alianzas\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Bits alianzas entities.
 */
class BitsAlianzasViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['bits_alianzas']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Bits alianzas'),
      'help' => $this->t('The Bits alianzas ID.'),
    );

    return $data ;
  }

}
