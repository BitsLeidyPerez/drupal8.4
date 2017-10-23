<?php

namespace Drupal\bits_alianzas\Entity;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\bits_alianzas\BitsAlianzasInterface;
use Drupal\user\UserInterface;

/**
 * Defines the Bits alianzas entity.
 *
 * @ingroup bits_alianzas
 *
 * @ContentEntityType(
 *   id = "bits_alianzas",
 *   label = @Translation("Bits alianzas"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\bits_alianzas\BitsAlianzasListBuilder",
 *     "views_data" = "Drupal\bits_alianzas\Entity\BitsAlianzasViewsData",
 *
 *     "form" = {
 *       "default" = "Drupal\bits_alianzas\Form\BitsAlianzasForm",
 *       "add" = "Drupal\bits_alianzas\Form\BitsAlianzasForm",
 *       "edit" = "Drupal\bits_alianzas\Form\BitsAlianzasForm",
 *       "delete" = "Drupal\bits_alianzas\Form\BitsAlianzasDeleteForm",
 *     },
 *     "access" = "Drupal\bits_alianzas\BitsAlianzasAccessControlHandler",
 *     "route_provider" = {
 *       "html" = "Drupal\bits_alianzas\BitsAlianzasHtmlRouteProvider",
 *     },
 *   },
 *   base_table = "bits_alianzas",
 *   admin_permission = "administer bits alianzas entities",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name",
 *     "uuid" = "uuid",
 *     "uid" = "user_id",
 *     "langcode" = "langcode",
 *     "status" = "status",
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/bits_alianzas/{bits_alianzas}",
 *     "add-form" = "/admin/structure/bits_alianzas/add",
 *     "edit-form" = "/admin/structure/bits_alianzas/{bits_alianzas}/edit",
 *     "delete-form" = "/admin/structure/bits_alianzas/{bits_alianzas}/delete",
 *     "collection" = "/admin/structure/bits_alianzas",
 *   },
 *   field_ui_base_route = "bits_alianzas.settings"
 * )
 */
