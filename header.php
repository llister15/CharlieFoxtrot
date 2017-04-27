<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Charlie_Foxtrot
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php get_the_title(); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="<?php if ( is_single() ) {
    single_post_title('', true); 
  } else {
    bloginfo('name'); echo " - "; bloginfo('description');
  }
  ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="w-wrapper">
  <header id="w-header" class="container-fluid">
      <div class="row w-head-space">
        <div class="hidden-xs hidden-sm col-md-3 center">
          <?php the_custom_logo();
          if (!has_custom_logo()) {
            ?><a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/default-logo.png'; ?>" /></a>
            <?php 
          } ?>
        </div>
        <?php wp_nav_menu( array( 
          'menu_class' => 'w-sub-menu pull-right', 
          'container_class' => 'hidden-xs hidden-sm col-xs-4 pull-right',
          'theme_location' => 'sub', 
          'fallback_cb' => false,
          ) ); ?>
      </div> <!-- end w-head-space -->
        <?php get_template_part('template-parts/header/search', 'form'); ?>

        <?php get_template_part('template-parts/navigation/nav', 'main' ); ?>
  </header> <!-- end header -->