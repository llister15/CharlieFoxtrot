<?php
/**
 * Charlie Foxtrot functions and definitions
 *
 * @link http://wonkasoft.com/charlie-foxtrot
 *
 * @package Charlie_Foxtrot
 */

class social_widget extends WP_Widget {
  
  // Setup widget name description etc...
  public function __construct() {
    
    $widget_options = array(
      'classname' => 'social-widget',
      'description' => 'Social Widget'  
    );

  parent::__construct( 'social_widget','Social Widget', $widget_options );
  }

  // back-end
  public function form( $instance ) {
    $instance = wp_parse_args((array) $instance, array(
      'profile_picture' => '', 
      'customer_name' => '', 
      'customer_comment' => '', 
      'social_referral' => '', 
      ));
    $profile_picture = $instance['profile_picture'];
    $customer_name = sanitize_text_field($instance['customer_name']);
    $customer_comment = sanitize_text_field($instance['customer_comment']);
    $social_referral = sanitize_text_field($instance['social_referral']);

    ?>

  <!-- Input -->
  <label for="<?php echo $this->get_field_id('profile_picture'); ?>"><?php _e('Profile Picture:'); ?></label> 
  <?php  if ( $instance['profile_picture'] != '' ) :
                echo '<img class="custom_media_image" src="' . $instance['profile_picture'] . '" /><br />';
            endif;
  ?>
  <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('profile_picture'); ?>" id="<?php echo $this->get_field_id('profile_picture'); ?>" value="<?php echo $instance['profile_picture']; ?>">
  <input type="button" class="custom_media_button" id="custom_media_button" name="<?php echo $this->get_field_name('profile_picture'); ?>" value="Upload Image" /><br />
   
  
  <label for="<?php echo $this->get_field_id('customer_name'); ?>"><?php _e('User Name:'); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id('customer_name'); ?>" name="<?php echo $this->get_field_name('customer_name'); ?>" type="text" value="<?php echo esc_attr($customer_name); ?>" />
  
  <label for="<?php echo $this->get_field_id('customer_comment'); ?>"><?php _e('Comments:'); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id('customer_comment'); ?>" name="<?php echo $this->get_field_name('customer_comment'); ?>" type="text" value="<?php echo esc_attr($customer_comment); ?>" />
  
  <label for="<?php echo $this->get_field_id('social_referral'); ?>"><?php _e('Social Platform:'); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id('social_referral'); ?>" name="<?php echo $this->get_field_name('social_referral'); ?>" type="text" value="<?php echo esc_attr($social_referral); ?>" />

    <?php
  }

  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $new_instance = wp_parse_args((array) $new_instance, array(
      'profile_picture' => '', 
      'customer_name' => '', 
      'customer_comment' => '', 
      'social_referral' => '',  
      ));
    $instance['profile_picture'] = $new_instance['profile_picture'];
    $instance['customer_name'] = sanitize_text_field($new_instance['customer_name']);
    $instance['customer_comment'] = sanitize_text_field($new_instance['customer_comment']);
    $instance['social_referral'] = sanitize_text_field($new_instance['social_referral']);

    return $instance;
  }

  // front-end
  public function widget( $args, $instance ) {
    $profile_picture = isset($instance['profile_picture']) ? $instance['profile_picture'] : false;
    $customer_name = isset($instance['customer_name']) ? $instance['customer_name'] : false;
    $customer_comment = isset($instance['customer_comment']) ? $instance['customer_comment'] : false;
    $social_referral = isset($instance['social_referral']) ? $instance['social_referral'] : false;

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
  register_widget('social_widget');
} );