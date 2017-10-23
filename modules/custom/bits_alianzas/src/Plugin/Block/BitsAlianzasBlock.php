<?php
namespace Drupal\bits_alianzas\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "bits_alianzas",
 *   admin_label = @Translation("Alianzas block"),
 *   category = @Translation("Alianzas de Bits"),
 * )
 */
class BitsAlianzasBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
//        return array(
//            '#theme' => 'bits_alianzas',
//            '#titulo' => 'Alianzas',
//            '#descripcion' => 'Alianzas de Bits'
//        );
    }

}