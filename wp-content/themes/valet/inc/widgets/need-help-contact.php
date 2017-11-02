<?php 

  class need_help_contact extends WP_Widget {
    
    public function __construct() {
      parent::__construct('need_help_contact', 'Need Help? (Contact Us)', array(
        'description' => 'This is the need help side bar from Contact us page'
      ));
    }

    public function form($instance) {
      if($instance['title']){
        $title = $instance['title'];
      } else {
        $title = "Put Your Title Here...";
      }
      ?>
        <p>
          <label for="<?php echo $this->get_field_id('title'); ?>">Need Help</label>
        </p>
        <p>
          <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $title; ?>" class="widefat" />
        </p>

      <?php
    }

    public function widget($args, $instance) {
      $title = $instance['title'];
      echo $args['before_widget'].$title.$args['after_widget'];
    }
  }

  add_action( 'widgets_init', function() {
    register_widget( 'need_help_contact' );
  });
