<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrap">

		<div class="entry-header">
			<?php tamatebako_entry_title(); ?>
		</div><!-- .entry-header -->

		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<?php edit_post_link(); ?>
		</div><!-- .entry-summary -->

		<div class="entry-footer">
			<?php tamatebako_entry_taxonomies(); ?>
		</div><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->