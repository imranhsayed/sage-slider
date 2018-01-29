<?php
/**
 * Sage Slider Main File.
 *
 * @package Sage Slider
 */

/*
Plugin Name:  Sage Slider
Plugin URI:   http://supernovathemes.com/sage-plugin
Description:  Slider Plugin
Version:      1.0.0
Author:       Imran Sayed
Author URI:   https://profiles.wordpress.org/gsayed786
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  sage-slider
Domain Path:  /languages
*/

/* Include custom-functions.php file */
include 'custom-functions.php';

/**
 * Create Shortcode.
 * Include [sage_slider] shortcode while creating a post or page content to display sage-slider.
 */
function sage_create_shortcode() {
	include 'slider.php';
}

add_shortcode( 'sage_slider', 'sage_create_shortcode' );
