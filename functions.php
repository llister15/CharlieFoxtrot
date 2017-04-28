<?php
/**
 * Charlie Foxtrot functions and definitions
 *
 * @link http://wonkasoft.com/charlie-foxtrot
 *
 * @package Charlie_Foxtrot
 */

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path('/inc/template-tags.php');

/**
 * Custom functions that act independently of the theme templates.
 */
require get_parent_theme_file_path('/inc/extras.php');

/**
 * Customizer additions.
 */
require get_parent_theme_file_path('/inc/customizer.php');

 /**
 * Theme Setup.
 */
require get_parent_theme_file_path( '/inc/setup.php' );

/**
 * Theme enqueues.
 */
require get_parent_theme_file_path( '/inc/enqueues.php' );

/**
 * Custom Social Widgets.
 */
require get_parent_theme_file_path( '/inc/social-widget.php' );