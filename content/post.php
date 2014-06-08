<article <?php hybrid_attr( 'post' ); ?>>

	<?php if ( is_singular( get_post_type() ) ) : // If viewing a single post. ?>

		<div class="entry-wrap">

			<header class="entry-header">

				<h1 <?php hybrid_attr( 'entry-title' ); ?>><a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url"><?php single_post_title(); ?></a></h1>

				<div class="entry-byline">
					<span <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></span>
					<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
					<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', '' ); ?>
					<?php edit_post_link( penny_string( 'edit' ) ); ?>
				</div><!-- .entry-byline -->

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

		<?php if ( has_excerpt() ) get_the_image( array( 'attachment' => false, 'size' => 'theme-thumbnail' ) ); // display thumbnail only when excerpt is displayed. ?>

			<div class="entry-header">

				<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>

				<div class="entry-byline">
					<span <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></span>
					<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
					<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', '' ); ?>
					<?php edit_post_link( penny_string( 'edit' ) ); ?>
				</div><!-- .entry-byline -->

			</div><!-- .entry-header -->

			<?php if ( has_excerpt() ) { // excerpt available ?>

				<div <?php hybrid_attr( 'entry-summary' ); ?>>
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->

			<?php } else { // no excerpt, display full contant ?>

				<div <?php hybrid_attr( 'entry-content' ); ?>>
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<p>' ) ); ?>
				</div><!-- .entry-content -->

			<?php } ?>

			<div class="entry-footer">
				<?php penny_entry_terms(); ?>
			</div><!-- .entry-footer -->

		</div><!-- .entry-wrap -->

	<?php endif; // End single post check. ?>

</article><!-- .entry -->