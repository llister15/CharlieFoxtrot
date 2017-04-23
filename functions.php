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
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

 /**
 * Theme Setup.
 */
require get_parent_theme_file_path( '/inc/setup.php' );
/**
 * Theme enqueues.
 */
require get_parent_theme_file_path( '/inc/enqueues.php' );