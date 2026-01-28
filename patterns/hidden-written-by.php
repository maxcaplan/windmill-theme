<?php
/**
 * Title: Written by
 * Slug: windmill-theme/hidden-written-by
 * Inserter: no
 *
 * @package WindmillTheme
 */

?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:avatar {"size":48} /-->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"textColor":"contrast-secondary","fontSize":"small"} -->
		<p class="has-contrast-secondary-color has-text-color has-small-font-size">
			<?php esc_html_e( 'Written by', 'windmill-theme' ); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:post-author-name {"isLink":true} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
