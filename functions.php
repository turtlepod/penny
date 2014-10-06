<?php
/**
 * Theme Functions
 * @since 0.1.0
 */

/* ==== HELPER FUNCTIONS ==== */
/* Load text string used in theme. */
require_once( trailingslashit( get_template_directory() ) . 'includes/string.php' );

/* Load base theme functionality. */
require_once( trailingslashit( get_template_directory() ) . 'includes/tamatebako.php' );

/* Load deprecated functions. */
require_once( trailingslashit( get_template_directory() ) . 'includes/deprecated.php' );


/* ==== SETUP FUNCTIONS ==== */

/* Set up the theme early. */
add_action( 'after_setup_theme', 'penny_theme_setup' );

/**
 * Theme setup function.
 * @since  0.1.0
 */
function penny_theme_setup() {

	/* === DEBUG === */
	$debug_args = array(
		'mobile'         => 1,
		'no-js'          => 0,
		'media-queries'  => 0,
	);
	//add_theme_support( 'tamatebako-debug', $debug_args );

	/* === Theme Layouts === */
	$layout = array(
		'content'         => 'Content',
		'content-sidebar1' => 'Content / Sidebar',
	);
	$layout_args = array(
		'default'   => 'content-sidebar1',
		'customize' => true,
		'post_meta' => true,
	);
	add_theme_support( 'theme-layouts', $layout, $layout_args );

	/* === Automatic Feed Links === */
	add_theme_support( 'automatic-feed-links' );

	/* === Custom Background === */
	add_theme_support( 'custom-background', array( 'default-color' => 'e6e6e6' ) );

	/* === Custom Header === */
	$header_args = array(
		'width'                  => 150,
		'height'                 => 150,
		'admin-head-callback'    => 'penny_custom_header_admin_head_cb',
		'header-text'            => false,
	);
	add_theme_support( 'custom-header', $header_args );

	/* === Register Menus === */
	$menus_args = array(
		"primary" => penny_string( 'menu-primary-name' ),
		"footer" => penny_string( 'menu-footer-name' ),
	);
	add_theme_support( 'tamatebako-menus', $menus_args );

	/* === Register Sidebars === */
	$sidebars_args = array(
		"primary" => array( "name" => penny_string( 'sidebar-primary-name' ), "description" => "" ),
	);
	add_theme_support( 'tamatebako-sidebars', $sidebars_args );

	/* === Register Images Size === */
	add_action( 'init', 'penny_register_image_sizes' );

	/* === Load Stylesheet === */
	$style_args = array(
		'theme-open-sans-font',
		'dashicons',
		'theme-reset',
		'theme-menus',
		'parent',
		'style',
		'media-queries'
	);
	add_theme_support( 'hybrid-core-styles', $style_args );

	/* === Editor Style === */
	$editor_css = array(
		'css/reset.css',
		'style.css',
		tamatebako_google_open_sans_font_url()
	);
	add_editor_style( $editor_css );

	/* === Customizer Mobile View === */
	add_theme_support( 'tamatebako-customize-mobile-view' );

	/* === Set Content Width === */
	hybrid_set_content_width( 900 );
}


/**
 * Custom Header Admin Head Callback
 * @since 0.1.0
 */
function penny_custom_header_admin_head_cb(){
?>
<style type="text/css" id="penny-admin-header-preview-css">
	.appearance_page_custom-header .available-headers label img{
		width: 50px;
		height: 50px;
	}
</style>
<?php
}


/**
 * Register Image Size
 * @since 0.1.0
 */
function penny_register_image_sizes(){
	add_image_size( 'theme-thumbnail', 250, 99999, false );
}


/**
 * Open Sidebar Toggle
 * @since 1.0.0
 */
function penny_sidebar_toggle_open(){
?>
<div id="sidebar-toggle">
	<a href="#sidebar"><span><?php echo penny_string( 'open-sidebar' ); ?></span></a>
</div>
<?php
}


/**
 * Close Sidebar Toggle
 * @since 1.0.0
 */
function penny_sidebar_toggle_close(){
?>
	<div id="sidebar-toggle-close">
		<a href="#main"><span><?php echo penny_string( 'close-sidebar' ); ?></span></a>
	</div>
<?php
}

/* theme after setup hook */
do_action( 'penny_after_setup_theme' );