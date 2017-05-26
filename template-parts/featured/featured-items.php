  <?php
/**
 * For Displaying the Two Featured Items on the home page.
 *
 * @package Charlie_Foxtrot
 */
?>

  <div class="col-xs-12 col-md-6 text-center">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
      <?php
      $feature1 = get_theme_mod('feature_image_1');
      $feature1_id = attachment_url_to_postid($feature1);
      $image1_alt = get_post_meta( $feature1_id, '_wp_attachment_image_alt', true );
      $feature1_url = get_permalink(get_theme_mod('feature_image_1_link'));
      ?>
      <a href="<?php echo $feature1_url; ?>"><img class="img-responsive center-block" src="<?php echo $feature1; ?>" alt="<?php echo $image1_alt; ?>"></a>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 text-center">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
      <?php
      $feature2 = get_theme_mod('feature_image_2');
      $feature2_id = attachment_url_to_postid($feature2);
      $image2_alt = get_post_meta( $feature2_id, '_wp_attachment_image_alt', true );
      $feature2_url = get_permalink(get_theme_mod('feature_image_2_link'));
      ?>
      <a href="<?php echo $feature2_url; ?>"><img class="img-responsive center-block" src="<?php echo $feature2; ?>" alt="<?php echo $image2_alt; ?>"></a>
    </div>
  </div>
