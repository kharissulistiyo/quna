<?php

// Sanitize customizer control
// https://divpusher.com/blog/wordpress-customizer-sanitization-examples

/**
 * qunaslug Theme Customizer
 *
 * @package qunaslug
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function quna_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'quna_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'quna_customize_partial_blogdescription',
		) );
	}

}
add_action( 'customize_register', 'quna_customize_register' );

add_action( 'customize_register', 'quna_customize_register_font' );
add_action( 'customize_register', 'quna_customize_register_font_size' );
add_action( 'customize_register', 'quna_customize_register_color' );
add_action( 'customize_register', 'quna_customize_register_social' );
add_action( 'customize_register', 'quna_customize_register_social_feed' );
add_action( 'customize_register', 'quna_customize_register_page' );
add_action( 'customize_register', 'quna_customize_register_post' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function quna_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function quna_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function quna_customize_preview_js() {
	wp_enqueue_script( 'quna-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'quna_customize_preview_js' );

/**
 * Secure checkbox
 */
function quna_secure_checkbox( $input ){
	if ( $input == true ) {
			return true;
	} else {
			return '';
	}
}
