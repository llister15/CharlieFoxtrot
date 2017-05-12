<?php 
// 
// 
// 
// 
// 
// 
//   
// Add theme support for selective refresh for widgets.
  add_theme_support( 'customize-selective-refresh-widgets' );

// Register Top Filters Widgets
  register_sidebar( array(
    'name'          =>  esc_html__( 'Top Filters', 'charlie-foxtrot' ),
    'id'            => 'top-filters-1',
    'description'   =>  esc_html__( 'Add upto 3 filter widgets here.', 'charlie-foxtrot' ),
    'before_widget' => '<div id="%1$s" class="col-xs-12 col-md-4 widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<label for="product_cat" class="widget-title">',
    'after_title'   => '</label> ',
  ) );

  // Register Social Widgets
  register_sidebar( array(
    'name'          =>  esc_html__( 'Social', 'charlie-foxtrot' ),
    'id'            => 'social',
    'description'   =>  esc_html__( 'Social Proof', 'charlie-foxtrot' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );

  // Register Footer Widgets.
  register_sidebar( array(
    'name' => esc_html__( 'Footer Menu 1','charlie-foxtrot' ),
    'id' => 'footer-menu1',
    'description' => esc_html__( 'Appears in the footer 1 area','charlie-foxtrot' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</div></aside>',
    'before_title' => '<h3 class="text-center">',
    'after_title' => '</h3><hr /><div class="col-xs-12 col-md-8 col-md-offset-2">',
  ) );
  register_sidebar( array(
    'name' => esc_html__( 'Footer Menu 2', 'charlie-foxtrot' ),
    'id' => 'footer-menu2',
    'description' => esc_html__( 'Appears in the footer 2 area', 'charlie-foxtrot' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</div></aside>',
    'before_title' => '<h3 class="text-center">',
    'after_title' => '</h3><hr /><div class="col-xs-12 col-md-8 col-md-offset-2">',
  ) );
  register_sidebar( array(
    'name' => esc_html__( 'Footer Menu 3', 'charlie-foxtrot' ),
    'id' => 'footer-menu3',
    'description' => esc_html__( 'Appears in the footer 3 area', 'charlie-foxtrot' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</div></aside>',
    'before_title' => '<h3 class="text-center">',
    'after_title' => '</h3><hr /><div class="col-xs-12 col-md-8 col-md-offset-2">',
  ) );