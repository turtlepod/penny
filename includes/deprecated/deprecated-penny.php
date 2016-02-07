<?php
/**
 * Deprecated functions that should be avoided in favor of newer functions. 
 * Users should not use these functions in their child themes.  The functions below will all be removed at some 
 * point in a future release.  If your theme is using one of these, you should use the listed alternative or 
 * remove it from your theme if necessary.
 * Deplecated functions is loaded to prevent fatal error from child theme using this functions.
**/

/* Deprecated from update of version 0.1.1 to 1.0.0 */

/* previous location: "functions.php" */
function penny_register_menus(){}
function penny_primary_menu_fallback_cb(){}
function penny_sidebar_args(){}
function penny_register_sidebars(){}
function penny_head_script(){}
function penny_enqueue_js(){}
function penny_register_css(){}
function penny_mce_css(){}
function penny_tinymce_body_class(){}
function penny_body_class(){}

/* previous location: "includes/theme.php" */
function penny_version(){}
function penny_get_menu_name(){}
function penny_get_sidebar_name(){}
function penny_menu_search_form(){}
function penny_entry_terms(){}

/* 2.0.0 */
function penny_sidebar_toggle_open(){}
function penny_sidebar_toggle_close(){}