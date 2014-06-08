<?php
/**
 * Theme Functions
 * @since 0.1.0
 */

/* ==== HELPER FUNCTIONS ==== */

/* Load text string used in theme */
require_once( trailingslashit( get_template_directory() ) . 'includes/string.php' );

/* Load theme helper function */
require_once( trailingslashit( get_template_directory() ) . 'includes/theme.php' );


/* ==== SETUP FUNCTIONS ==== */

/* Load the Hybrid Core framework and launch it. */
require_once( trailingslashit( get_template_directory() ) . 'library/hybrid.php' );
new Hybrid();

/* Set up the theme early. */
add_action( 'after_setup_theme', 'penny_theme_setup' );

/**
 * Theme setup function.
 * @since  0.1.0
 */
function penny_theme_setup() {

	/* Hybrid Core */
	add_theme_support( 'hybrid-core-template-hierarchy' );
	add_theme_support( 'get-the-image' );
	add_theme_support( 'loop-pagination' );
	hybrid_set_content_width( 900 );

	/* Theme Layouts. */
	$layout = array(
		'1c'        => '1 Column',
		'2c-l'      => '2 Columns: Content / Sidebar',
	);
	$layout_args = array(
		'default'   => '2c-l',
		'customize' => false,
		'post_meta' => false,
	);
	add_theme_support( 'theme-layouts', $layout, $layout_args );

	/* Automatic Feed Links */
	add_theme_support( 'automatic-feed-links' );

	/* Custom Background */
	add_theme_support( 'custom-background', array( 'default-color' => 'e6e6e6' ) );

	/* Custom Header */
	$header_args = array(
		'width'                  => 150,
		'height'                 => 150,
		'admin-head-callback'    => 'penny_custom_header_admin_head_cb',
		'header-text'            => false,
	);
	add_theme_support( 'custom-header', $header_args );

	/* Menus */
	add_action( 'init', 'penny_register_menus' );

	/* Sidebars */
	add_filter( 'hybrid_sidebar_defaults', 'penny_sidebar_args' );
	add_action( 'widgets_init', 'penny_register_sidebars' );

	/* Images */
	add_action( 'init', 'penny_register_image_sizes' );

	/* Script */
	add_action( 'wp_head', 'penny_head_script' );
	add_action( 'wp_enqueue_scripts', 'penny_enqueue_js' );
	add_action( 'wp_enqueue_scripts', 'penny_register_css', 1 );
	add_theme_support( 'hybrid-core-styles', array( 'theme-open-sans-font', 'dashicons', 'parent', 'style', 'media-queries' ) );

	/* Admin: TinyMCE Editor Style */
	add_filter( 'mce_css', 'penny_mce_css' );
	add_editor_style( array( 'style-editor.css' ) );
	add_filter( 'tiny_mce_before_init', 'penny_tinymce_body_class' );

	/* Additional Body Classes */
	add_filter( 'body_class', 'penny_body_class' );

	/* HTML 5 */
	$html5 = array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	);
	add_theme_support( 'html5', $html5 );
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
 * Register Nav Menus
 * @since 0.1.0
 */
function penny_register_menus(){
	register_nav_menu( 'primary', penny_string( 'menu-primary-name' ) );
	register_nav_menu( 'footer', penny_string( 'menu-footer-name' ) );
}


/**
 * Primary Menu Fallback Callback
 * @since 0.1.0
 */
function penny_primary_menu_fallback_cb(){
?>
<div class="wrap">
	<ul class="menu-items" id="menu-primary-items">
		<li class="menu-item">
			<a rel="home" href="<?php echo home_url(); ?>"><?php echo penny_string( 'menu-primary-fallback-home' ); ?></a>
		</li>
	</ul>
</div>
<?php
}


/**
 * Sidebar Args
 * @since 0.1.0
 */
function penny_sidebar_args( $args ){
	$args['before_title'] = '<div class="widget-title">';
	$args['after_title'] = '</div>';
	return $args;
}

/**
 * Register Sidebar
 * @since 0.1.0
 */
function penny_register_sidebars(){
	hybrid_register_sidebar(
		array(
			'id'          => 'primary',
			'name'        => penny_string( 'sidebar-primary-name' ),
			'description' => ''
		)
	);
}


/**
 * Register Image Size
 * @since 0.1.0
 */
