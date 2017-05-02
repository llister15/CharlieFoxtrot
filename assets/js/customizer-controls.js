/**
 * File customizer-controls.js.
 *
 * Theme Customizer enhancements for a better admin experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
  
  $(document).ready(function() {
    $check = $('[data-customize-setting-link="theme_slider_check"]').val();
    $count = $('[data-customize-setting-link="theme_slide_count"]').val();
    if ($check == '') {
      $('#customize-control-theme_slider_1').slideUp();
      $('#customize-control-theme_slider_2').slideUp();
      $('#customize-control-theme_slider_3').slideUp();
      $('#customize-control-theme_slider_4').slideUp();
      $('#customize-control-theme_slider_5').slideUp();
    } else if ($check == 1) {
      $('#customize-control-theme_slider_1').slideUp();
      $('#customize-control-theme_slider_2').slideUp();
      $('#customize-control-theme_slider_3').slideUp();
      $('#customize-control-theme_slider_4').slideUp();
      $('#customize-control-theme_slider_5').slideUp();
      for (var i = 0; i < $count; i++) {
        var g = i + 1;
        $('#customize-control-theme_slider_' + g).slideDown();
      }
    }
  });
  wp.customize('theme_slider_check', function( value ) {
      value.bind( function( newval ) {
        $count = $('[data-customize-setting-link="theme_slide_count"]').val();
      if ( newval === false) {
        $('#customize-control-theme_slider_1').slideUp();
        $('#customize-control-theme_slider_2').slideUp();
        $('#customize-control-theme_slider_3').slideUp();
        $('#customize-control-theme_slider_4').slideUp();
        $('#customize-control-theme_slider_5').slideUp();
      } else {
        for (var i = 0; i < $count; i++) {
        var g = i + 1;
        $('#customize-control-theme_slider_' + g).slideToggle();
        }
      }
    });
  });
  wp.customize('theme_slide_count', function ( value ) {
    value.bind( function( newval ) {
      $count = $('[data-customize-setting-link="theme_slide_count"]').val();
      $total_slides = $('#sub-accordion-section-slider_options>.customize-control-image:visible').length;
      if ($count > $total_slides) {
          for (var i = $total_slides; i < $count; i++) {
            var g = i + 1;
          $('#customize-control-theme_slider_' + g).slideDown();
          }
      }
      if ($count < $total_slides) {
          for (var i = $total_slides; i > $count; i--) {
          $('#customize-control-theme_slider_' + i).slideUp();
          }
      }
      
    });
  });

} )( jQuery );