<?php
/**
 * Created by PhpStorm.
 * User: imransayed
 * Date: 1/27/18
 * Time: 10:20 PM
 */

define( 'SAGE_CUSTOMIZER_JS', SAGE_CUSTOMIZER_DIR . '/js' );

$file_array = array(
	SAGE_CUSTOMIZER_DIR . '/class.customizer-init.php',
);

foreach ( $file_array as $filename ) {
	if ( file_exists( $filename ) ) {
		include_once $filename;
	}
}