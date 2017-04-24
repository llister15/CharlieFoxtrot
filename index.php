<?php
/**
 * The main template file
 *
 *
 * @link http://wonkasoft.com/charlie-foxtrot
 *
 * @package Charlie_Foxtrot
 */

get_header(); ?>

<main class="container-fluid">
	<div class="row w-slider">
		<?php get_template_part('template-parts/slider/theme', 'slider' ); ?>
	</div>

<?php
get_sidebar();
get_footer();
