<?php
/**
 * Title: Post date
 * Slug: windmill-theme/hidden-post-date
 * Inserter: no
 *
 * @package WindmillTheme
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"var:preset|spacing|30"}}},"textColor":"contrast-secondary","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div
	class="wp-block-group has-contrast-secondary-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--30)"
>
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph -->
		<p>
			<?php esc_html_e( 'Posted:', 'windmill-theme' ); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"spacing":{"margin":{"right":"var:preset|spacing|60"}}}} /-->

	</div>
	<!-- /wp:group -->

	<?php if ( get_the_modified_time() !== get_the_time() ) : // Display modified date if post has been modified. ?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph -->
			<p>
				<?php esc_html_e( 'Updated:', 'windmill-theme' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"modified"}}}},"className":"wp-block-post-date__modified-date"} /-->

		</div>
		<!-- /wp:group -->
	<?php endif ?>
</div>
<!-- /wp:group -->
