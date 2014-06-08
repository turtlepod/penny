<article <?php hybrid_attr( 'post' ); ?>>

	<div class="entry-wrap">

		<header class="entry-header">
			<h1 class="entry-title"><?php echo penny_string( 'error' ); ?></h1>
		</header><!-- .entry-header -->

		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php wpautop( penny_string( 'error-msg' ) ); ?>
		</div><!-- .entry-content -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->