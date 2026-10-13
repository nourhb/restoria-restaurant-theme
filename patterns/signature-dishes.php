<?php
/**
 * Title: Signature dishes grid
 * Slug: restoria/signature-dishes
 * Categories: restoria
 * Description: Three-column grid of signature dishes with photos, names and prices.
 *
 * @package Restoria
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#faf6f0"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#faf6f0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"},"color":{"text":"#c2410c"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#c2410c;font-size:0.85rem;font-weight:700">✦ SIGNATURES</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<h2 class="wp-block-heading has-text-align-center">Dishes guests cross town for.</h2>
	<!-- /wp:heading -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-dish-card restoria-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group is-style-dish-card restoria-card has-background" style="border-radius:12px;background-color:#ffffff">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dish-steak.jpg" alt="Dry-aged ribeye with red wine jus" style="aspect-ratio:4/3;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"}}} -->
					<h3 class="wp-block-heading">45-Day Dry-Aged Ribeye</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#8a7a68"}}} -->
					<p class="has-text-color" style="color:#8a7a68;font-size:0.95rem">Ontario beef, bone-marrow butter, charred cipollini, red wine jus.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontWeight":"800"},"color":{"text":"#c2410c"}}} -->
					<p class="has-text-color" style="color:#c2410c;font-size:1.125rem;font-weight:800">$68</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-dish-card restoria-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group is-style-dish-card restoria-card has-background" style="border-radius:12px;background-color:#ffffff">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dish-fish.jpg" alt="Pan-seared sea bass with lemon beurre blanc" style="aspect-ratio:4/3;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"}}} -->
					<h3 class="wp-block-heading">Pan-Seared Sea Bass</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#8a7a68"}}} -->
					<p class="has-text-color" style="color:#8a7a68;font-size:0.95rem">Day-boat catch, lemon beurre blanc, fennel confit, sea herbs.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontWeight":"800"},"color":{"text":"#c2410c"}}} -->
					<p class="has-text-color" style="color:#c2410c;font-size:1.125rem;font-weight:800">$54</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-dish-card restoria-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group is-style-dish-card restoria-card has-background" style="border-radius:12px;background-color:#ffffff">
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dessert-chocolate.jpg" alt="Dark chocolate fondant with sea salt and olive oil" style="aspect-ratio:4/3;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"}}} -->
					<h3 class="wp-block-heading">Dark Chocolate Fondant</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#8a7a68"}}} -->
					<p class="has-text-color" style="color:#8a7a68;font-size:0.95rem">70% Valrhona, sea salt, olive oil, brown-butter ice cream.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontWeight":"800"},"color":{"text":"#c2410c"}}} -->
					<p class="has-text-color" style="color:#c2410c;font-size:1.125rem;font-weight:800">$18</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-terracotta-outline"} -->
		<div class="wp-block-button is-style-terracotta-outline"><a class="wp-block-button__link wp-element-button" href="/menu">See the Full Menu</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
