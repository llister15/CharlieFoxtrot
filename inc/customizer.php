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
  'title'      => __( 'Slider Options', 'charlie-foxtrot' ),
  'description' => 'Slider Options: <br/>Slide count can be up to 5 slides. <br/><i>Recommended size <strong>1920x770</strong></i>',
  'priority' => 101,
  ) );

  //Slider Enabled by default.
  $wp_customize->add_setting('theme_slider_check', array(
    'default' => 'checked',
    ));

  $wp_customize->add_control('theme_slider_check', array(
    'label' => __('Enable Slider', 'charlie-foxtrot'),
    'type' => 'checkbox',
    'section' => 'slider_options',
    'settings' => 'theme_slider_check',
   ));

  //Slider Count
  $wp_customize->add_setting('theme_slide_count', array(
    'default' => '1',
    ));

  $wp_customize->add_control('theme_slide_count', array(
    'label' => __('Slide Count:', 'charlie-foxtrot'),
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
  for ($i=0; $i < get_theme_mod('theme_slide_count'); $i++) { 
    $g = $i + 1;
    //Slider Controls
    $wp_customize->add_setting('theme_slider_'.$g, array(
    'default'        => '',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'theme_slider_'.$g, array(
    'label'      => __('Slider Image '. $g, 'charlie-foxtrot'),
    'section'    => 'slider_options',
    'settings'   => 'theme_slider_'.$g,
    'type' => 'image',
    ) ));
  }

  //Feature Item Section   
  $wp_customize->add_section(  'feature_items' , array(
  'title'      => __( 'Featured Section', 'charlie-foxtrot' ),
  'description' => 'Feature Section: <br/>This section has two images for selection. <br/><i>Recommended size <strong>1920x770</strong></i>',
  'priority' => 102,
  ) );


  //Feature Item settings 1
  $wp_customize->add_setting('feature_item_1', array(
    'default' => '',
    ));

  // Feature Item controls 1 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_item_1', array(
    'label'      => __('Feature Image 1 left side', 'charlie-foxtrot'),
    'section'    => 'feature_items',
    'settings'   => 'feature_item_1',
    'type' => 'image',
    ) ));

    //Feature Item settings 1 url
  $wp_customize->add_setting('feature_item_1_link', array(
    'default' => '',
    ));

  // Feature Item controls 1 url
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'feature_item_1_link', array(
    'label'      => __('Feature Image 1 Link', 'charlie-foxtrot'),
    'section'    => 'feature_items',
    'settings'   => 'feature_item_1_link',
    'type' => 'dropdown-pages',
    ) ));

    //Feature Item settings 2
  $wp_customize->add_setting('feature_item_2', array(
    'default' => '',
    ));

  // Feature Item controls 2
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_item_2', array(
    'label'      => __('Feature Image2', 'charlie-foxtrot'),
    'section'    => 'feature_items',
    'settings'   => 'feature_item_2',
    'mime_type' => 'image',
    ) ));

    //Feature Item settings 2 url
  $wp_customize->add_setting('feature_item_2_link', array(
    'default' => '',
    ));

  // Feature Item controls 2 url
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'feature_item_2_link', array(
    'label'      => __('Feature Image 2 Link', 'charlie-foxtrot'),
    'section'    => 'feature_items',
    'settings'   => 'feature_item_2_link',
    'type' => 'dropdown-pages',
    ) ));


  //Mobile Footer Menu   
  $wp_customize->add_section(  'mobile_options' , array(
  'title'      => __( 'Mobile Options', 'charlie-foxtrot' ),
  'description' => 'Mobile Options: <br/>This section will only be shown on mobile devices.',
  'priority' => 150,
  ) );

  //Mobile Footer Menu Deals url
  $wp_customize->add_setting('mobile_options', array(
    'default' => '',
    ));

  // Mobile Footer Menu Deals url
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mobile_options', array(
    'label'      => __('Deals Link For Mobile', 'charlie-foxtrot'),
    'section'    => 'mobile_options',
    'settings'   => 'mobile_options',
    'type' => 'dropdown-pages',
    ) ));

}
add_action( 'customize_register', 'charlie_foxtrot_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function charlie_foxtrot_customize_preview_js() {
	wp_enqueue_script( 'charlie_foxtrot_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), true );
}
add_action( 'customize_preview_init', 'charlie_foxtrot_customize_preview_js' );

require get_parent_theme_file_path( '/inc/customizer-css.php' );