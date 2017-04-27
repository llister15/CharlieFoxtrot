<?php
/*
 * Displays Navigation
 *
 * @package WordPress
 * @subpackage Charlie_Foxtrot
 * @since 1.0
 * @version 1.0
 */
?>
<div class="row w-nav-bar">
<nav class="navbar navbar-default w-nav-color" role="navigation">
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header text-center">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_walker">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a type="button" class="hidden-md hidden-lg navbar-brand w-back-button" onclick="history.back();"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Back</a>
      <a class="navbar-brand w-blog-brand" href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
    </div>
  <?php wp_nav_menu( array( 
    'menu' => 'top',
    'depth' => 2,
    'menu_class' => 'nav navbar-nav w-primary-menu', 
    'container_class' => 'collapse navbar-collapse',
    'container_id' => 'primary_walker',
    'theme_location' => 'top', 
    'fallback_cb' => 'WS_Walker_Nav_Primary::fallback',
    'walker' => new WS_Walker_Nav_Primary(),
    ) ); ?>
    </div>
    </nav>
  </div>