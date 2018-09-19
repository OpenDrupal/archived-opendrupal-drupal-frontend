/**
 * @file
 */
(function ($, Drupal, drupalSettings) {

  'use strict';

  /**
   * Adds classes to front page images to make them round and responsive.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches behaviour to add classes to front page images.
   */
  Drupal.behaviors.agencyImageClasses = {
    attach: function () {

      $('#team').find('.team-member').find('img').each(function() {
        $(this).addClass('img-responsive').addClass('img-circle');
      });

      $('#portfolio').find('.portfolio-item').find('img').each(function() {
        $(this).addClass('img-responsive');
      });

      $('#about').find('.timeline-image').find('img').each(function() {
        $(this).addClass('img-responsive').addClass('img-circle');
      });

    }
  };

})(jQuery, Drupal, drupalSettings);
