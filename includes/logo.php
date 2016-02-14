<?php
/**
 * Logo
**/

/* === Logo === */
$logo_args = array(
	'crop'                   => false,
	//'width'                  => 0,
	//'height'                 => 0,
	//'flex_height'            => 0, /* false */
	//'flex_width'             => 0, /* false */
	'label'                  => _x( 'Logo', 'customizer', 'penny' ),
	'description'            => _x( 'Recommended size for logo as icon is 150px tall.', 'customizer', 'penny' ),
);
add_theme_support( 'tamatebako-logo', $logo_args );


/* Register Logo Option to Customizer */
add_action( 'customize_register', 'penny_logo_options_customize_register' );

/**
 * Register Customizer
 * @since 3.0.0
 */
function penny_logo_options_customize_register( $wp_customize ){

	if( current_theme_supports( 'tamatebako-logo' ) ){

		/* Add Setting: as theme mod. */
		$wp_customize->add_setting( 'penny_logo_option', array(
			'default'             => 'icon',
			'type'                => 'theme_mod',
			'transport'           => 'refresh',
			'capability'          => 'edit_theme_options',
			'sanitize_callback'   => 'penny_sanitize_logo_option',
		) );

		/* Control */
		$wp_customize->add_control( 'penny_logo_option', array(
			'label'       => _x( 'Logo Mode', 'customizer', 'penny' ),
			'description' => _x( 'How to display logo.', 'customizer', 'penny' ),
			'section'     => 'title_tagline',
			'priority'    => 20,
			'settings'    => 'penny_logo_option',
			'type'        => 'radio',
			'choices'  => array(
				'icon'    => _x( 'Icon', 'customizer', 'penny' ),
				'title'   => _x( 'Title (Replace Site Title and Tagline)', 'customizer', 'penny' ),
			),
		) );

	}
}

/**
 * Sanitize Logo Options
 */
function penny_sanitize_logo_option( $input ){
	$valid_option = array( 'icon', 'title' );
	if( in_array( $input, $valid_option ) ){
		return $input;
	}
	return 'icon';
}

/* === BODY CLASS === */
add_filter( 'body_class', 'penny_logo_body_classes' );

/**
 * Add body class
 */
function penny_logo_body_classes( $classes ){
	if( current_theme_supports( 'tamatebako-logo' ) && get_theme_mod( 'logo' ) ){
		$option = get_theme_mod( 'penny_logo_option', 'icon' );
		if( 'icon' == $option ){
			$classes[] = 'penny-logo-icon';
		}
		else{
			$classes[] = 'penny-logo-title';
		}
	}
	return $classes;
}
