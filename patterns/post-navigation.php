<?php
/**
 * Title: Post navigation
 * Description: Next and previous post links.
 * Slug: windmill-theme/post-navigation
 * Categories: text
 * Block Types: core/post-navigation-link
 *
 * @package WindmillTheme
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);">
	<!-- wp:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'windmill-theme' ); ?>","tagName":"nav","align":"wide","style":{"border":{"top":{"color":"var:preset|color|grey-800","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<nav class="wp-block-group alignwide" aria-label="<?php esc_attr_e( 'Post navigation', 'windmill-theme' ); ?>" style="border-top-color:var(--wp--preset--color--grey-800);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->
		<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /-->
	</nav>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
