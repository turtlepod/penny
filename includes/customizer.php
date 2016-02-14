<?php
/**
 * Customizer Utility
 * @since 2.0.1
**/

/* Register */
add_action( 'customize_register', 'penny_customize_register' );

/**
 * Customize Register
 * @since 2.0.1
 */
function penny_customize_register( $wp_customize ){

	/* Set Transport Method for Site Title & Tagline */
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}

/* Add preview JS */
add_action( 'customize_preview_init', 'penny_customize_preview_js' );


/**
 * Preview JS to handle Site Title & Tagline
 * @since 2.0.1
 */
function penny_customize_preview_js() {
	wp_enqueue_script( 'penny-customize-preview', trailingslashit( get_template_directory_uri() ) . 'assets/js/jquery.customize-preview.js', array( 'jquery', 'customize-preview' ), tamatebako_theme_version(), true );
}