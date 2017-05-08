
<?php

// WooCommerce Support.
  add_theme_support( 'woocommerce' );

// Remove Woocomerece Breadcrumb
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action( 'woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating', 10, 0 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 51 );
// add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
    function wcs_woo_remove_reviews_tab($tabs) {
    unset($tabs['reviews']);
    return $tabs;
}
   

function woocommerce_template_product_description() {
woocommerce_get_template( 'single-product/review-meta.php' );
}
// add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_product_description', 51 );

function my_theme_wrapper_start() {
  echo '<section id="products" class="container-fluid"><div class="row-fluid">';
}

function my_theme_wrapper_end() {
  echo '</div></section>';
}
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
