<?php
/**
 * Text String / Translatable string used in this theme
 * To keep track on language usage and separate from Hybrid Core.
 * @since 0.1.0
 */
function penny_string( $context ){

	/* Open Sesame ! */
	$text = array();

	/* Register Menus (functions.php) */
	$text['menu-primary-name'] = _x( 'Navigation', 'nav menu location', 'penny' );
	$text['menu-footer-name'] = _x( 'Footer Links', 'nav menu location', 'penny' );

	/* Menu Fallback */
	$text['menu-primary-fallback-home'] = _x( 'Home', 'nav menu primary fallback home link', 'penny' );

	/* Register Sidebar (functions.php) */
	$text['sidebar-primary-name'] = _x( 'Sidebar', 'sidebar', 'penny' );

	/* Menu/Sidebar Close toggle */
	$text['back-to-content'] = __( 'Back to content', 'penny' );

	/* Edit link */
	$text['edit'] = __( 'Edit', 'penny' );

	/* Search */
	$text['search'] = __( 'Search &hellip;', 'penny' );

	/* misc/comments-error */
	$text['comments-closed-pings-open'] = __( 'Comments are closed, but trackbacks and pingbacks are open.', 'penny' );
	$text['comments-closed'] = __( 'Comments are closed.', 'penny' );

	/* content/error.php */
	$text['error'] = __( '404 Not Found', 'penny' );
	$text['error-msg'] = __( 'Apologies, but no entries were found.', 'penny' );

	/* Close Sesame ! */
	if ( isset( $text[$context] ) ){
		return $text[$context];
	}
	return '';
}