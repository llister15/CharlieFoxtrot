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
      $feature1 = get_theme_mod('feature_item_1');
      $feature1_url = get_permalink(get_theme_mod('feature_item_1_link'));
      ?>
      <a href="<?php echo $feature1_url; ?>"><img class="img-responsive center-block" src="<?php echo $feature1; ?>" alt="<?php ?>"></a>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 text-center">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
      <?php
      $feature2 = get_theme_mod('feature_item_2');
      $feature2_url = get_permalink(get_theme_mod('feature_item_2_link'));
      ?>
      <a href="<?php echo $feature2_url; ?>"><img class="img-responsive center-block" src="<?php echo $feature2; ?>" alt="<?php ?>"></a>
    </div>
  </div>
