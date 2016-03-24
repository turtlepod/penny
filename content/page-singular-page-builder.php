<?php
/**
 * Page Builder Content
**/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrap">

		<header class="entry-header">
			<?php tamatebako_entry_title(); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php get_template_part( 'content/page-builder-test' ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php edit_post_link(); ?>
			<?php tamatebako_entry_taxonomies(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php comments_template( '', true ); // Load comments. ?>


