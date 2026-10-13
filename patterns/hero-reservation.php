<?php
/**
 * Title: Hero with reservation CTA
 * Slug: restoria/hero-reservation
 * Categories: restoria
 * Description: Full-width hero with reservation badge, headline and table-booking call-to-action buttons.
 *
 * @package Restoria
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-dining-room.jpg","dimRatio":60,"overlayColor":"charcoal","minHeight":640,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-charcoal-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Elegant candlelit dining room at Restoria restaurant" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-dining-room.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><span class="restoria-badge restoria-badge--accent restoria-pulse">✦ Est. 2009 · Toronto</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|display"},"color":{"text":"#ffffff"}}} -->
			<h1 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Fire-kissed flavours, unforgettable evenings.</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#e8ddcf"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#e8ddcf;font-size:1.25rem">Seasonal fine dining, a 200-label wine cellar and hospitality that feels like home.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"typography":{"fontSize":"1.125rem"}}} -->
				<div class="wp-block-button" style="font-size:1.125rem"><a class="wp-block-button__link wp-element-button" href="/reservations">🍽️ Reserve a Table</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/menu" style="color:#ffffff;border-color:#ffffff">Explore the Menu</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#e2725b"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#e2725b;font-size:0.95rem">★ 4.9/5 from 1,800+ guests &nbsp;·&nbsp; Michelin Guide 2026 &nbsp;·&nbsp; Wine Spectator Award</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
