<div class="my-first-widget">

	<div>
		<label><?php _e('Your Name', 'my-first-widget'); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" value="<?php echo esc_attr( $instance['name'] ); ?>" />
	</div>

	<div>
		<label><?php _e('Your bio', 'my-first-widget'); ?></label>
		<textarea id="<?php echo $this->get_field_id('bio'); ?>" class="widefat" name="<?php echo $this->get_field_name('bio'); ?>" rows="3" cols="30"><?php echo esc_textarea( $instance['bio'] ); ?></textarea>
	</div>

</div>