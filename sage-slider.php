<?php
/*
Plugin Name:  Sage Slider
Plugin URI:   https://supernovathemes.com/sage-plugin
Description:  Slider Plugin
Version:      1.0.0
Author:       Imran Sayed
Author URI:   https://supernovathemes.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  sage-slider
Domain Path:  /languages
*/

include 'custom-functions.php';
/**
 * Create Shortcode
 *
 * @return string
 */
function sage_create_shortcode() {
	include 'slider.php';
}

add_shortcode( 'sage_slider', 'sage_create_shortcode' );


