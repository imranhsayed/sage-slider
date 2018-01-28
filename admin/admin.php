<?php
/**
 * Created by PhpStorm.
 * User: imransayed
 * Date: 1/27/18
 * Time: 10:20 PM
 */

/* Include File */
$file_array = array(
	SAGE_CUSTOMIZER_DIR . '/class.customizer-init.php',
);

foreach ( $file_array as $filename ) {
	if ( file_exists( $filename ) ) {
		include_once $filename;
	}
}