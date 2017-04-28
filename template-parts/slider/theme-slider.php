<?php
/*
* Displays Theme Slider
*
* @package WordPress
* @subpackage Wonka_Target
* @since 1.0
* @version 1.0
*/
?>

<div class="col-xs-12 text-center">
<?php 
$value = get_theme_mod('theme_slider_check');
  if ($value !== true) {
    $value2 = get_theme_mod('static_header');
    if ($value2 !== true) {
      ?>
      <img src="#">
      <?php
    } else {
      ?>
      <img src="<?php echo $value2; ?>">
      <?php
    }
  } else {
    $slide_count = get_theme_mod('theme_slide_count');
    ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    <?php 
    for ($i=0; $i < $slide_count; $i++) { 
      if ($i !== 0) {
        ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
      <?php
      } else {
      ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li>
      <?php
      }
    }
    ?>
     </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    <?php
    for ($i=0; $i < $slide_count; $i++) { 
      $slider_int = $i + 1;
      $slider_mod = get_theme_mod('theme_slider_'.$slider_int);
      $image_alt = attachment_url_to_postid($slider_mod);
      if ($i !== 0) {
        ?>
        <div class="item">
         <img src="<?php echo $slider_mod; ?>" alt="<?php echo $image_alt; ?>">
        </div>
      <?php
      } else {
      ?>
        <div class="item active">
          <img src="<?php echo $slider_mod; ?>" alt="<?php echo $image_alt; ?>">
        </div>
      <?php
      }
    }
    ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<?php
  }