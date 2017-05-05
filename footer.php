<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link http://wonkasoft.com/charlie-foxtrot
 *
 * @package Charlie_Foxtrot
 */

?>
<footer id="page-footer" class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-md-4">
      <?php
      if(is_active_sidebar('footer-menu1')){
       dynamic_sidebar('footer-menu1');
     }
     ?>
    </div> 
    <div class="col-xs-12 col-md-4">
      <?php
        if(is_active_sidebar('footer-menu2')){
         dynamic_sidebar('footer-menu2');
      }
      ?>
    </div>
    <div class="col-xs-12 col-md-4">
      <?php
      if(is_active_sidebar('footer-menu3')){
       dynamic_sidebar('footer-menu3');
      }
      ?>
    </div>
  </div> <!-- End of row -->
  <div class="row">
    <?php get_template_part('template-parts/footer/copyright', 'info' ); ?>
  </div>
</footer>
</div> <!-- end w-wrapper -->
<div class="hidden-md hidden-lg sticky container-fluid">
<div class="row-fluid">
  <div role="mobile-search" class="col-xs-12 text-center mobile-search">
    <?php get_search_form(); ?>
  </div>
</div>
<div class="row-fluid">
  <div class="col-xs-3 text-center">
  <button type="button" class="search-toggle" data-toggle="mobile-search" data-target=".mobile-search">
  <span class="glyphicon glyphicon-search"></span>
  <p>SEARCH</p>
  </button>
  </div>
  <div class="col-xs-3 text-center">
  <a href="<?php echo get_permalink(get_theme_mod('mobile_option_deals_link')); ?>">
  <span class="glyphicon glyphicon-tag"></span>
  <p>DEALS</p>
  </a>
  </div>
  <div class="col-xs-3 text-center">
  <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
  <span class="glyphicon glyphicon-user"></span>
  <p>ACCOUNT</p>
  </a>
  </div>
  <div class="col-xs-3 text-center">
  <a href="<?php echo wc_get_cart_url(); ?>">
  <span class="badge footer-badge"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
  <span class="glyphicon glyphicon-shopping-cart"></span>
  <p>CART</p>
  </a>
  </div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
