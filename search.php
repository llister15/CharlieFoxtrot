<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Charlie_Foxtrot
 */

get_header(); ?>

<div class="container-fluid w-search-wrap">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
		?>
			<div class="row page-header">
				<div class="col-xs-12">
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'charlie-foxtrot' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</div>
			</div><!-- .page-header -->
		<?php
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', 'excerpt' );

			endwhile; // End of the loop.

			/*the_posts_pagination( array(
				'prev_text' => wonka-target_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'wonka-target' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'wonka-target' ) . '</span>' . wonka-target_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'wonka-target' ) . ' </span>',
			) );*/
			the_posts_navigation();
			

		else : 

				get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php 
get_footer();