	</div><!-- #container .wrap -->

	<footer id="footer">

		<div class="wrap">

			<p class="credit">
				<a rel="home" href="<?php echo esc_url( home_url() );?>" class="site-link"><?php bloginfo( 'name' ); ?></a> &#169;  <?php echo date_i18n( 'Y' ); ?>
				<?php get_template_part( 'menu/footer' ); // Loads the menu/footer.php template. ?>
			</p><!-- .credit -->

		</div><!-- .wrap -->

	</footer><!-- #footer -->

</div><!-- #container -->

<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>