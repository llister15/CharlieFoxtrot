<?php
/**
 * The sidebar containing the main widget area
 *
 * @link http://wonkasoft.com/charlie-foxtrot
 *
 * @package Charlie_Foxtrot
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
