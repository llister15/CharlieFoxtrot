<?php
/*
* Charlie Foxtrot Customizer CSS
*
* @package WordPress
* @subpackage Charlie_Foxtrot
* @since 1.0
* @version 1.0
*/
//Added CSS for customizer.
function charlie_foxtrot_customizer_css() {
?>
    <style type="text/css">
      #customize-control-theme_slide_count > label > select {
        width: 15%;
      }
    </style>

<?php
}
add_action('customize_controls_print_styles', 'charlie_foxtrot_customizer_css');
?>