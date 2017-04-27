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
<footer class="container-fluid">
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
<<<<<<< HEAD
=======
</div> <!-- end w-wrapper -->
>>>>>>> MrLister
<?php wp_footer(); ?>
</body>
</html>
