<?php
/**
 * Charlie Foxtrot functions and definitions
 *
 * @link http://wonkasoft.com/charlie-foxtrot
 *
 * @package Charlie_Foxtrot
 */

class custom_social_widget extends WP_Widget {
  
  // Setup widget name description etc...
  public function __construct() {
    $widget_options = array(
      'classname' => 'social-widget',
      'description' => 'custom social widget',
       );
  parent::__construct( 'social_widget','Social Widget', $widget_options );
  }

  // back-end
  public function form( $instance ) {
    $instance = wp_parse_args( (array) $instance, array( 
      'profile_picture' => '', 
      'customer_name' => '', 
      'customer_comment' => '', 
      'social_referral' => '', 
      ) );
        $profile_picture = format_to_edit($instance['profile_picture']);
        $customer_name = format_to_edit($instance['customer_name']);
        $customer_comment = format_to_edit($instance['customer_comment']);
        $social_referral = format_to_edit($instance['social_referral']);
    ?>

    <input type="image" class="widefat" id="<?php echo $this->get_field_id('profile_picture'); ?>" name="<?php echo $this->get_field_name('profile_picture'); ?>"><?php echo $profile_picture; ?></input>
    <?php
  }

  // front-end
  public function widget( $args, $instance ) {
    $profile_picture = esc_attr( get_option('profile_picture') );
    $customer_name = esc_attr( get_option('customer_name') );
    $customer_comment = esc_attr( get_option('customer_comment') );
    $social_referral = esc_attr( get_option('social_referral') );
    
    echo $args['before_widget'];
    ?>
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up <?php echo $social_referral; ?>">
        </div>

        <!--Avatar-->
        <div class="avatar"><img src="<?php echo $profile_picture; ?>" class="center-block img-circle img-responsive">
        </div>

        <div class="card-block">
          <!--Name-->
          <h4 class="card-title"><i class="fa fa-<?php echo $social_referral;?>";" aria-hidden="true"></i> <?php echo $customer_name;?></h4>
          <hr>
          <!--Quotation-->
          <p><i class="fa fa-quote-left"></i> <?php echo $customer_comment;?></p>
        </div>
      </div>
    <!--/.Card-->
    <?php
    echo $args['after_widget'];
  }
}

add_action( 'widgets_init', function() {
  register_widget('custom_social_widget');
} );