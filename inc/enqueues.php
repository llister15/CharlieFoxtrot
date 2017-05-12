<?php
/**
 * Charlie Foxtrot functions and definitions
 *
 * @link http://wonkasoft.com/charlie-foxtrot
 *
 * @package Charlie_Foxtrot
 */

 function charlie_foxtrot_enqueues() {
 
     // Styles
      wp_enqueue_style( 'charlie-foxtrot-boot', get_template_directory_uri() .'/assets/css/bootstrap.min.css');
      wp_enqueue_style( 'style', get_stylesheet_uri());

    //Scripts
      wp_enqueue_script( 'charlie-foxtrot-ajaxs-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js', '3.2.0', true);
      wp_enqueue_script( 'charlie-foxtrot-boot-js', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array('charlie-foxtrot-ajaxs-js'), '3.3.7', true);
      wp_enqueue_script( 'charlie-foxtrot-js', get_template_directory_uri() .'/assets/js/charlie-foxtrot-js.js', array('charlie-foxtrot-ajaxs-js'), '1.0', true);
      wp_enqueue_script( 'jquerytouchSwipe', get_template_directory_uri() .'/assets/js/jquery.touchSwipe.min.js', array('jquery'), '1.6.4', true);

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
 }
add_action( 'wp_enqueue_scripts', 'charlie_foxtrot_enqueues' );

function charlie_foxtrot_admin_enqueues() {
      wp_enqueue_media();
      wp_enqueue_script( 'back-end', get_template_directory_uri() .'/assets/js/back-end.js', array('jquery'), '1.0', true);
      wp_enqueue_script( 'customizer-controls', get_template_directory_uri() .'/assets/js/customizer-controls.js', array('jquery'), '1.0', true);
}
add_action( 'admin_enqueue_scripts', 'charlie_foxtrot_admin_enqueues' );