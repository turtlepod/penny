<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrap">

		<?php if( tamatebako_show_page_title() ){ ?>
			<header class="entry-header">
				<?php tamatebako_entry_title(); ?>
			</header><!-- .entry-header -->
		<?php } ?>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php edit_post_link(); ?>
			<?php tamatebako_entry_taxonomies(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php comments_template( '', true ); // Load comments. ?>