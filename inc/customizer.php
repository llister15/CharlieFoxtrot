<?php
/**
 * Charlie Foxtrot Theme Customizer
 *
 * @package Charlie_Foxtrot
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function charlie_foxtrot_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
  //Slider Options   
  $wp_customize->add_section(  'slider_options' , array(
  'title'      => __( 'Slider Options', 'wonka-target' ),
  'description' => 'Slider Options: <br/>Slide count can be up to 5 slides. <br/><i>Recommended size <strong>1920x770</strong></i>',
  'priority' => 101,
  ) );

  //Slider Enabled by default.
  $wp_customize->add_setting('theme_slider_check', array(
    'default' => 'checked',
    ));

  $wp_customize->add_control('theme_slider_check', array(
    'label' => __('Enable Slider', 'wonka-target'),
    'type' => 'checkbox',
    'section' => 'slider_options',
    'settings' => 'theme_slider_check',
   ));

  //Slider Count
  $wp_customize->add_setting('theme_slide_count', array(
    'default' => '1',
    ));

  $wp_customize->add_control('theme_slide_count', array(
    'label' => __('Slide Count:', 'wonka-target'),
   'type' => 'select',
   'choices' => array(
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5',
    ),
    'section' => 'slider_options',
    'settings' => 'theme_slide_count',
    ));

  //Slider Build
  for ($i=1; $i < get_theme_mod('theme_slide_count')+1; $i++) { 
    //Slider Controls
    $wp_customize->add_setting('theme_slider_'.$i, array(
    'default'        => '',
    ));
    
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'theme_slider_'.$i, array(
    'label'      => __('Slider Image '. $i, 'wonka-target'),
    'section'    => 'slider_options',
    'settings'   => 'theme_slider_'.$i,
    'mime_type' => 'image',
    ) ));
  }

}
add_action( 'customize_register', 'charlie_foxtrot_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function charlie_foxtrot_customize_preview_js() {
	wp_enqueue_script( 'charlie_foxtrot_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'charlie_foxtrot_customize_preview_js' );

require get_parent_theme_file_path( '/inc/customizer-css.php' );
