<?php
/**
 * Contains methods for customizing the theme customization screen.
 *
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @since sage 1.0
 */

if ( ! class_exists( 'SAGE_Customizer' ) ) {
	class SAGE_Customizer {
		/**
		 * SAGE_Customizer constructor.
		 * Calls register() and load_customizer_controls_scripts().
		 */
		public function __construct() {

			// Setup the Theme Customizer settings and controls...
			add_action( 'customize_register' , array( $this, 'register' ) );

			add_action( 'customize_controls_enqueue_scripts', array( $this, 'load_customizer_controls_scripts' ) );

		}

		/**
		 * This hooks into 'customize_register' (available as of WP 3.4) and allows
		 * you to add new sections and controls to the Theme Customize screen.
		 *
		 * @see add_action('customize_register',$func)
		 * @param \WP_Customize_Manager $wp_customize
		 * @since sage 1.0
		 */
		public static function register( $wp_customize ) {

			$file_path = SAGE_CUSTOMIZER_DIR . '/customizer-slider.php';

			if ( file_exists( $file_path ) ) { include_once $file_path; }
		}

		/**
		 * Enqueues customizer-control.js file.
		 */
		public function load_customizer_controls_scripts() {

			wp_enqueue_script(
				'sage-customizer-control-scripts',
				SAGE_CUSTOMIZER_JS . '/customizer-control.js',
				array( 'jquery' ),
				'1.0',
				true
			);

		}
	}
}

new SAGE_Customizer();