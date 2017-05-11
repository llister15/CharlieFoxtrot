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
  <div id="main-content">
    <div class="container-fluid">
      <div class="row-fluid main-content-row">
        <main id="main" class="site-main" role="main">

          <?php
          while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content/content', 'page' );

// If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;

endwhile; // End of the loop.
?>

</main><!-- #main -->
</div>
</div>
</div><!-- #main content -->
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
      <div class="col-xs-12 text-center visible-lg">
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
      </div> <!-- End of large social widgets -->
      
      <!-- Carousel for mobile version only -->
      <div class="text-center hidden-lg">
        <div id="socialCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#socialCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#socialCarousel" data-slide-to="1"></li>
            <li data-target="#socialCarousel" data-slide-to="2"></li>
            <li data-target="#socialCarousel" data-slide-to="3"></li>
            <li data-target="#socialCarousel" data-slide-to="4"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
             <?php
             if(is_active_sidebar('social_1')){
              dynamic_sidebar('social_1');
            }
            ?>
          </div>

          <div class="item">
           <?php
           if(is_active_sidebar('social_2')){
            dynamic_sidebar('social_2');
          }
          ?>
        </div>

        <div class="item">
         <?php
         if(is_active_sidebar('social_3')){
          dynamic_sidebar('social_3');
        }
        ?>
      </div>

      <div class="item">
       <?php
       if(is_active_sidebar('social_4')){
        dynamic_sidebar('social_4');
      }
      ?>
    </div>

    <div class="item">
     <?php
     if(is_active_sidebar('social_5')){
      dynamic_sidebar('social_5');
    }
    ?>
  </div>
</div>

<!-- Left and right controls -->
<!-- Left side control -->
<a class="left carousel-control" href="#socialCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<!-- Right side control -->
<a class="right carousel-control" href="#socialCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a>
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

