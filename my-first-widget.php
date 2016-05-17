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

		// Register stylesheet
		add_action( 'admin_enqueue_scripts', array( $this, 'register_admin_styles' ), 99 );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_widget_styles' ), 99 );

		// Register JavaScript
		add_action( 'admin_enqueue_scripts', array( $this, 'register_admin_scripts' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_widget_scripts' ) );

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

		// Parse default arguments
		$instance = wp_parse_args(
			(array)$instance,
			array(
				'name' => ''
			)
		);

		// call file with HTML form
		include( plugin_dir_path( __FILE__ ) . '/views/admin.php' );
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
		$old_instance['name'] = $new_instance['name'];
		return $old_instance;
	}

	/**
	 * Register styles for admin and Widget CSS
	 *
	 */
	public function register_admin_styles() {
		wp_enqueue_style( 'widget-admin-style', plugins_url('my-first-widget/css/admin.css') );
	}
	public function register_widget_styles() {
		wp_enqueue_style( 'widget-front-style', plugins_url('my-first-widget/css/widget.css') );
	}

	/**
	 * Register JavaScript for admin and widget
	 *
	 */
	public function register_admin_scripts() {
		wp_enqueue_script( 'widget-admin-scripts', plugins_url('my-first-widget/js/admin.js') );
	}
	public function register_widget_scripts() {
		wp_enqueue_script( 'widget-front-scripts', plugins_url('my-first-widget/js/widget.js') );
	}

}

add_action( 'widgets_init', function(){
	register_widget( 'My_First_Widget' );
});