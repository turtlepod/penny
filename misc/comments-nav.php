<?php if ( get_option( 'page_comments' ) && 1 < get_comment_pages_count() ) : // Check for paged comments. ?>

	<div class="comments-nav">

		<?php previous_comments_link( '<span class="prev-comments"></span>' ); ?>

		<span class="page-numbers"><?php printf( '%1$s / %2$s', get_query_var( 'cpage' ) ? absint( get_query_var( 'cpage' ) ) : 1, get_comment_pages_count() ); ?></span>

		<?php next_comments_link( '<span class="next-comments"></span>' ); ?>

	</div><!-- .comments-nav -->

<?php endif; // End check for paged comments. ?>