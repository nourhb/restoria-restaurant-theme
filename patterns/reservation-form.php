<?php
/**
 * Title: Reservation form
 * Slug: restoria/reservation-form
 * Categories: restoria
 * Description: Table reservation request form with date, time and party size.
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
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"},"color":{"text":"#e2725b"}}} -->
			<p class="has-text-color" style="color:#e2725b;font-size:0.85rem;font-weight:700">✦ RESERVATIONS</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|display"},"color":{"text":"#faf6f0"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#faf6f0">Your table is waiting.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#b8a99a"}}} -->
			<p class="has-text-color" style="color:#b8a99a">Send a request and our host team will confirm within two hours during service. For parties of seven or more, please call <a href="tel:+14165550134" style="color:#e2725b">+1 (416) 555-0134</a>.</p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","className":"is-style-soft-frame","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<figure class="wp-block-image size-large is-style-soft-frame" style="margin-top:var(--wp--preset--spacing--40)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/restaurant-exterior.jpg" alt="Restoria restaurant facade at night" style="aspect-ratio:16/10;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"style":{"border":{"radius":"12px"},"color":{"background":"#241d17"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group has-background" style="border-radius:12px;background-color:#241d17">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"},"color":{"text":"#faf6f0"}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#faf6f0;font-size:1.25rem">Request a table</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#b8a99a"}}} -->
				<p class="has-text-color" style="color:#b8a99a;font-size:0.9rem">Name</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#b8a99a"}}} -->
				<p class="has-text-color" style="color:#b8a99a;font-size:0.9rem">Phone</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#b8a99a"}}} -->
				<p class="has-text-color" style="color:#b8a99a;font-size:0.9rem">Date · Time · Guests</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#b8a99a"}}} -->
				<p class="has-text-color" style="color:#b8a99a;font-size:0.9rem">Occasion / special requests</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="mailto:reserve@restoria.ca?subject=Table%20reservation%20request">Send Reservation Request</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"},"color":{"text":"#8a7a68"}}} -->
				<p class="has-text-color" style="color:#8a7a68;font-size:0.85rem">Replace with your booking plugin (OpenTable, Tock or Resy) shortcode.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
