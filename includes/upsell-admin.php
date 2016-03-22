<?php
/**
 * Penny Upsell Admin Screen HTML.
**/
$upsell_args = tamatebako_upsell_args();
?>

<div id="tamatebako-upsell" class="wrap">

	<h1><?php echo $upsell_args['theme_name']; ?> <span class="title-count"><?php echo sprintf( _x( 'Only %s', 'upsell', 'penny' ), $upsell_args['theme_price'] ); ?></span> <a class="page-title-action" href="<?php echo esc_url( $upsell_args['upgrade_url'] ); ?>"><?php _ex( 'Upgrade', 'upsell', 'penny' ); ?></a></h1>

	<div class="meta-box-wrap">

			<div id="poststuff">

				<div id="post-body" class="metabox-holder columns-2">

					<div id="postbox-container-2" class="postbox-container">

						<?php tamatebako_include( 'includes/upsell-admin/woocommerce' ); ?>

						<?php tamatebako_include( 'includes/upsell-admin/edd' ); ?>

						<?php tamatebako_include( 'includes/upsell-admin/restaurant' ); ?>

						<?php tamatebako_include( 'includes/upsell-admin/events-calendar' ); ?>

						<?php tamatebako_include( 'includes/upsell-admin/portfolio' ); ?>

						<?php tamatebako_include( 'includes/upsell-admin/testimonial' ); ?>

						<?php tamatebako_include( 'includes/upsell-admin/adsense' ); ?>

						<?php tamatebako_include( 'includes/upsell-admin/drag-and-drop' ); ?>

						<?php tamatebako_include( 'includes/upsell-admin/slider' ); ?>

						<?php tamatebako_include( 'includes/upsell-admin/google-maps' ); ?>

					</div><!-- #postbox-container-2 -->

					<div id="postbox-container-1" class="postbox-container">

						<?php tamatebako_include( 'includes/upsell-admin/action-box' ); ?>

					</div><!-- #postbox-container-1 -->

				</div><!-- #post-body -->

				<br class="clear">

			</div><!-- #poststuff -->

	</div><!-- .fx-settings-meta-box-wrap -->

</div><!-- .wrap -->


