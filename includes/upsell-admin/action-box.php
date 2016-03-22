<?php
$upsell_args = tamatebako_upsell_args();
?>
<div class="postbox" id="submitdiv">

	<h2 class="hndle"><span><?php _ex( 'Upgrade Benefit', 'upsell', 'penny' ); ?></span></h2>

	<div class="inside">

		<div id="misc-publishing-actions">
			<div class="misc-pub-section">
				<span class="dashicons dashicons-yes"></span> <?php _ex( 'All Premium Features', 'upsell', 'penny' ); ?>
			</div>
			<div class="misc-pub-section">
				<span class="dashicons dashicons-sos"></span> <?php _ex( 'Friendly Support', 'upsell', 'penny' ); ?>
			</div>
			<div class="misc-pub-section">
				<span class="dashicons dashicons-update"></span> <?php _ex( 'Automatic Updates', 'upsell', 'penny' ); ?>
			</div>
		</div><!-- #misc-publishing-actions -->

		<div id="major-publishing-actions">
			<div id="delete-action">
				<strong><?php echo sprintf( _x( 'Only %s', 'upsell', 'penny' ), $upsell_args['theme_price'] ); ?></strong>
			</div>
			<div id="publishing-action">
				<a class="button button-primary button-large" target="_blank" href="<?php echo esc_url( $upsell_args['upgrade_url'] ); ?>"><?php _ex( 'Upgrade', 'upsell', 'penny' ); ?></a>
			</div><!-- #publishing-action-->
			<div class="clear"></div>
		</div><!-- #major-publising-actions -->

	</div><!-- .inside -->

</div><!-- #submitdiv.postbox -->