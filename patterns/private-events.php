<?php
/**
 * Title: Private events
 * Slug: restoria/private-events
 * Categories: restoria
 * Description: Private dining and events section with image and details.
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
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"},"color":{"text":"#c2410c"}}} -->
			<p class="has-text-color" style="color:#c2410c;font-size:0.85rem;font-weight:700">✦ PRIVATE EVENTS</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
			<h2 class="wp-block-heading">Celebrate behind closed doors.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Our walnut-panelled private room seats fourteen, with a dedicated sommelier and a menu written just for your evening. Full buyouts for up to ninety guests.</p>
			<!-- /wp:paragraph -->
			<!-- wp:list -->
			<ul><!-- wp:list-item -->
			<li>✓ Private dining room · 14 guests</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>✓ Full restaurant buyout · 90 guests</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>✓ Custom menus &amp; wine pairings</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>✓ Dedicated events coordinator</li>
			<!-- /wp:list-item --></ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact">Plan Your Event</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","className":"is-style-soft-frame"} -->
			<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dish-appetizer.jpg" alt="Elegant appetizer course served for a private event" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
