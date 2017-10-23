<?php

namespace Drupal\bits_alianzas;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Bits alianzas entities.
 *
 * @ingroup bits_alianzas
 */
interface BitsAlianzasInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.
  /**
   * Gets the Bits alianzas name.
   *
   * @return string
   *   Name of the Bits alianzas.
   */
  public function getName();

  /**
   * Sets the Bits alianzas name.
   *
   * @param string $name
   *   The Bits alianzas name.
   *
   * @return \Drupal\bits_alianzas\BitsAlianzasInterface
   *   The called Bits alianzas entity.
   */
  public function setName($name);

  /**
   * Gets the Bits alianzas creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Bits alianzas.
   */
  public function getCreatedTime();

  /**
   * Sets the Bits alianzas creation timestamp.
   *
   * @param int $timestamp
   *   The Bits alianzas creation timestamp.
   *
   * @return \Drupal\bits_alianzas\BitsAlianzasInterface
   *   The called Bits alianzas entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Bits alianzas published status indicator.
   *
   * Unpublished Bits alianzas are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Bits alianzas is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Bits alianzas.
   *
   * @param bool $published
   *   TRUE to set this Bits alianzas to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\bits_alianzas\BitsAlianzasInterface
   *   The called Bits alianzas entity.
   */
  public function setPublished($published);

}
