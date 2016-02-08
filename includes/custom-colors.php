<?php
/**
 * Color Options
 * @since 1.0.0
**/

/* Color Options */
add_action( 'customize_register', 'penny_color_customizer' );

/**
 * Register Customizer Setting
 * @since 1.0.0
 */
function penny_color_customizer( $wp_customize ){

	/* === LINK COLOR === */

	/* Color setting */
	$wp_customize->add_setting( 'color_link', array(
		'default'             => '#21759B',
		'type'                => 'theme_mod',
		'transport'           => 'postMessage',
		'capability'          => 'edit_theme_options',
		'sanitize_callback'   => 'tamatebako_sanitize_hex_color',
	));

	/* Add in color section */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_link',
			array(
				'label'               => _x( 'Link Color', 'customizer', 'penny' ),
				'section'             => 'colors',
				'settings'            => 'color_link',
				'priority'            => 10,
			)
		)
	);

	/* === LINK COLOR (HOVER) === */

	/* Color setting */
	$wp_customize->add_setting( 'color_link_hover', array(
		'default'             => '#0F3647',
		'type'                => 'theme_mod',
		'transport'           => 'postMessage',
		'capability'          => 'edit_theme_options',
		'sanitize_callback'   => 'tamatebako_sanitize_hex_color',
	));

	/* Add in color section */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_link_hover',
			array(
				'label'               => _x( 'Link Color Hover', 'customizer', 'penny' ),
				'section'             => 'colors',
				'settings'            => 'color_link_hover',
				'priority'            => 10,
			)
		)
	);

}

/* Customizer Preview JS */
add_action( 'customize_preview_init', 'penny_color_customize_preview_js' );

/**
 * Preview JS
 * @since 1.0.0
 */
function penny_color_customize_preview_js(){
	wp_enqueue_script( 'penny-customize-preview-color', trailingslashit( get_template_directory_uri() ) . 'assets/js/jquery.customize-color-preview.js', array( 'jquery', 'customize-preview' ), tamatebako_theme_version(), true );
}

/* Print CSS to wp_head */
add_action( 'wp_head', 'penny_color_print_css' );

/**
 * Print BG Color CSS
 */
function penny_color_print_css(){

	/* Var */
	$css = '';

	$color_link = tamatebako_sanitize_hex_color_no_hash( get_theme_mod( 'color_link', '#21759B' ) );
	$color_link_hover = tamatebako_sanitize_hex_color_no_hash( get_theme_mod( 'color_link_hover', '#0F3647' ) );

	/* Link Color */
	if ( '21759B' != $color_link ){
		$css .= "a{color:#{$color_link}}";
		$css .= ".button.primary{background:#{$color_link};border-color:#{$color_link}}";
		$css .= "#container .jetpack_subscription_widget input[type='submit']{background:#{$color_link}}";
	}

	/* Link Color (Hover) */
	if ( '0F3647' != $color_link_hover ){
		$css .= "a:hover,a:focus{color:#{$color_link_hover}}";
		$css .= ".button.primary:hover,.button.primary:focus{background:#{$color_link_hover};border-color:#{$color_link_hover}}";
	}

	/* Print it. */
	if ( !empty( $css ) ){
		echo "\n" . '<style type="text/css" id="penny-color-css">' . trim( $css ) . '</style>' . "\n";
	}

	/* Customizer Only (special placeholder for link color). */
	global $wp_customize;
	if ( isset( $wp_customize ) ){
		echo "\n" . '<style type="text/css" id="penny-color-link-css"></style>' . "\n";
		echo "\n" . '<style type="text/css" id="penny-color-link-hover-css"></style>' . "\n";
	}
}

/* === EDITOR STYLE === */

/* Add Editor Style */
add_filter( 'mce_css', 'penny_color_mce_css' );

/**
 * Add Link Color Option in Editor Style (MCE CSS)
 * @since 1.1.0
 */
function penny_color_mce_css( $mce_css ){
	$mce_css .= ', ' . add_query_arg( array( 'action' => 'penny_color_mce_css', '_nonce' => wp_create_nonce( 'penny-color-mce-nonce', __FILE__ ) ), admin_url( 'admin-ajax.php' ) );
	return $mce_css;
}

/* Ajax: editor style CSS */
add_action( 'wp_ajax_penny_color_mce_css', 'penny_color_mce_css_ajax_callback' );
add_action( 'wp_ajax_no_priv_penny_color_mce_css', 'penny_color_mce_css_ajax_callback' );

/**
 * Ajax Callback
 */
function penny_color_mce_css_ajax_callback(){

	/* Check nonce */
	$nonce = isset( $_REQUEST['_nonce'] ) ? $_REQUEST['_nonce'] : '';
	if( ! wp_verify_nonce( $nonce, 'penny-color-mce-nonce' ) ){
		die();
	}

	$css = '';

	/* Get Link Color */
	$color_link = tamatebako_sanitize_hex_color_no_hash( get_theme_mod( 'color_link', '#21759B' ) );
	$color_link_hover = tamatebako_sanitize_hex_color_no_hash( get_theme_mod( 'color_link_hover', '#0F3647' ) );

	/* Link Color */
	if ( '21759B' != $color_link ){
		$css .= "a{color:#{$color_link}}";
		$css .= ".button.primary{background:#{$color_link};border-color:#{$color_link}}";
	}

	/* Link Color (Hover) */
	if ( '0F3647' != $color_link_hover ){
		$css .= "a:hover,a:focus{color:#{$color_link_hover}}";
		$css .= ".button.primary:hover,.button.primary:focus{background:#{$color_link_hover};border-color:#{$color_link_hover}}";
	}
	/* Set File Type */
	header( 'Content-type: text/css' );
	echo trim( $css );
	die();
}