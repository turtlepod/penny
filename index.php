<?php get_header(); // Loads the header.php template. ?>

<div id="main" class="main">

	<div class="main-wrap">

		<main <?php hybrid_attr( 'content' ); ?>>

			<?php if ( have_posts() ){ /* Posts Found */ ?>

				<?php tamatebako_archive_header(); ?>

				<div class="content-entry-wrap">

					<?php while ( have_posts() ) {  /* Start Loop */ ?>

						<?php the_post(); // Loads the post data. ?>

						<?php /* Start Content */ ?>
						<?php tamatebako_get_template( 'content' ); // Loads the content/*.php template. ?>
						<?php /* End Content */ ?>

					<?php } /* End Loop */ ?>

				</div><!-- .content-entry-wrap-->

				<?php tamatebako_archive_footer(); ?>

			<?php } else { /* No Posts Found */ ?>

				<?php tamatebako_content_error(); ?>

			<?php } /* End Posts Found Check */ ?>

		</main><!-- #content -->

		<?php hybrid_get_sidebar( 'primary' ); // Loads the sidebar/primary.php template. ?>

	</div><!-- .main-wrap -->

</div><!-- #main -->

<?php get_footer(); // Loads the footer.php template. ?>