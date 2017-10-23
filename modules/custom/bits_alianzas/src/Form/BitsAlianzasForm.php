<?php

namespace Drupal\bits_alianzas\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Bits alianzas edit forms.
 *
 * @ingroup bits_alianzas
 */
class BitsAlianzasForm extends ContentEntityForm {
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\bits_alianzas\Entity\BitsAlianzas */
    $form = parent::buildForm($form, $form_state);
    $entity = $this->entity;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;
    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Bits alianzas.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Bits alianzas.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.bits_alianzas.canonical', ['bits_alianzas' => $entity->id()]);
  }

}
