<?php
/**
 * Title: Contact info
 * Slug: restoria/contact-info
 * Categories: restoria
 * Description: Contact details with address, phone, email and map placeholder.
 *
 * @package Restoria
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"},"color":{"text":"#c2410c"}}} -->
			<h3 class="wp-block-heading has-text-color" style="color:#c2410c">📍 Address</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>88 King Street West<br>Toronto, ON M5H 1A1<br>Steps from St. Andrew station</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"},"color":{"text":"#c2410c"}}} -->
			<h3 class="wp-block-heading has-text-color" style="color:#c2410c">📞 Contact</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><a href="tel:+14165550134">+1 (416) 555-0134</a><br><a href="mailto:hello@restoria.ca">hello@restoria.ca</a><br>Events: <a href="mailto:events@restoria.ca">events@restoria.ca</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.25rem"},"color":{"text":"#c2410c"}}} -->
			<h3 class="wp-block-heading has-text-color" style="color:#c2410c">🕰 Hours</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Tue–Thu · 5 PM – 10 PM<br>Fri–Sat · 5 PM – 11 PM<br>Sun · 4 PM – 9 PM<br>Mon · Closed</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:image {"aspectRatio":"21/9","scale":"cover","sizeSlug":"large","className":"is-style-soft-frame","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<figure class="wp-block-image size-large is-style-soft-frame" style="margin-top:var(--wp--preset--spacing--50)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dining-room-tables.jpg" alt="Restoria dining room" style="aspect-ratio:21/9;object-fit:cover"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
