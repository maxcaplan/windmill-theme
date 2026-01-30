<?php
/**
 * Title: Comments
 * Description: Comments area with comments list, pagination, and comment form.
 * Slug: windmill-theme/comments
 * Categories: text
 * Block Types: core/comments
 *
 * @package WindmillTheme
 */

?>


<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:comments {"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">
			<?php esc_html_e( 'Comments', 'windmill-theme' ); ?>
		</h2>
		<!-- /wp:heading -->

		<!-- wp:comments-title {"level":3} /-->


		<!-- wp:comment-template -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:avatar {"size":48} /-->

				<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group">
						<!-- wp:comment-author-name {"style":{"spacing":{"margin":{"right":"var:preset|spacing|40"}}}} /-->

						<!-- wp:comment-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-secondary"}}}},"textColor":"contrast-secondary","fontSize":"small"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:comment-content /-->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:comment-edit-link /-->

						<!-- wp:comment-reply-link /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:comment-template -->

		<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:comments-pagination-previous /-->

			<!-- wp:comments-pagination-next /-->
		<!-- /wp:comments-pagination -->

		<!-- wp:post-comments-form /-->
	</div>
	<!-- /wp:comments -->
</div>
<!-- /wp:group -->
