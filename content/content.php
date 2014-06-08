<article <?php hybrid_attr( 'post' ); ?>>

	<?php if ( is_singular( get_post_type() ) ) : // If viewing a single post. ?>

		<div class="entry-wrap">

			<header class="entry-header">
				<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>
			</header><!-- .entry-header -->

			<div <?php hybrid_attr( 'entry-content' ); ?>>
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<p>' ) ); ?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php edit_post_link( penny_string( 'edit' ), '<p class="edit-this">', '</p>' ); ?>
				<?php penny_entry_terms(); ?>
			</footer><!-- .entry-footer -->

		</div><!-- .entry-wrap -->

	<?php else : // If not viewing a single post. ?>

		<div class="entry-wrap">

			<div class="entry-header">
				<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>
			</div><!-- .entry-header -->

			<div <?php hybrid_attr( 'entry-summary' ); ?>>
				<?php the_excerpt(); ?>
				<?php edit_post_link( penny_string( 'edit' ), '<p class="edit-this">', '</p>' ); ?>
			</div><!-- .entry-summary -->

			<div class="entry-footer">
				<?php penny_entry_terms(); ?>
			</div><!-- .entry-footer -->

		</div><!-- .entry-wrap -->

	<?php endif; // End single page check. ?>

</article><!-- .entry -->