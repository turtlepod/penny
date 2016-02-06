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
		'name'          => _x( 'Content | Sidebar 1', 'layout name', 'penny' ),
		'thumbnail'     => $image_dir . 'content-sidebar1.png',
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
