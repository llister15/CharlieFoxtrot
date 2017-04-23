<?php
/**
 * Charlie Foxtrot functions and definitions
 *
 * @link http://wonkasoft.com/charlie-foxtrot
 *
 * @package Charlie_Foxtrot
 */

 function charlie_foxtrot_enqueues() {
 	wp_enqueue_style( 'style', get_stylesheet_uri());

  wp_enqueue_style( 'charlie-foxtrot-style', get_stylesheet_uri() );

  wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

  // JavaScript enqueues
  wp_enqueue_script( 'charlie-foxtrot-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  wp_enqueue_script( 'bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), 'all', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
 }
add_action( 'wp_enqueue_scripts', 'charlie_foxtrot_enqueues' );
