<?php if ( pings_open() && !comments_open() ) : ?>

	<p class="comments-closed pings-open">
		<?php echo penny_string( 'comments-closed-pings-open' ); ?>
	</p><!-- .comments-closed .pings-open -->

<?php elseif ( !comments_open() ) : ?>

	<p class="comments-closed">
		<?php echo penny_string( 'comments-closed' ); ?>
	</p><!-- .comments-closed -->

<?php endif; ?>