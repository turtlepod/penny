<?php

/**
 * Text String / Translatable string used in tamatebako
 * @since 1.0.0
 */
function tamatebako_string( $context ){

	/* Open Sesame ! */
	$text = array();

	/* Paged Title Tag
	 * Translators: 1 is the page title and separator. 2 is the page number.
	 * Example Output: "{post title} | Page {page number}"
	 */
	$text['paged'] = _x( '%1$s Page %2$s', 'paged title tag', 'penny' );

	/* Skip to content (accessibility) */
	$text['skip-to-content'] = _x( 'Skip to content', 'skip to content (accessibility)', 'penny' );

	/* Read More */
	$text['read-more'] = _x( 'Continue reading', 'content read more', 'penny' );

	/* Entry Permalink */
	$text['permalink'] = _x( 'Permalink', 'entry permalink', 'penny' );

	/* Next, Previous */
	$text['next'] = _x( 'Next', 'next in pagination and navigation (accessibility)', 'penny' );
	$text['previous'] = _x( 'Previous', 'previous in pagination and navigation (accessibility)', 'penny' );

	/* Search */
	$text['search'] = _x( 'Search&hellip;', 'search text', 'penny' );
	$text['search-button'] = _x( 'Search', 'search button (accessibility)', 'penny' );
	$text['expand-search-form'] = _x( 'Expand Search Form', 'expand search form button (accessibility)', 'penny' );

	/* Comments error */
	$text['comments-closed-pings-open'] = _x( 'Comments are closed, but trackbacks and pingbacks are open.', 'comments notice', 'penny' );
	$text['comments-closed'] = _x( 'Comments are closed.', 'comments notice', 'penny' );

	/* Content error */
	$text['error'] = _x( '404 Not Found', '404 title', 'penny' );
	$text['error-msg'] = _x( 'Apologies, but no entries were found.', '404 content', 'penny' );

	/* Theme Layout */
	$text['global-layout'] = _x( 'Global Layout', 'theme layouts', 'penny' );
	$text['layout'] = _x( 'Layout', 'theme layouts', 'penny' );

	$text = apply_filters( 'tamatebako_string', $text );

	/* Close Sesame ! */
	if ( isset( $text[$context] ) ){
		return $text[$context];
	}
	return '';
}

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

	/* Register Sidebar (functions.php) */
	$text['sidebar-primary-name'] = _x( 'Sidebar', 'sidebar', 'penny' );

	/* Menu/Sidebar Close toggle */
	$text['open-sidebar'] = _x( 'Sidebar', 'sidebar toggle', 'penny' );
	$text['close-sidebar'] = _x( 'Back to content', 'sidebar toggle', 'penny' );

	$text = apply_filters( 'penny_string', $text );

	/* Close Sesame ! */
	if ( isset( $text[$context] ) ){
		return $text[$context];
	}
	return '';
}