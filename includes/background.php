<?php
/**
 * Custom Background
**/

/* === Custom Background === */
$custom_backgound_args = array(
	'default-color'          => '#e6e6e6',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
);
add_theme_support( 'custom-background', $custom_backgound_args );