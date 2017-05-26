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
  
  //Mega Menu Section   
  $wp_customize->add_section(  'mega_menu' , array(
  'title'      => __( 'Mega Menu', 'charlie-foxtrot' ),
  'description' => 'Mega Menu: <br/>Mega Menu can be up to 9 images without scrolling. <br/><i>Recommended size <strong>289x182</strong></i>',
  'priority' => 101,
  ) );

  //Mega Menu images settings
  $wp_customize->add_setting('mega_menu_img_3', array(
  'default'        => '',
  ));
  $wp_customize->add_setting('mega_menu_img_4', array(
  'default'        => '',
  ));
  $wp_customize->add_setting('mega_menu_img_5', array(
  'default'        => '',
  ));
  $wp_customize->add_setting('mega_menu_img_6', array(
  'default'        => '',
  ));
  $wp_customize->add_setting('mega_menu_img_7', array(
  'default'        => '',
  ));
  $wp_customize->add_setting('mega_menu_img_8', array(
  'default'        => '',
  ));
  $wp_customize->add_setting('mega_menu_img_9', array(
  'default'        => '',
  ));
  $wp_customize->add_setting('mega_menu_img_10', array(
  'default'        => '',
  ));
  $wp_customize->add_setting('mega_menu_img_11', array(
  'default'        => '',
  ));

  //Mega Menu images controls
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mega_menu_control_1', array(
  'label'      => __('Mega Menu Img 1', 'charlie-foxtrot'),
  'section'    => 'mega_menu',
  'settings'   => 'mega_menu_img_3',
  'type' => 'image',
  ) ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mega_menu_control_2', array(
  'label'      => __('Mega Menu Img 2', 'charlie-foxtrot'),
  'section'    => 'mega_menu',
  'settings'   => 'mega_menu_img_4',
  'type' => 'image',
  ) ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mega_menu_control_3', array(
  'label'      => __('Mega Menu Img 3', 'charlie-foxtrot'),
  'section'    => 'mega_menu',
  'settings'   => 'mega_menu_img_5',
  'type' => 'image',
  ) ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mega_menu_control_4', array(
  'label'      => __('Mega Menu Img 4', 'charlie-foxtrot'),
  'section'    => 'mega_menu',
  'settings'   => 'mega_menu_img_6',
  'type' => 'image',
  ) ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mega_menu_control_5', array(
  'label'      => __('Mega Menu Img 5', 'charlie-foxtrot'),
  'section'    => 'mega_menu',
  'settings'   => 'mega_menu_img_7',
  'type' => 'image',
  ) ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mega_menu_control_6', array(
  'label'      => __('Mega Menu Img 6', 'charlie-foxtrot'),
  'section'    => 'mega_menu',
  'settings'   => 'mega_menu_img_8',
  'type' => 'image',
  ) ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mega_menu_control_7', array(
  'label'      => __('Mega Menu Img 7', 'charlie-foxtrot'),
  'section'    => 'mega_menu',
  'settings'   => 'mega_menu_img_9',
  'type' => 'image',
  ) ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mega_menu_control_8', array(
  'label'      => __('Mega Menu Img 8', 'charlie-foxtrot'),
  'section'    => 'mega_menu',
  'settings'   => 'mega_menu_img_10',
  'type' => 'image',
  ) ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mega_menu_control_9', array(
  'label'      => __('Mega Menu Img 9', 'charlie-foxtrot'),
  'section'    => 'mega_menu',
  'settings'   => 'mega_menu_img_11',
  'type' => 'image',
  ) ));

  //Slider Options   
  $wp_customize->add_section(  'slider_options' , array(
  'title'      => __( 'Slider Options', 'charlie-foxtrot' ),
  'description' => 'Slider Options: <br/>Slide count can be up to 5 slides. <br/><i>Recommended size <strong>1920x770</strong></i>',
  'priority' => 102,
  ) );

  //Slider Enabled by default.
  $wp_customize->add_setting('theme_slider_check', array(
    'default' => 'checked',
    'transport' => 'postMessage',
    ));

  $wp_customize->add_control('theme_slider_check', array(
    'label' => __('Enable Slider', 'charlie-foxtrot'),
    'type' => 'checkbox',
    'section' => 'slider_options',
    'settings' => 'theme_slider_check',
    'transport' => 'postMessage',
   ));

  //Slider Count
  $wp_customize->add_setting('theme_slide_count', array(
    'default' => '1',
    'transport' => 'postMessage',
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
        $count = end($wp_customize->get_control('theme_slide_count')->choices);
        //Slider Build
        for ($i=0; $i < $count; $i++) { 
          $g = $i + 1;
          //Slider Images Settings
          $wp_customize->add_setting('theme_slider_'.$g, array(
          'default'        => '',
          ));
          //Slider Images Links Settings
          $wp_customize->add_setting('slider_link_'.$g, array(
          'default'        => '',
          ));
          //Slider Images Controls
          $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'theme_slider_'.$g, array(
          'label'      => __('Slider Image '. $g, 'charlie-foxtrot'),
          'section'    => 'slider_options',
          'settings'   => 'theme_slider_'.$g,
          'type' => 'image',
          ) ));
          //Slider Images Links Controls
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'slider_link_control_'.$g, array(
            'label'      => __('Slider Link '. $g, 'charlie-foxtrot'),
            'section'    => 'slider_options',
            'settings'   => 'slider_link_'.$g,
            'type' => 'text',
            ) ));
        } // end loop

  //Feature Item Section   
  $wp_customize->add_section(  'feature_items' , array(
  'title'      => __( 'Featured Section', 'charlie-foxtrot' ),
  'description' => 'Feature Section: <br/>This section has two images for selection. <br/><i>Recommended size <strong>1920x770</strong></i>',

  'priority' => 103,
  ) );


  //Feature Item settings 1
  $wp_customize->add_setting('feature_image_1', array(
    'default' => '',
    'transport' => 'postMessage',
    ));

  // Feature Item controls 1 
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_image_1', array(
    'label'      => __('Feature Image 1', 'charlie-foxtrot'),
    'section'    => 'feature_items',
    'settings'   => 'feature_image_1',
    'type' => 'image',
    ) ));

    //Feature Item settings 1 url
  $wp_customize->add_setting('feature_image_1_link', array(
    'default' => '',
    'transport' => 'postMessage',
    ));

  // Feature Item controls 1 url
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'feature_image_1_link', array(
    'label'      => __('Feature Image 1 Link', 'charlie-foxtrot'),
    'section'    => 'feature_items',
    'settings'   => 'feature_image_1_link',
    'type' => 'dropdown-pages',
    ) ));

    //Feature Item settings 2
  $wp_customize->add_setting('feature_image_2', array(
    'default' => '',
    'transport' => 'postMessage',
    ));

  // Feature Item controls 2
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_image_2', array(
    'label'      => __('Feature Image2', 'charlie-foxtrot'),
    'section'    => 'feature_items',
    'settings'   => 'feature_image_2',
    'type' => 'image',
    ) ));

    //Feature Item settings 2 url
  $wp_customize->add_setting('feature_image_2_link', array(
    'default' => '',
    'transport' => 'postMessage',
    ));

  // Feature Item controls 2 url
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'feature_image_2_link', array(
    'label'      => __('Feature Image 2 Link', 'charlie-foxtrot'),
    'section'    => 'feature_items',
    'settings'   => 'feature_image_2_link',
    'type' => 'dropdown-pages',
    ) ));


  //Mobile Footer Menu   
 $wp_customize->add_section(  'mobile_options' , array(
 'title'      => __( 'Mobile Options', 'charlie-foxtrot' ),
 'description' => 'Mobile Options: <br/>This section will only be shown on mobile devices.',
 'priority' => 150,
 ) );

 //Mobile Footer Menu Deals url
 $wp_customize->add_setting('mobile_option_deals_link', array(
   'default' => '',
   ));

 // Mobile Footer Menu Deals url
 $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mobile_option_deals_control', array(
   'label'      => __('Deals Link For Mobile', 'charlie-foxtrot'),
   'section'    => 'mobile_options',
   'settings'   => 'mobile_option_deals_link',
   'type' => 'dropdown-pages',
   ) ));

}
add_action( 'customize_register', 'charlie_foxtrot_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function charlie_foxtrot_customize_preview_js() {
	wp_enqueue_script( 'charlie_foxtrot_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'jquery','customize-preview' ), true );
}
add_action( 'customize_preview_init', 'charlie_foxtrot_customize_preview_js' );

require get_parent_theme_file_path( '/inc/customizer-css.php' );