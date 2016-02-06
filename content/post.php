<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrap">

	<?php if ( has_excerpt() ) get_the_image( array( 'attachment' => false, 'size' => 'theme-thumbnail' ) ); // display thumbnail only when excerpt is displayed. ?>

		<div class="entry-header">

			<?php tamatebako_entry_title(); ?>

			<div class="entry-byline">
				<span class="entry-author vcard"><?php the_author_posts_link(); ?></span>
				<?php tamatebako_entry_date(); ?>
				<?php edit_post_link(); ?>
			</div><!-- .entry-byline -->

		</div><!-- .entry-header -->

		<?php if ( has_excerpt() ) { // excerpt available ?>

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

		<?php } else { // no excerpt, display full contant ?>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div><!-- .entry-content -->

		<?php } ?>

		<div class="entry-footer">
			<?php tamatebako_entry_taxonomies(); ?>
		</div><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->