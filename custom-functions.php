<?php
/**
 * Custom functions for the Sage Slider Plugin
 * Contains definition of constants, file includes and enqueuing stylesheets and scripts.
 *
 * @package Sage Slider
 */

/* Define Constants */
define( 'SAGE_PLUGIN_URI', plugins_url( 'sage-slider' ) );
define( 'SAGE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'SAGE_ADMIN_PATH', plugin_dir_path( __FILE__ ) . 'admin' );
define( 'SAGE_CUSTOMIZER_DIR', plugin_dir_path( __FILE__ ) . 'admin/customizer' );
define( 'SAGE_CUSTOMIZER_JS', SAGE_CUSTOMIZER_DIR . '/js' );
define( 'SAGE_JS_PATH', plugin_dir_path( __FILE__ ) . 'vendor/js' );
define( 'SAGE_JS_URI', plugins_url( 'sage-slider' ) . '/vendor/js' );
define( 'SAGE_IMAGES_PATH', plugin_dir_path( __FILE__ ) . 'images' );

/* File Includes */
$sage_depedencies = apply_filters( 'sage_depedencies', array(
	SAGE_ADMIN_PATH . '/*.php',
));

foreach ( $sage_depedencies as $path ) {
	foreach ( glob( $path ) as $filename ) {
		include $filename;
	}
}

if ( ! function_exists( 'sage_enqueue_scripts' ) ) {
	/**
	 * Enqueue Styles and Scripts
	 */
	function sage_enqueue_scripts() {
		wp_enqueue_style( 'sage_styles', SAGE_PLUGIN_URI . '/style.css' );
		wp_enqueue_script( 'sage_slick_js', SAGE_JS_URI . '/slick.js', '', '', true );
		wp_enqueue_script( 'sage_main_js', SAGE_JS_URI . '/main.js', array( 'sage_slick_js' ), '', true );
	}
}

add_action( 'wp_enqueue_scripts', 'sage_enqueue_scripts' );
