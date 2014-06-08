<?php
/* Theme Layouts, do not load on 1c layout */
if ( 'layout-1c' == apply_filters( 'get_theme_layout', 'layout-2c-l' ) ){
	return false;
}
?>

<div id="sidebar-toggle">
	<a href="#sidebar"><span class="screen-reader-text"><?php echo penny_get_sidebar_name( 'primary' ); ?></span></a>
</div>

<div id="sidebar">

	<div id="sidebar-toggle-close">
		<a href="#main"><span class="screen-reader-text"><?php echo penny_get_sidebar_name( 'primary' ); ?></span></a>
	</div>

	<aside <?php hybrid_attr( 'sidebar', 'primary' ); ?>>

		<?php if ( is_active_sidebar( 'primary' ) ) : // If the sidebar has widgets. ?>

			<?php dynamic_sidebar( 'primary' ); // Displays the primary sidebar. ?>

		<?php endif; // End widgets check. ?>

	</aside><!-- #sidebar-primary -->

</div>