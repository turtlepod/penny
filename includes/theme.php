<?php
/**
 * Theme Helper Function
 * @since 0.1.0
 */


/**
 * Get Theme Version
 * Helper function
 * @since 0.1.0
 */
function penny_version(){
	$theme = wp_get_theme( get_template() );
	return $theme->get( 'Version' );
}


/**
 * Get custom menu name by location
 * Helper function to get menu location and use it as mobile toggle.
 * @link http://wordpress.stackexchange.com/questions/45700
 * @since 0.1.0
 */
function penny_get_menu_name( $location ){

	/* Get registered nav menu */
	$menus = get_registered_nav_menus();

	/* If no menu available, bail early */
	if ( empty( $menus ) ){
		return false;
	}

	/* Check if menu is set */
	if ( has_nav_menu( $location ) ){

		/* Get menu location */
		$locations = get_nav_menu_locations();

		/* If location not set, return false */
		if( ! isset( $locations[$location] ) ){
			return false;
		}

		/* Return menu name */
		$menu_obj = get_term( $locations[$location], 'nav_menu' );
		return $menu_obj->name;
	}

	return false;
}


/**
 * Get Sidebar Name by ID
 * Helper function to get sidebar name by sidebar ID and use it as sidebar toggle.
 * @since 0.1.0
 */
function penny_get_sidebar_name( $id ){

	/* Get registered sidebar */
	global $wp_registered_sidebars;

	/* If no sidebar registered, bail early */
	if ( empty( $wp_registered_sidebars ) ){
		return false;
	}

	/* Check if sidebar is set */
	if ( isset( $wp_registered_sidebars[$id] ) ){
		if( isset( $wp_registered_sidebars[$id]['name'] ) && !empty( $wp_registered_sidebars[$id]['name'] ) ){
			return $wp_registered_sidebars[$id]['name'];
		}
		return false;
	}

	return false;
}


/**
 * Navigation Search Form
 * @since 0.1.0.0
 */
function penny_menu_search_form(){?>
	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<label id="search-toggle" for="search-menu"></label>
		<input id="search-menu" type="search" class="search-field" placeholder="<?php echo penny_string('search'); ?>" value="<?php if ( is_search() ) echo esc_attr( get_search_query() ); else ''; ?>" name="s"/>
		<button class="search-submit button"></button>
	</form>
<?php
}


/**
 * Entry Meta
 * a helper function to print all taxonomy/term attach to a post.
 * Usage: `echo apply_atomic_shortcode( 'entry_meta', penny_entry_meta() );`
 * @since 0.1.0
 */
function penny_entry_terms(){

	/* Entry Taxonomies */
	$entry_taxonomies = array();

	/* Get Taxonomies Object */
	$entry_taxonomies_obj = get_object_taxonomies( get_post_type(), 'object' );
	foreach ( $entry_taxonomies_obj as $entry_tax_id => $entry_tax_obj ){

		/* Only for public taxonomy */
		if ( 1 == $entry_tax_obj->public ){
			$entry_taxonomies[$entry_tax_id] = array(
				'taxonomy' => $entry_tax_id,
				'text' => $entry_tax_obj->labels->name,
			);
		}
	}

	/* If taxonomies not empty */
	if ( !empty( $entry_taxonomies ) ){ ?>
		<div class="entry-meta">
		<?php foreach ( $entry_taxonomies as $tax_id => $entry_tax ){ ?>
			<?php hybrid_post_terms( array( 'taxonomy' => $tax_id, 'text' => $entry_tax['text'] . ' %s' ) ); ?>
		<?php }//end foreach ?>
		</div>

	<?php } //end empty check
}
