/**
 * Created by Adf-bits.
 */
(function ($, Drupal) {
    Drupal.behaviors.shopsBehavior = {
        attach: function (context, settings) {
            $('.node.node--type-servicio .field--name-field-nuestros-servicios .field-collection-item .share_social_networks_field')
            .addClass('share_social_networks_field_big');
        }
    };
})(jQuery, Drupal);