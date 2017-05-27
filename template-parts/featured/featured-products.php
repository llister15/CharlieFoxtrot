<?php
/**
 * For Displaying Featured Products Carousel on the home page.
 *
 * @package Charlie_Foxtrot
 */
?>

<?php
$meta_query  = WC()->query->get_meta_query();
    $tax_query   = WC()->query->get_tax_query();
    $tax_query[] = array(
        'taxonomy' => 'product_visibility',
        'field'    => 'name',
        'terms'    => 'featured',
        'operator' => 'IN',
    );

    $args = array(
        'post_type'           => 'product',
        'post_status'         => 'publish',
        'ignore_sticky_posts' => 1,
        'posts_per_page'      => $atts['per_page'],
        'orderby'             => $atts['orderby'],
        'order'               => $atts['order'],
        'meta_query'          => $meta_query,
        'tax_query'           => $tax_query,
    );

    $loop = new WP_Query($args);
    ?>
    <div id="productCarousel" class="carousel slide" data-ride="carousel">
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
    <?php $count = 1;
      while( $loop->have_posts()) : $loop->the_post(); global $product; 
        if ($count == 1) {
          ?>
          <div class="item active">
          <?php
        } elseif ($count%4 == 1 && $count != 1) {
          ?>
          <div class="item">
          <?php
        }
      ?>
        <div class="col-xs-6 col-md-3">
          <?php
          if (has_post_thumbnail($loop->post->ID)) {
            ?>
            <a href="<?php the_permalink(); ?>"> <?php echo get_the_post_thumbnail( $loop->post->ID, 'featured_products'); ?></a>
            <?php
          } else {
            ?>
            <a href="<?php the_permalink(); ?>"><img src="<?php echo woocommerce_placeholder_img_src(); ?>" alt="Placeholder" class="img-responsive center-block" /></a>
            <?php
          }
          ?>
        <h4 class="woocommerce-loop-product__title"><?php the_title(); ?></h4>

              <p class="price"><?php echo $product->get_price_html(); ?></p>
                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product );
            ?>    
        </div>
        <?php 
        if ($count%4 == 0) {
          ?>
          </div>
          <?php
        }
        $count++;
    endwhile;
    wp_reset_query(); 
    ?>
</div>
</div>


<!-- Left and right controls -->
<!-- Left side control -->
<a class="left carousel-control" href="#productCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<!-- Right side control -->
<a class="right carousel-control" href="#productCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a></div>