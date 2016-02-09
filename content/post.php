<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrap">

		<?php $display = get_theme_mod( 'post_display', 'auto' ); // post display option ?>

		<?php
			/* === THUMBNAIL === */

			/* === Auto: only if excerpt defined === */
			if( 'auto' == $display ){
				if( has_excerpt() ){
					get_the_image( array( 'attachment' => false, 'size' => 'theme-thumbnail' ) );
				}
				else{
				}
			}
			/* === Full text: no thumbnail === */
			elseif( 'full_text' == $display ){
				/* no thumbnail */
			}
			/* === Else (summary as fallback, display thumbnail) === */
			else{
				get_the_image( array( 'attachment' => false, 'size' => 'theme-thumbnail' ) );
			}
		?>

		<div class="entry-header">

			<?php tamatebako_entry_title(); ?>

			<div class="entry-byline">
				<span class="entry-author vcard"><?php the_author_posts_link(); ?></span>
				<?php tamatebako_entry_date(); ?>
				<?php tamatebako_comments_link(); ?>
				<?php edit_post_link(); ?>
			</div><!-- .entry-byline -->

		</div><!-- .entry-header -->

		<?php
			/* === CONTENT / EXCERPT === */

			/* === Auto: only if excerpt defined === */
			if( 'auto' == $display ){
				if( has_excerpt() ){
					?>
					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div><!-- .entry-summary -->
					<?php
				}
				else{
					?>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					</div><!-- .entry-content -->
					<?php
				}
			}
			/* === Full text: no thumbnail === */
			elseif( 'full_text' == $display ){
				?>
				<div class="entry-content">
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
				</div><!-- .entry-content -->
				<?php
			}
			/* === Else (summary as fallback, display thumbnail) === */
			else{
				?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
				<?php
			}
		?>

		<div class="entry-footer">
			<?php tamatebako_entry_taxonomies(); ?>
		</div><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->