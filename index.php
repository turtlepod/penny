<?php get_header(); // Loads the header.php template. ?>

<div id="main" class="main">

	<div class="main-wrap">

		<main <?php hybrid_attr( 'content' ); ?>>

			<?php get_template_part( 'loop' ); ?>

		</main><!-- #content -->

		<?php hybrid_get_sidebar( 'primary' ); // Loads the sidebar/primary.php template. ?>

	</div><!-- .main-wrap -->

</div><!-- #main -->

<?php get_footer(); // Loads the footer.php template. ?>