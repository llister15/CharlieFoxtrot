<?php
/*
 * Displays Navigation
 *
 * @package WordPress
 * @subpackage Wonka_Target
 * @since 1.0
 * @version 1.0
 */
?>

<div class="col-xs-12 w-nav-bar">
  <?php wp_nav_menu( array( 
    'menu_class' => 'w-primary-menu', 
    'container_class' => 'col-xs-10 text-center',
    'theme_location' => 'top', 
    'fallback_cb' => false,
    ) ); ?>
    <div class="col-xs-2 col-md-pull-1 text-center">
      <?php get_search_form(); ?>
    </div>
  </div>