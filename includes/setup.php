<?php
/**
 * Setup Theme Elements
**/

/* === Maximum Content Width === */

global $content_width;
if ( ! isset( $content_width ) ){
	$content_width = 680;
}

/* === Register Sidebars === */

$sidebars_args = array(
	"primary"   => array( "name" => _x( 'Sidebar', 'sidebar name', 'penny' ), "description" => "" ),
);
add_theme_support( 'tamatebako-sidebars', $sidebars_args );


/* === Register Menus === */

$nav_menus_args = array(
	"primary" => _x( 'Navigation', 'nav menu name', 'penny' ),
	"footer" => _x( 'Footer Links', 'nav menu name', 'penny' ),
);
register_nav_menus( $nav_menus_args );


/* === Thumbnail Size === */

add_image_size( 'theme-thumbnail', 250, 99999, false );

