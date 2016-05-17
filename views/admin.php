<div class="my-first-widget">
	<label><?php _e('Your Name', 'my-first-widget'); ?></label>
	<input type="text" class="widefat" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" value="<?php echo $instance['name']; ?>" />
</div>