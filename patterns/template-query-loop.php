<?php
/**
 * Title: Posts list
 * Description: A list of posts, 1 column, with featured image and post date.
 * Slug: windmill-theme/template-query-loop
 * Categories: query
 * Block Types: core/query
 *
 * @package WindmillTheme
 */

?>

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"align":"full","layout":{"type":"default"}} -->
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"0","right":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0;">
			<!-- wp:post-featured-image {"aspectRatio":"3/2"} /-->

			<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

			<!-- wp:post-title {"isLink":true} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|40"}}},"textColor":"contrast-secondary","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group has-contrast-secondary-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:post-author-name {"isLink":true} /-->

				<!-- wp:post-date {"isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-excerpt {"moreText":"<?php echo esc_html_x( '\u003cstrong\u003eRead more\u003c/strong\u003e', 'Bolded read more text', 'windmill-theme' ); ?>","fontSize":"medium"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:query-no-results -->
			<!-- wp:paragraph -->
			<p>
				<?php
				echo esc_html_x(
					'Sorry, but nothing was found. Please try a search with different keywords.',
					'Message explaining that there are no results returned from a search.',
					'windmill-theme'
				);
				?>
			</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->

			<!-- wp:query-pagination-numbers /-->

			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
