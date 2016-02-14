<?php
if ( strpos( get_theme_mod( 'theme_layout' ), 'sidebar1' ) === false) {
	return false;
}
?>

<div id="sidebar">

	<aside class="sidebar" id="sidebar-primary">

		<?php if ( is_active_sidebar( 'primary' ) ) : // If the sidebar has widgets. ?>

			<?php dynamic_sidebar( 'primary' ); // Displays the primary sidebar. ?>

		<?php endif; // End widgets check. ?>

	</aside><!-- #sidebar-primary -->

</div>