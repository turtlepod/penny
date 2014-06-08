	</div><!-- #container .wrap -->

	<footer <?php hybrid_attr( 'footer' ); ?>>

		<div class="wrap">

			<p class="credit">
				<?php echo hybrid_get_site_link() . ' &#169; ' . date_i18n( 'Y' ); ?>
				<?php hybrid_get_menu( 'footer' ); // Loads the menu/footer.php template. ?>
			</p><!-- .credit -->

		</div><!-- .wrap -->

	</footer><!-- #footer -->

</div><!-- #container -->

<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>