<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?> class="no-js">

<head>
<?php wp_head(); // Hook required for scripts, styles, and other <head> items. ?>
</head>

<body <?php body_class(); ?>>

	<div id="container">

		<?php tamatebako_skip_to_content(); ?>

		<div class="wrap">

			<header role="banner" id="header">

				<?php $logo_option = get_theme_mod( 'penny_logo_option', 'icon' ); ?>

				<?php if ( current_theme_supports( 'tamatebako-logo' ) && get_theme_mod( 'logo' ) && 'icon' == $logo_option ) { ?>
					<img id="logo" src="<?php echo esc_url( tamatebako_logo_url() ); ?>">
				<?php } // end logo ?>

				<div id="branding">

					<?php if ( current_theme_supports( 'tamatebako-logo' ) && get_theme_mod( 'logo' ) && 'title' == $logo_option ) { ?>

						<?php if( is_front_page() ){ ?>
							<h1 id="site-logo">
								<a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>">
									<img class="logo-img" src="<?php echo esc_url( tamatebako_logo_url() ); ?>" alt="<?php echo esc_attr( strip_tags( get_bloginfo( 'name' ) ) ); ?>"/>
									<span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
								</a>
							</h1>
						<?php } else { ?>
							<p id="site-logo">
								<a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>">
									<img class="logo-img" src="<?php echo esc_url( tamatebako_logo_url() ); ?>" alt="<?php echo esc_attr( strip_tags( get_bloginfo( 'name' ) ) ); ?>"/>
									<span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
								</a>
							</p>
						<?php } ?>

					<?php } else { ?>

						<?php if( is_front_page() ){ ?>
							<h1 id="site-title"><a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
						<?php } else { ?>
							<p id="site-title"><a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
						<?php } ?>
						<p id="site-description"><?php bloginfo( 'description' ); ?></p>

					<?php } ?>

				</div><!-- #branding -->

			</header><!-- #header -->

			<?php get_template_part( 'menu/primary' ); // Loads the menu/primary.php template. ?>

			<?php get_template_part( 'menu/breadcrumbs' ); // Loads the menu/breadcrumbs.php template. ?>