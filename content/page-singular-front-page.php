<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) { ?>
		<div class="entry-media front-page-featured-image">
			<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) ); ?>
		</div>
	<?php } ?>

	<div class="entry-wrap">

		<?php if( tamatebako_show_page_title() ){ ?>
			<header class="entry-header">
				<?php tamatebako_entry_title(); ?>
			</header><!-- .entry-header -->
		<?php } ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php edit_post_link(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-wrap -->

</article><!-- .entry -->

<?php if( penny_front_widget_active() ){ ?>
<div class="front-page-widgets <?php echo sanitize_html_class( penny_front_page_widget_class() ); ?>">
	<?php tamatebako_get_sidebar( 'front-1' ); ?>
	<?php tamatebako_get_sidebar( 'front-2' ); ?>
	<?php tamatebako_get_sidebar( 'front-3' ); ?>
</div><!-- .front-page-widgets -->
<?php } // end check ?>