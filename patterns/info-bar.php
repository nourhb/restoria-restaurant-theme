<?php
/**
 * Title: Hours, location and phone info bar
 * Slug: restoria/info-bar
 * Categories: restoria
 * Description: Three-column strip with opening hours, address and phone number.
 *
 * @package Restoria
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#1a1512","text":"#faf6f0"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background has-text-color" style="background-color:#1a1512;color:#faf6f0">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"},"color":{"text":"#e2725b"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#e2725b;font-size:0.85rem;font-weight:700">🕰 OPENING HOURS</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem"}}} -->
			<p class="has-text-align-center" style="font-size:1rem">Tue–Thu · 5 PM – 10 PM<br>Fri–Sat · 5 PM – 11 PM<br>Sun · 4 PM – 9 PM · Mon closed</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"},"color":{"text":"#e2725b"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#e2725b;font-size:0.85rem;font-weight:700">📍 FIND US</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem"}}} -->
			<p class="has-text-align-center" style="font-size:1rem">88 King Street West<br>Toronto, ON M5H 1A1<br><a href="/contact" style="color:#e2725b">Get directions →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"},"color":{"text":"#e2725b"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#e2725b;font-size:0.85rem;font-weight:700">📞 CALL US</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem"}}} -->
			<p class="has-text-align-center" style="font-size:1rem"><a href="tel:+14165550134" style="color:#faf6f0">+1 (416) 555-0134</a><br><a href="mailto:hello@restoria.ca" style="color:#faf6f0">hello@restoria.ca</a><br>Parties of 7+ · please call</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
