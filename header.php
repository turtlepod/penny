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

				<?php if ( get_header_image() ) { ?>
					<img id="header-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">
				<?php } // end header image ?>

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