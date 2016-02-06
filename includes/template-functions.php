<?php
/**
 * Template Functions
 * @since 2.0.0
 */


/**
 * Open Sidebar Toggle
 * @since 1.0.0
 */
function penny_sidebar_toggle_open(){
?>
<div id="sidebar-toggle">
	<a href="#sidebar"><span><?php _ex( 'Sidebar', 'sidebar toggle', 'penny' ); ?></span></a>
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
		<a href="#main"><span><?php _ex( 'Back to content', 'sidebar toggle', 'penny' ); ?></span></a>
	</div>
<?php
}