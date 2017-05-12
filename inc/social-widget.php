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

  parent::__construct( 'social-widget','Social Widget', $widget_options );
  }

  // back-end
  public function form( $instance ) {
    $instance = wp_parse_args((array) $instance, array(
      'id' => $this->id,
      'profile_picture' => '', 
      'customer_name' => '', 
      'customer_comment' => '', 
      'social_referral' => '', 
      ));
    $custom_id = $instance['id'];
    $profile_picture = $instance['profile_picture'];
    $customer_name = sanitize_text_field($instance['customer_name']);
    $customer_comment = sanitize_text_field($instance['customer_comment']);
    $social_referral = sanitize_text_field($instance['social_referral']);

    ?>

  <!-- Input -->
  <label for="<?php echo $this->get_field_id('profile_picture'); ?>"><?php _e('Profile Picture:'); ?></label>
  <input type="hidden" name="<?php echo $this->get_field_name('id'); ?>" value="<?php echo $this->id ?>"> 
  <?php  if ( $instance['profile_picture'] != '' ) :
                echo '<img class="custom_media_image" src="' . $instance['profile_picture'] . '" /><br />';
            endif;
  ?>
  <input type="text" class="widefat custom_media_url <?php echo $this->id; ?>" name="<?php echo $this->get_field_name('profile_picture'); ?>" id="<?php echo $this->id;?>" value="<?php echo $instance['profile_picture']; ?>"><br />
  <input type="button" class="button button-primary custom_media_button <?php echo $this->id;?>" id="custom_media_button_<?php echo $this->id; ?>" name="<?php echo $this->get_field_name('profile_picture'); ?>" value="Upload Image" /><br /><br />
   
  
  <label for="<?php echo $this->get_field_id('customer_name'); ?>"><?php _e('User Name:'); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id('customer_name'); ?>" name="<?php echo $this->get_field_name('customer_name'); ?>" type="text" value="<?php echo esc_attr($customer_name); ?>" />
  
  <label for="<?php echo $this->get_field_id('customer_comment'); ?>"><?php _e('Comments:'); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id('customer_comment'); ?>" name="<?php echo $this->get_field_name('customer_comment'); ?>" type="text" value="<?php echo esc_attr($customer_comment); ?>" />
  
  <label for="<?php echo $this->get_field_id('social_referral'); ?>"><?php _e('Social Platform:'); ?></label> 
  <select class="widefat" id="<?php echo $this->get_field_id('social_referral'); ?>" name="<?php echo $this->get_field_name('social_referral'); ?>">
    <option value="facebook">Facebook</option>  
    <option value="twitter">Twitter</option>  
    <option value="instagram">Instagram</option>  
  </select>
  
    <?php
  }

  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $new_instance = wp_parse_args((array) $new_instance, array(
      'id' => $this->id,
      'profile_picture' => '', 
      'customer_name' => '', 
      'customer_comment' => '', 
      'social_referral' => '',  
      ));
    $instance['id'] = $new_instance['id'];
    $instance['profile_picture'] = $new_instance['profile_picture'];
    $instance['customer_name'] = sanitize_text_field($new_instance['customer_name']);
    $instance['customer_comment'] = sanitize_text_field($new_instance['customer_comment']);
    $instance['social_referral'] = sanitize_text_field($new_instance['social_referral']);

    return $instance;
  }

  // front-end
  public function widget( $args, $instance ) {
    $instance_id = isset($instance['id']) ? $instance['id'] : false;
    $profile_picture = isset($instance['profile_picture']) ? $instance['profile_picture'] : false;
    $customer_name = isset($instance['customer_name']) ? $instance['customer_name'] : false;
    $customer_comment = isset($instance['customer_comment']) ? $instance['customer_comment'] : false;
    $social_referral = isset($instance['social_referral']) ? $instance['social_referral'] : false;

    //widget is parsed
    if (wp_get_sidebars_widgets()['social'][0] == $this->id) {
     ?>
     <div class="col-xs-12 col-md-2 col-md-offset-1 item active">
     <?php
     echo $args['before_widget'];
     ?>
     <!--Card-->
     <div class="card">
       <!--Background color-->
       <div class="card-up <?php echo $social_referral; ?>">
       </div>
       <?php 
         if ($profile_picture == null) {
           ?>
           <div class="no-avatar"></div>
           <?php
         } else {
       ?>
       <!--Avatar-->
       <div class="avatar"><img src="<?php echo $profile_picture; ?>" class="center-block img-circle img-responsive">
       </div>
       <?php
     } 
     ?>
       <div class="card-block">
         <!--Name-->
         <h4 class="card-title"><i class="ws ws-<?php echo $social_referral;?>";" aria-hidden="true"></i> <?php echo $customer_name;?></h4>
         <hr>
         <!--Quotation-->
         <p><i class="ws ws-quotes"></i> <?php echo $customer_comment;?></p>
       </div>
     </div>
   <!--/.Card-->
   <?php
   echo $args['after_widget'];
   ?>
   </div>
   <?php
   } else {
   ?>
   <div class="col-xs-12 col-md-2 item">
   <?php
     echo $args['before_widget'];
     ?>
     <!--Card-->
     <div class="card">
       <!--Background color-->
       <div class="card-up <?php echo $social_referral; ?>">
       </div>
       <?php 
         if ($profile_picture == null) {
           ?>
           <div class="no-avatar"></div>
           <?php
         } else {
       ?>
       <!--Avatar-->
       <div class="avatar"><img src="<?php echo $profile_picture; ?>" class="center-block img-circle img-responsive">
       </div>
       <?php
     } 
     ?>
       <div class="card-block">
         <!--Name-->
         <h4 class="card-title"><i class="ws ws-<?php echo $social_referral;?>";" aria-hidden="true"></i> <?php echo $customer_name;?></h4>
         <hr>
         <!--Quotation-->
         <p><i class="ws ws-quotes"></i> <?php echo $customer_comment;?></p>
       </div>
     </div>
   <!--/.Card-->
   <?php
   echo $args['after_widget'];
   ?>
   </div>
   <?php
   }
  }
}

add_action( 'widgets_init', function() {
  register_widget('social_widget');
} );