<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link http://wonkasoft.com/charlie-foxtrot
*
* @package Charlie_Foxtrot
*/

get_header(); ?>

<?php
if ( !is_home() && !is_front_page()) {
  ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php
      while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'page' );

// If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

endwhile; // End of the loop.
?>

</main><!-- #main -->
</div><!-- #primary -->
<?php
}
else { ?>
<div id="home-content">
<div class="container-fluid">
  <div class="row w-slider">
    <?php get_template_part('template-parts/slider/theme', 'slider' ); ?>
  </div>

<?php if ((!is_active_sidebar('social_1')) && (!is_active_sidebar('social_2')) && (!is_active_sidebar('social_3')) && (!is_active_sidebar('social_4')) && (!is_active_sidebar('social_5'))) {
  
} else { ?>
  <div class="row w-social-wigets">
    <div class="col-xs-12 text-center">
      <div class="col-xs-12 col-md-2 col-md-offset-1">
        <?php
        if(is_active_sidebar('social_1')){
          dynamic_sidebar('social_1');
        }
        ?>	
      </div>
      <div class="col-xs-12 col-md-2">
        <?php
        if(is_active_sidebar('social_2')){
          dynamic_sidebar('social_2');
        }
        ?>
      </div>
      <div class="col-xs-12 col-md-2">
        <?php
        if(is_active_sidebar('social_3')){
          dynamic_sidebar('social_3');
        }
        ?>
      </div>
      <div class="col-xs-12 col-md-2">
        <?php
        if(is_active_sidebar('social_4')){
          dynamic_sidebar('social_4');
        }
        ?>
      </div>
      <div class="col-xs-12 col-md-2">
        <?php
        if(is_active_sidebar('social_5')){
          dynamic_sidebar('social_5');
        }
        ?>
      </div>
    </div>
  </div>
  <?php
   } //  End IF for Social section
  ?>
<?php 
$feature1 = get_theme_mod('feature_item_1');
if (empty('feature_item_1')) {
  
} else { ?>
  <div class="row w-featured-post">
    <?php get_template_part('template-parts/featured/featured', 'items' ); ?>
  </div>  

<?php
   } //  End IF for feature section
  ?>
</div> <!-- end main content container -->
</div> <!-- end home-content -->
<?php
} // End IF is_home
?>

<?php
get_footer();

