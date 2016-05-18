<div class="my-first-widget">

	<div>
		<label><?php _e('Your Name', 'my-first-widget'); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" value="<?php echo esc_attr( $instance['name'] ); ?>" />
	</div>

	<div>
		<label><?php _e('Your bio', 'my-first-widget'); ?></label>
		<textarea id="<?php echo $this->get_field_id('bio'); ?>" class="widefat" name="<?php echo $this->get_field_name('bio'); ?>" rows="3" cols="30" maxlength="200"><?php echo esc_textarea( $instance['bio'] ); ?></textarea>
		<p class="description"><?php _e('The bio shouldn\'t be longer than 200 caracters', 'my-first-widget'); ?></p>
	</div>

</div>