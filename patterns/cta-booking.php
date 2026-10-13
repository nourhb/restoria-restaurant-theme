<?php
/**
 * Title: Booking CTA
 * Slug: restoria/cta-booking
 * Categories: restoria
 * Description: Full-width call-to-action band for table reservations.
 *
 * @package Restoria
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/table-setting.jpg","dimRatio":70,"overlayColor":"charcoal","minHeight":420,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-charcoal-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Candlelit table set for dinner at Restoria" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/table-setting.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display"},"color":{"text":"#ffffff"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">An unforgettable evening starts with a reservation.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#e8ddcf"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#e8ddcf">Tables release 30 days ahead and weekends fill fast — book yours tonight.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"restoria-pulse","style":{"typography":{"fontSize":"1.125rem"}}} -->
				<div class="wp-block-button restoria-pulse" style="font-size:1.125rem"><a class="wp-block-button__link wp-element-button" href="/reservations">🍽️ Book Your Table</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="tel:+14165550134" style="color:#ffffff;border-color:#ffffff">Call (416) 555-0134</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
