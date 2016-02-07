<?php
/**
 * Layouts Setup
**/
$image_dir = get_template_directory_uri() . '/assets/images/layouts/';
$layouts = array(
	/* One Column */
	'content' => array(
		'name'          => _x( 'Content', 'layout name', 'penny' ),
		'thumbnail'     => $image_dir . 'content.png',
	),
	/* Two Columns */
	'content-sidebar1'  => array(
		'name'          => _x( 'Content | Sidebar', 'layout name', 'penny' ),
		'thumbnail'     => $image_dir . 'content-sidebar1.png',
	),
	/* Two Columns */
	'sidebar1-content'  => array(
		'name'          => _x( 'Sidebar | Content', 'layout name', 'penny' ),
		'thumbnail'     => $image_dir . 'sidebar1-content.png',
	),
);
$layouts_args = array(
	'default'           => 'content-sidebar1',
	'customize'         => true,
	'post_meta'         => true,
	'post_types'        => array( 'post', 'page' ),
	'thumbnail'         => true,
);
$layouts_strings = array(
	'default'           => _x( 'Default', 'layout', 'penny' ),
	'layout'            => _x( 'Layout', 'layout', 'penny' ),
	'global_layout'     => _x( 'Global Layout', 'layout', 'penny' ),
);
add_theme_support( 'tamatebako-layouts', $layouts, $layouts_args, $layouts_strings );


/* === POST DISPLAY */

/* Standard Post Display Options */
add_action( 'customize_register', 'penny_post_display_customizer', 11 );

/**
 * Register Customizer For Reading Setting
 * Option to display standard blog post as summary + thumbnail or full text
 */
function penny_post_display_customizer( $wp_customize ){

	/* Setting */
	$wp_customize->add_setting( 'post_display', array(
		'default'             => 'auto',
		'type'                => 'theme_mod',
		'capability'          => 'edit_theme_options',
		'sanitize_callback'   => 'penny_sanitize_post_display',
	));

	/* Radio Options */
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'post_display',
			array(
				'label'          => _x( 'For posts in archive, show', 'customizer', 'penny' ),
				'section'        => 'layout',
				'settings'       => 'post_display',
				'type'           => 'radio',
				'choices'        => array(
					'auto'       => _x( 'Auto (Summary only when excerpt defined)', 'customizer', 'penny' ),
					'full_text'  => _x( 'Full Text/Content', 'customizer', 'penny' ),
					'summary'    => _x( 'Summary and Thumbnail', 'customizer', 'penny' ),
				)
			)
		)
	);
}

/**
 * Sanitize Post Display Choices
 */
function penny_sanitize_post_display( $input ){
	$choices = array( 'auto', 'full_text', 'summary' );
	if( in_array( $input, $choices ) ){
		return $input;
	}
	return 'auto';
}

/* === BODY CLASS === */
add_filter( 'body_class', 'penny_post_display_body_class' );

/**
 * Add Selected Post Display Body Class
 * @since 2.0.0
 */
function penny_post_display_body_class( $classes ){
	$display = get_theme_mod( 'post_display', 'auto' );
	$classes[] = sanitize_html_class( 'post_display-' . $display );
	return $classes;
}

