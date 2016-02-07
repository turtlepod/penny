<?php
/**
 * Make Framework Translatable
**/

/* Load Text Domain */
load_theme_textdomain( 'penny', get_template_directory() . '/assets/languages' );

/* Make all string in the framework translatable. */
$texts = array(

	/* functions/template/accessibility.php */
	'skip_to_content'             => _x( 'Skip to content', 'accessibility', 'penny' ),

	/* functions/template/general.php */
	'next_posts'                  => _x( 'Next', 'pagination', 'penny' ),
	'previous_posts'              => _x( 'Previous', 'pagination', 'penny' ),

	/* functions/template/menu.php */
	'menu_search_placeholder'     => _x( 'Search&hellip;', 'nav menu', 'penny' ),
	'menu_search_button'          => _x( 'Search', 'nav menu', 'penny' ),
	'menu_search_form_toggle'     => _x( 'Expand Search Form', 'nav menu', 'penny' ),
	'menu_default_home'           => _x( 'Home', 'nav menu', 'penny' ),

	/* functions/template/entry.php */
	'error_title'                 => _x( '404 Not Found', 'entry', 'penny' ),
	'error_message'               => _x( 'Apologies, but no entries were found.', 'entry', 'penny' ),
	'next_post'                   => _x( 'Next', 'entry', 'penny' ),
	'previous_post'               => _x( 'Previous', 'entry', 'penny' ),

	/* functions/template/comment.php */
	'next_comment'                => _x( 'Next', 'comment', 'penny' ),
	'previous_comment'            => _x( 'Previous', 'comment', 'penny' ),
	'comments_closed_pings_open'  => _x( 'Comments are closed, but trackbacks and pingbacks are open.', 'comment', 'penny' ),
	'comments_closed'             => _x( 'Comments are closed.', 'comment', 'penny' ),

	/* functions/setup.php */
	'untitled'                    => _x( '(Untitled)', 'entry', 'penny' ),
	'read_more'                   => _x( 'Read More', 'entry', 'penny' ),
	'search_title_prefix'         => _x( 'Search:', 'archive title', 'penny' ),
	'comment_moderation_message'  => _x( 'Your comment is awaiting moderation.', 'comment', 'penny' ),

);

/* Add text to tamatebako */
tamatebako_load_strings( $texts );