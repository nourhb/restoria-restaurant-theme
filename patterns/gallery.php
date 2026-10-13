<?php
/**
 * Title: Gallery
 * Slug: restoria/gallery
 * Categories: restoria
 * Description: Four-image gallery of the dining room, dishes and ambiance.
 *
 * @package Restoria
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#faf6f0"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#faf6f0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"},"color":{"text":"#c2410c"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#c2410c;font-size:0.85rem;font-weight:700">✦ GALLERY</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<h2 class="wp-block-heading has-text-align-center">Step inside Restoria.</h2>
	<!-- /wp:heading -->
	<!-- wp:gallery {"columns":4,"linkTo":"none","sizeSlug":"large","className":"is-style-soft-frame"} -->
	<figure class="wp-block-gallery has-nested-images columns-4 is-cropped is-style-soft-frame">
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/table-setting.jpg" alt="Elegant candlelit table setting"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wine-pour.jpg" alt="Red wine being poured at an elegant table"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dish-gourmet.jpg" alt="Artfully plated gourmet dish"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dining-room-tables.jpg" alt="Dining room tables ready for evening service"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
