<?php
/**
 * Includes files
 *
 * @package Sage Slider
 */

/* Include File */
$file_array = array(
	SAGE_CUSTOMIZER_DIR . '/class-sage-customizer.php',
);

foreach ( $file_array as $filename ) {
	if ( file_exists( $filename ) ) {
		include_once $filename;
	}
}
