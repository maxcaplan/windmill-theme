<?php
/**
 * Title: Post navigation
 * Slug: windmill-theme/hidden-post-navigation
 * Inserter: no
 *
 * @package WindmillTheme
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);font-style:normal;font-weight:500">
	<!-- wp:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'windmill-theme' ); ?>","tagName":"nav","align":"wide","style":{"border":{"top":{"color":"var:preset|color|outline","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<nav class="wp-block-group alignwide" aria-label="<?php esc_attr_e( 'Post navigation', 'windmill-theme' ); ?>" style="border-top-color:var(--wp--preset--color--outline);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:post-navigation-link {"type":"previous","label":"Previous Post: ","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->

		<!-- wp:post-navigation-link {"label":"Next Post: ","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->
	</nav>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
