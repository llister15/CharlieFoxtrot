<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Charlie_Foxtrot
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php
	if ( !is_home() && !is_front_page()) {

		}
		else { ?>
		<div class="container-fluid">
			<div class="row w-slider">
				<?php get_template_part('template-parts/slider/theme', 'slider' ); ?>
			</div>
		</div>
		
		<div class="row w-dealer-logos">
		<div class="col-xs-12 text-center">
			<div class="col-xs-2 col-md-offset-1">
				<div>
					<?php
			      if(is_active_sidebar('dealer1')){
			       dynamic_sidebar('dealer1');
			      }
		      ?>	
      </div>
			</div>
			<div class="col-xs-2">
				<div>
					<?php
			      if(is_active_sidebar('dealer2')){
			       dynamic_sidebar('dealer2');
			      }
		      ?>	
				</div>
			</div>
			<div class="col-xs-2">
				<div>
					<?php
			      if(is_active_sidebar('dealer3')){
			       dynamic_sidebar('dealer3');
			      }
		      ?>	
				</div>
			</div>
			<div class="col-xs-2">
				<div>
					<?php
			      if(is_active_sidebar('dealer4')){
			       dynamic_sidebar('dealer4');
			      }
		      ?>	
				</div>
			</div>
			<div class="col-xs-2">
				<div>
					<?php
			      if(is_active_sidebar('dealer5')){
			       dynamic_sidebar('dealer5');
			      }
		      ?>	
				</div>
			</div>
		</div>
	</div>

	<div class="row w-quick-select">
		<div class="col-xs-6 text-center">
			<div class="col-xs-8 col-md-offset-2">
				<img src="//wonkasoft.com/ar500-targets/wp-content/uploads/2017/04/Monthly-Specials-1.jpg">
			</div>
		</div>
		<div class="col-xs-6 text-center">
			<div class="col-xs-8 col-md-offset-2">
				<img src="//wonkasoft.com/ar500-targets/wp-content/uploads/2017/04/New-Arrivals-1.jpg">
			</div>
		</div>
	</div>  
</main>

		<?php
		}
	?>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'charlie-foxtrot' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'charlie-foxtrot' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
