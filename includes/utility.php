<?php
/**
 * Utility Features
**/

/* === MOBILE VIEW === */
add_theme_support( 'tamatebako-customize-mobile-view' );

/* === CUSTOM CSS === */
$custom_css_args = array(
	'title' => _x( 'Custom CSS', 'customizer', 'penny' ),
	'label' => _x( 'Custom CSS', 'customizer', 'penny' ),
);
add_theme_support( 'tamatebako-custom-css', $custom_css_args );


/**
 * Check if Front Widgets Need to be loaded
 * @since 2.0.1
 */
function penny_front_widget_active(){
	if ( is_active_sidebar( 'front-1' ) || is_active_sidebar( 'front-2' ) || is_active_sidebar( 'front-3' ) ){
		return true;
	}
	return false;
}

/**
 * HTML Class for front page widget columns
 * @since 2.0.1
 */
function penny_front_page_widget_class(){
	$num = 0;
	if ( is_active_sidebar( 'front-1' ) ){
		$num = $num + 1;
	}
	if ( is_active_sidebar( 'front-2' ) ){
		$num = $num + 1;
	}
	if ( is_active_sidebar( 'front-3' ) ){
		$num = $num + 1;
	}
	return sanitize_html_class( 'col-' . $num ); 
}





