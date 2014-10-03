<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>

<head>
<?php wp_head(); // Hook required for scripts, styles, and other <head> items. ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>
<?php echo tamatebako_check_js_script(); ?>

	<div id="container">

		<?php tamatebako_skip_to_content(); ?>

		<div class="wrap">

			<header <?php hybrid_attr( 'header' ); ?>>

				<?php if ( get_header_image() ) { ?>
					<img id="header-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">
				<?php } // end header image ?>

				<div id="branding">
					<?php hybrid_site_title(); ?>
					<?php hybrid_site_description(); ?>
				</div><!-- #branding -->

			</header><!-- #header -->

			<?php hybrid_get_menu( 'primary' ); // Loads the menu/primary.php template. ?>