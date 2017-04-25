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
      wp_enqueue_style( 'wonka-boot', get_template_directory_uri() .'/assets/css/bootstrap.min.css');
      wp_enqueue_style( 'style', get_stylesheet_uri());

    //Scripts
      wp_enqueue_script( 'wonka-ajaxs-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js', '3.2.0', true);
      wp_enqueue_script( 'wonka-boot-js', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array('wonka-ajaxs-js'), '3.3.7', true);
      wp_enqueue_script( 'wonka-js', get_template_directory_uri() .'/assets/js/wonka-js.js', array('wonka-ajaxs-js'), '1.0', true);

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
 }
add_action( 'wp_enqueue_scripts', 'charlie_foxtrot_enqueues' );
