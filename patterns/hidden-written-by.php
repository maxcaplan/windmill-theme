<?php
/**
 * Title: Written by
 * Slug: windmill-theme/hidden-written-by
 * Inserter: no
 *
 * @package WindmillTheme
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"elements":{"link":{"color":{"text":"var:preset|color|grey-800"}}}},"textColor":"grey-800","fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-grey-800-color has-text-color has-link-color has-small-font-size">
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Written by', 'windmill-theme' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'in', 'windmill-theme' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->
</div>
<!-- /wp:group -->