class BitsAlianzas extends ContentEntityBase implements BitsAlianzasInterface {
  use EntityChangedTrait;
  /**
   * {@inheritdoc}
   */
  public static function preCreate(EntityStorageInterface $storage_controller, array &$values) {
    parent::preCreate($storage_controller, $values);
    $values += array(
      'user_id' => \Drupal::currentUser()->id(),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return $this->get('name')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setName($name) {
    $this->set('name', $name);
    return $this;
  }
    /**
     * {@inheritdoc}
     */
    public function getTitulo() {
        return $this->get('titulo')->value;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitulo($titulo) {
        $this->set('url', $titulo);
        return $this;
    }
    /**
     * {@inheritdoc}
     */
    public function getUrl() {
        return $this->get('url')->value;
    }

    /**
     * {@inheritdoc}
     */
    public function setUrl($url) {
        $this->set('url', $url);
        return $this;
    }
    /**
     * {@inheritdoc}
     */
    public function getLogo() {
        return $this->get('logo')->value;
    }


  /**
   * {@inheritdoc}
   */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setCreatedTime($timestamp) {
    $this->set('created', $timestamp);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwner() {
    return $this->get('user_id')->entity;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwnerId() {
    return $this->get('user_id')->target_id;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwnerId($uid) {
    $this->set('user_id', $uid);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwner(UserInterface $account) {
    $this->set('user_id', $account->id());
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function isPublished() {
    return (bool) $this->getEntityKey('status');
  }

  /**
   * {@inheritdoc}
   */
  public function setPublished($published) {
    $this->set('status', $published ? NODE_PUBLISHED : NODE_NOT_PUBLISHED);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields['id'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('ID'))
      ->setDescription(t('The ID of the Bits alianzas entity.'))
      ->setReadOnly(TRUE);
    $fields['uuid'] = BaseFieldDefinition::create('uuid')
      ->setLabel(t('UUID'))
      ->setDescription(t('The UUID of the Bits alianzas entity.'))
      ->setReadOnly(TRUE);

    $fields['user_id'] = BaseFieldDefinition::create('entity_reference')
      ->setLabel(t('Authored by'))
      ->setDescription(t('The user ID of author of the Bits alianzas entity.'))
      ->setRevisionable(TRUE)
      ->setSetting('target_type', 'user')
      ->setSetting('handler', 'default')
      ->setDefaultValueCallback('Drupal\node\Entity\Node::getCurrentUserId')
      ->setTranslatable(TRUE)
      ->setDisplayOptions('view', array(
        'label' => 'hidden',
        'type' => 'author',
        'weight' => 0,
      ))
      ->setDisplayOptions('form', array(
        'type' => 'entity_reference_autocomplete',
        'weight' => 5,
        'settings' => array(
          'match_operator' => 'CONTAINS',
          'size' => '60',
          'autocomplete_type' => 'tags',
          'placeholder' => '',
        ),
      ))
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Nombre'))
      ->setDescription(t('The name of the Bits alianzas entity.'))
      ->setSettings(array(
        'max_length' => 50,
        'text_processing' => 0,
      ))
      ->setDefaultValue('')
      ->setDisplayOptions('view', array(
        'label' => 'above',
        'type' => 'string',
        'weight' => -4,
      ))
      ->setDisplayOptions('form', array(
        'type' => 'string_textfield',
        'weight' => -4,
      ));
//      ->setDisplayConfigurable('form', TRUE)
//      ->setDisplayConfigurable('view', TRUE);

      $fields['titulo'] = BaseFieldDefinition::create('string')
          ->setLabel(t('Título'))
          ->setDescription(t('Nombre de la empresa.'))
          ->setSettings(array(
              'max_length' => 50,
              'text_processing' => 0,
          ))
          ->setDefaultValue('')
          ->setDisplayOptions('view', array(
              'label' => 'above',
              'type' => 'string',
              'weight' => -4,
          ))
          ->setDisplayOptions('form', array(
              'type' => 'string_textfield',
              'weight' => -4,
          ))
          ->setDisplayConfigurable('form', TRUE)
          ->setDisplayConfigurable('view', TRUE);

      $fields['url'] = BaseFieldDefinition::create('string')
          ->setLabel(t('Link'))
          ->setDescription(t('Sitio web de la empresa.'))
          ->setSettings(array(
              'max_length' => 100,
              'text_processing' => 0,
          ))
          ->setDefaultValue('')
          ->setDisplayOptions('view', array(
              'label' => 'above',
              'type' => 'string',
              'weight' => -1,
          ))
          ->setDisplayOptions('form', array(
              'type' => 'string_textfield',
              'weight' => -4,
          ))

      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

      $fields['logo'] = BaseFieldDefinition::create('image')
          ->setLabel(t('Logo'))
          ->setDescription(t('Imagen de logo'))
          ->setSetting('target_type', 'file')
          ->setSetting('file_extensions', 'jpg jpeg png gif')
          ->setSetting('file_directory', 'images/alianza_logo')
          ->setSetting('max_filesize', 1024*1024)
          ->setDisplayOptions('view', array(
              'type' => 'default',
              'weight' => 1,
          ))
          ->setDisplayOptions('form', array(
              'type' => 'image_image',
              'weight' => 1,
          ))
          ->setDisplayConfigurable('form', TRUE)
          ->setDisplayConfigurable('view', TRUE);

      $fields['status'] = BaseFieldDefinition::create('boolean')
      ->setLabel(t('Publishing status'))
      ->setDescription(t('A boolean indicating whether the Bits alianzas is published.'))
      ->setDefaultValue(TRUE);

    $fields['langcode'] = BaseFieldDefinition::create('language')
      ->setLabel(t('Language code'))
      ->setDescription(t('The language code for the Bits alianzas entity.'))
      ->setDisplayOptions('form', array(
        'type' => 'language_select',
        'weight' => 10,
      ))
      ->setDisplayConfigurable('form', TRUE);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('The time that the entity was created.'));

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed'))
      ->setDescription(t('The time that the entity was last edited.'));

    return $fields;
  }

}
