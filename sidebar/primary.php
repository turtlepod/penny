<?php
if ( strpos( get_theme_mod( 'theme_layout' ),'sidebar' ) === false) {
	return false;
}
?>

<?php penny_sidebar_toggle_open(); ?>

<div id="sidebar">

	<?php penny_sidebar_toggle_close(); ?>

	<aside <?php hybrid_attr( 'sidebar', 'primary' ); ?>>

		<?php if ( is_active_sidebar( 'primary' ) ) : // If the sidebar has widgets. ?>

			<?php dynamic_sidebar( 'primary' ); // Displays the primary sidebar. ?>

		<?php endif; // End widgets check. ?>

	</aside><!-- #sidebar-primary -->

</div>