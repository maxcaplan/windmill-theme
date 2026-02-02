<?php
/**
 * Title: Footer
 * Slug: windmill-theme/hidden-footer
 * Inserter: no
 *
 * @package WindmillTheme
 */

?>

<!-- wp:group {"metadata":{"name":"Footer"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}},"border":{"bottom":{},"top":{"color":"var:preset|color|outline","width":"1px"},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);border-top-color:var(--wp--preset--color--outline);border-top-width:1px;">
	<!-- wp:group {"metadata":{"name":"Body"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column {"layout":{"type":"default"}} -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch", "flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:site-title /-->

						<!-- wp:site-tagline /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search site","widthUnit":"%","buttonText":"Search"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"layout":{"type":"default"}} -->
			<div class="wp-block-column">
				<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
				<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"layout":{"type":"default"}} -->
			<div class="wp-block-column">
				<!-- wp:navigation {"overlayMenu":"never","overlayBackgroundColor":"base","overlayTextColor":"contrast","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap","orientation":"vertical"}} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">
				<?php esc_html_e( 'Windmill Theme', 'windmill-theme' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">
				<?php
				printf(
					/* translators: Copyleft &#127279; 20XX Max Caplan. %1$s: Current year, %2$s: Max Caplan link. */
					esc_html__( 'Copyleft &#127279; %1$s %2$s', 'windmill-theme' ),
					esc_html( current_datetime()->format( 'Y' ) ),
					'<a href="' . esc_url( __( 'https://maxcaplan.com', 'windmill-theme' ) ) . '" rel="nofollow" target="_blank">Max Caplan</a>'
				);
				?>
			</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
