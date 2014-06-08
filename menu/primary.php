	<nav <?php hybrid_attr( 'menu', 'primary' ); ?>>

		<div class="menu-container menu-dropdown menu-search">

			<div id="menu-toggle-primary">
				<a class="menu-toggle-primary-open" href="#menu-primary"><span class="screen-reader-text"><?php echo penny_get_menu_name( 'primary' ); ?></span></a>
				<a class="menu-toggle-primary-close" href="#container"><span class="screen-reader-text"><?php echo penny_get_menu_name( 'primary' ); ?></span></a>
			</div><!-- .menu-toggle -->

			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container'       => '',
					'menu_id'         => 'menu-primary-items',
					'menu_class'      => 'menu-items',
					'fallback_cb'     => 'penny_primary_menu_fallback_cb',
					'items_wrap'      => '<div class="wrap"><ul id="%s" class="%s">%s</ul></div>'
				)
			); ?>

			<?php penny_menu_search_form(); ?>

		</div><!-- .menu-container -->

	</nav><!-- #menu-primary -->