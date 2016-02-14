<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrap">

		<header class="entry-header">
			<?php tamatebako_entry_title(); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php edit_post_link(); ?>
			<?php tamatebako_entry_taxonomies(); ?>
			<div class="entry-taxonomies">
					<span class="entry-taxonomy category">
						<span class="entry-taxonomy-text">Categories</span> 
						<a rel="tag" href="http://dev.play/category/uncategorized/">Uncategorized</a>		</span>
			</div>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php comments_template( '', true ); // Load comments. ?>