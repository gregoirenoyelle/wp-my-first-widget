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

//* Déclaration de la classe principale
class My_First_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 *
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'widget_textdomain' ) );

		$widget_ops = array(
			'classname' => 'my-first-widget',
			'description' => 'My really first Widget',
		);
		parent::__construct( 'my-first-widget', 'My First Widget', $widget_ops );

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
	 * Call languages files
	 *
	 */
	function widget_textdomain() {
		load_plugin_textdomain( 'my-first-widget', false, plugin_dir_path( __FILE__ ) . '/languages/' );
	}

}