function penny_register_image_sizes(){
	add_image_size( 'theme-thumbnail', 250, 99999, false );
}


/**
 * Head Script.
 * Load style via "wp_head" hook, for non-supported browser
 * @link   https://github.com/scottjehl/Respond
 * @link   https://github.com/aFarkas/html5shiv
 * @since  0.1.0
 */
function penny_head_script() {
	$js = get_template_directory_uri() . '/js/';
	$css = get_template_directory_uri() . '/css/';
?><!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="<?php echo $css . 'ie8.css'; ?>" media="screen" />
<![endif]-->
<!-- Enables media queries and html5 in some unsupported browsers. -->
<!--[if (lt IE 9) & (!IEMobile)]>
<script type="text/javascript" src="<?php echo $js . 'respond.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo $js . 'html5shiv.min.js'; ?>"></script>
<![endif]-->
<?php
}


/**
 * Register and Enqueue JS
 * @since 0.1.0
 */
function penny_enqueue_js(){
	$js = get_template_directory_uri() . '/js/';
	wp_enqueue_script( 'theme-fitvids', $js . 'fitvids.min.js', array( 'jquery' ), '0.1.1', true );
	wp_enqueue_script( 'theme-js', $js . 'theme.js', array( 'jquery' ), penny_version(), true );
}


/**
 * Register CSS
 * @since 0.1.0
 */
function penny_register_css(){

	/* Google Fonts: Open Sans / font-family: 'Open Sans', sans-serif; */
	$open_sans = '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic';
	wp_register_style( 'theme-open-sans-font', $open_sans, array(), penny_version(), 'all' );

	/* Media Queries */
	wp_register_style( 'media-queries', trailingslashit( get_template_directory_uri() ) . 'media-queries.css', array(), penny_version(), 'all' );
}


/**
 * Fonts for MCE CSS
 * @since 0.1.0
 */
function penny_mce_css( $mce_css ){

	/* Open Sans */
	$open_sans = '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic';
	$mce_css .= ',' . str_replace( ',', '%2C', $open_sans );

	return $mce_css;
}


/**
 * Adds the <body> class to the visual editor.
 * @since  0.1.0
 */
function penny_tinymce_body_class( $settings ) {
	$settings['body_class'] = join( ' ', get_body_class() );
	return $settings;
}


/**
 * Body Classes
 * @since 0.1.0
 */
function penny_body_class( $classes ){

	/* do not add in admin (editor classes) */
	if ( is_admin() ){
		$classes[] = 'entry-content';
		return $classes;
	}

	/* Front End (not admin) */
	$classes[] = 'wp-front-end';

	/* Get all registered sidebars */
	global $wp_registered_sidebars;

	/* If not empty sidebar */
	if ( !empty( $wp_registered_sidebars ) ){

		/* Foreach widget areas */
		foreach ( $wp_registered_sidebars as $sidebar ){

			/* Add active/inactive class */
			$classes[] = is_active_sidebar( $sidebar['id'] ) ? "sidebar-{$sidebar['id']}-active" : "sidebar-{$sidebar['id']}-inactive";
		}
	}

	/* Get all registered menus */
	$menus = get_registered_nav_menus();

	/* If not empty menus */
	if ( !empty( $menus ) ){

		/* For each menus */
		foreach ( $menus as $menu_id => $menu ){

			/* Add active/inactive class */
			$classes[] = has_nav_menu( $menu_id ) ? "menu-{$menu_id}-active" : "menu-{$menu_id}-inactive";
		}
	}

	/* JS Status: will be changed to "js-enabled" by "js/theme.js" */
	$classes[] = 'js-disabled';

	/* Google Prettify Active */
	$classes[] = 'google-prettify-active';

	/* Mobile visitor class */
	if ( wp_is_mobile() ){
		$classes[] = 'wp-is-mobile';

		/* Visitor using Opera Mini browser: opera mini browser do not use custom fonts. */
		if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false ){
			$classes[] = 'wp-is-opera-mini';
		}
	}
	/* Non-mobile visitor/using desktop browser */
	else{
		$classes[] = 'wp-is-not-mobile';
	}

	/* Make it unique */
	$classes = array_unique( $classes );

	return $classes;
}


/* theme after setup hook */
do_action( 'penny_after_setup_theme' );