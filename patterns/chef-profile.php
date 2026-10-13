<?php
/**
 * Title: Chef profile
 * Slug: restoria/chef-profile
 * Categories: restoria
 * Description: Chef portrait with biography and credentials.
 *
 * @package Restoria
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#1a1512","text":"#faf6f0"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background has-text-color" style="background-color:#1a1512;color:#faf6f0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","className":"is-style-soft-frame"} -->
			<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/chef-portrait.jpg" alt="Executive chef in whites at work in the Restoria kitchen" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"},"color":{"text":"#e2725b"}}} -->
			<p class="has-text-color" style="color:#e2725b;font-size:0.85rem;font-weight:700">✦ MEET THE CHEF</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|display"},"color":{"text":"#faf6f0"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#faf6f0">Chef Marco Bellini</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#b8a99a"}}} -->
			<p class="has-text-color" style="color:#b8a99a">Trained in Bologna and Lyon, Marco spent a decade in Michelin-starred kitchens before bringing his fire-first philosophy to Toronto. His cooking is elemental — wood, season, patience — and his tasting menus have earned Restoria a place in the Michelin Guide three years running.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"#b8a99a"}}} -->
			<p class="has-text-color" style="color:#b8a99a">“A great dish needs only three things: the right ingredient, the right fire, and someone who cares.”</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#e2725b"}}} -->
			<p class="has-text-color" style="color:#e2725b;font-size:0.9rem">★ Michelin Guide 2024–2026 · Best Chef Ontario 2025 · Wine Spectator Award of Excellence</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
