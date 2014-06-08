<?php
/**
 * Footer Menu Links
 * @links http://css-tricks.com/snippets/wordpress/remove-li-elements-from-output-of-wp_nav_menu/
 */
$args = array(
	'theme_location'  => 'footer',
	'container'       => false,
	'echo'            => false,
	'items_wrap'      => '<span id="footer-links">%3$s</span>',
	'depth'           => 0,
	'fallback_cb'     => '__return_false',
);
echo strip_tags( wp_nav_menu( $args ), '<span><a>' );