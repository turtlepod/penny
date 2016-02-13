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

				<?php if ( current_theme_supports( 'tamatebako-logo' ) && get_theme_mod( 'logo' ) ) { ?>
					<img id="logo" src="<?php echo esc_url( tamatebako_logo_url() ); ?>">
				<?php } // end logo ?>

				<div id="branding">
					<?php if( is_front_page() ){ ?>
						<h1 id="site-title"><a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
					<?php } else { ?>
						<p id="site-title"><a rel="home" href="<?php echo esc_url( user_trailingslashit( home_url() ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
					<?php } ?>
					<p id="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- #branding -->

			</header><!-- #header -->

			<?php get_template_part( 'menu/primary' ); // Loads the menu/primary.php template. ?>

			<?php get_template_part( 'menu/breadcrumbs' ); // Loads the menu/breadcrumbs.php template. ?>