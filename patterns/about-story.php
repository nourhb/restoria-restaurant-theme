<?php
/**
 * Title: Our story
 * Slug: restoria/about-story
 * Categories: restoria
 * Description: Two-column story section with image and restaurant history text.
 *
 * @package Restoria
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","className":"is-style-soft-frame"} -->
			<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dining-ambiance.jpg" alt="Warm candlelit ambiance inside Restoria dining room" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"},"color":{"text":"#c2410c"}}} -->
			<p class="has-text-color" style="color:#c2410c;font-size:0.85rem;font-weight:700">✦ OUR STORY</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
			<h2 class="wp-block-heading">Seventeen years at the fire.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Restoria began in 2009 as a twelve-seat trattoria with a wood-fired oven and a stubborn belief: that a meal should be an evening, not an errand. Today our dining room seats ninety, but the philosophy has not changed.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Every menu is written with the seasons. Our produce arrives each morning from Ontario farms, our fish from day boats, and our fire — oak and cherrywood — never goes out.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-terracotta-outline"} -->
				<div class="wp-block-button is-style-terracotta-outline"><a class="wp-block-button__link wp-element-button" href="/about">Read Our Full Story</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
