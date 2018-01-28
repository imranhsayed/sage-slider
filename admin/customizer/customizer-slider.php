<?php

/**
 * Settings and controls for slider customizer.
 *
/*==============================
            SLIDER
  ===============================*/

$wp_customize->add_panel( 'sage_pannel', array(
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'title'          => __( 'Sage Slider Options', 'sage' ),
	'description'    => __( 'Add slider', 'sage' ),
) );

for ( $i=1; $i <= 8; $i++ )
{
	$wp_customize->add_section( 'sage_section_' . $i, array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'title'          => sprintf( __( 'Slide %s' , 'sage' ), $i ),
		'description'    => __( 'Add slide', 'sage' ),
		'panel'          => 'sage_pannel',
	) );

	$wp_customize->add_setting( 'sage_slides['.$i.'][title]', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability'        => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'sage_slides['.$i.'][title]', array(
		'priority' => 10,
		'section'  => 'sage_section_' . $i,
		'label'    => __( 'Title', 'sage' ),
		'settings' => 'sage_slides['.$i.'][title]',
	) );

	$wp_customize->add_setting( 'sage_slides['.$i.'][description]', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability'        => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'sage_slides['.$i.'][description]', array(
		'priority' => 10,
		'section'  => 'sage_section_' . $i,
		'label'    => __('Description', 'sage' ),
		'settings' => 'sage_slides['.$i.'][description]',
	) );

	$wp_customize->add_setting( 'sage_slides['.$i.'][link]', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability'        => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'sage_slides['.$i.'][link]', array(
		'priority' => 10,
		'section'  => 'sage_section_' . $i,
		'label'    => __( 'Link', 'sage' ),
		'settings' => 'sage_slides['.$i.'][link]',
	) );

	$wp_customize->add_setting( 'sage_slides['.$i.'][image]', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability'        => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control ( $wp_customize, 'sage_slides['.$i.'][image]', array(
		'priority' => 10,
		'section'  => 'sage_section_' . $i,
		'label'    => __( 'Image', 'sage' ),
		'settings' => 'sage_slides['.$i.'][image]',
	) ) );

}
