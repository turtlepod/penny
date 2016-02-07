<?php
/**
 * Logo
**/

/* === Logo === */
$logo_args = array(
	'crop'                   => true,
	'width'                  => 150,
	'height'                 => 150,
	'flex_height'            => 0, /* false */
	'flex_width'             => 0, /* false */
	'label'                  => _x( 'Logo', 'customizer', 'penny' ),
	'description'            => _x( 'Recommended size for logo is 150px wide and 150px tall.', 'customizer', 'penny' ),
);
add_theme_support( 'tamatebako-logo', $logo_args );