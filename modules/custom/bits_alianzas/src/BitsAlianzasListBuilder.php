<?php

namespace Drupal\bits_alianzas;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Bits alianzas entities.
 *
 * @ingroup bits_alianzas
 */
class BitsAlianzasListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Bits alianzas ID');
    $header['name'] = $this->t('Name');
    $header['titulo'] = $this->t('Título');
    $header['url'] = $this->t('Link');
    $header['logo'] = $this->t('Logo');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\bits_alianzas\Entity\BitsAlianzas */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $entity->label(),
      new Url(
        'entity.bits_alianzas.edit_form', array(
          'bits_alianzas' => $entity->id(),
        )
      )
    );
    $row['titulo']=$entity->getTitulo();
    $row['url']=$entity->getUrl();
    $row['logo']=$entity->getLogo();
    return $row + parent::buildRow($entity);
  }

}
