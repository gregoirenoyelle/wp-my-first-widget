<?php
/*
Plugin Name: My First Widget
Plugin URI: https://www.gregoirenoyelle.com
Description: This is my first WordPress Widget Plugin
Author: Grégoire Noyelle
Author URI: https://www.gregoirenoyelle.com
Version: 1.0
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages/
Text Domain: my-first-widget
*/

//* If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die;
}

//* Appel des fichiers de traduction
if ( ! function_exists('my_project_widget_load_textdomain') ) {
	function my_project_widget_load_textdomain() {
	  load_plugin_textdomain( 'my-first-widget', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
	}
	add_action( 'plugins_loaded', 'my_project_widget_load_textdomain' );
}


//* Déclaration de la classe principale
class My_First_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 *
	 */
	public function __construct() {

		$widget_ops = array(
			'classname' => 'my-first-widget',
			'description' => __('My really first Widget', 'my-first-widget')
		);
		parent::__construct( 'my-first-widget', __('My First Widget','my-first-widget'), $widget_ops );

	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}

}

add_action( 'widgets_init', function(){
	register_widget( 'My_First_Widget' );
});