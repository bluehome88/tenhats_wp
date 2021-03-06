<?php 
/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class Integral_Brands_Widget extends WP_Widget {

    /**
     * Constructor
     *
     * @return void
     **/
    function __construct() {
        $widget_ops = array( 'classname' => 'wcp_image', 'description' => __('Add a brand logo to the homepage brands section.', 'integral') );
        parent::__construct( 'Integral_brands', __('Integral - Brand Widget', 'integral'), $widget_ops );
    }

    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme
     * @param array  An array of settings for this widget instance
     * @return void Echoes it's output
     **/
    function widget( $args, $instance ) {
        wp_reset_postdata();
        extract( $args, EXTR_SKIP );
        
        // these are the widget options
        $image_url = $instance['image_url'];
        $image_link = $instance['image_link'];
        echo $before_widget;
        // Display the widget
        if( $image_link) {
          echo '<a href="'.$image_link.'" target="_blank">';
        }
        if( $image_url) {
          echo '<img src="'.$image_url.'" class="img-responsive center-block">';
        }
        if( $image_link) {
          echo '</a>';
        }
        echo $after_widget;
    }

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     **/
    function update( $new_instance, $old_instance ) {
        // update logic goes here
        $instance = $old_instance;
        // Fields
        $instance['image_url'] = esc_url($new_instance['image_url']);
        $instance['image_link'] = esc_url($new_instance['image_link']);
        return $instance;
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     **/
    function form( $instance ) {
        extract($instance);
?>
    <p>
        <label for="<?php echo $this->get_field_id('image_url'); ?>"><?php esc_html_e('Brand Logo', 'integral'); ?></label>
        <input id="<?php echo $this->get_field_id('image_url'); ?>" type="text" class="image-url" name="<?php echo $this->get_field_name('image_url'); ?>" value="<?php if (isset($image_url)) echo esc_url($instance['image_url']); ?>" style="width: 100%;" />
        <small><?php esc_html_e('Upload the brands logo.', 'integral'); ?></small><br />
        <input data-title="Image in Widget" data-btntext="Select it" class="button upload_image_button" type="button" value="<?php esc_html_e('Upload','integral') ?>" />
        <input data-title="Image in Widget" data-btntext="Select it" class="button clear_image_button" type="button" value="<?php esc_html_e('Clear','integral') ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('image_link'); ?>"><?php esc_html_e('Brand Link', 'integral'); ?></label>
        <input id="<?php echo $this->get_field_id('image_link'); ?>" type="text" class="image-link" name="<?php echo $this->get_field_name('image_link'); ?>" value="<?php echo esc_url($instance['image_link']); ?>" style="width: 100%;" />
        <small><?php esc_html_e('Enter a link to the brand\'s website.', 'integral'); ?></small>
    </p>
    <p class="img-prev">
      <?php if (isset($image_url) && $image_url) { echo '<img src="'.$image_url.'" style="max-width: 100%;">';} ?>
    </p>
<?php
    }
}
// End of Plugin Class
add_action( 'widgets_init', function() {
    register_widget( 'Integral_Brands_Widget' );
} );
?>