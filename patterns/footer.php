<?php
/**
 * Title: Footer
 * Slug: windmill-theme/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns with logo, title, tagline and links.
 *
 * @package windmill-theme
 */

// Use site logo if set, otherwise use site title.
$wm_theme_site_info = has_custom_logo() ? '<!-- wp:site-logo {"width":200} /-->' : '<!-- wp:site-title {"level":2} /-->';
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"width":"1px","color":"var:preset|color|grey-500"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--grey-500);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"100%"} -->
				<div class="wp-block-column" style="flex-basis:100%">
					<?php
						echo has_custom_logo() ?
						'<!-- wp:site-logo {"width":200} /-->' : '
						<!-- wp:site-title {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} /-->';
					?>

					<!-- wp:site-tagline /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:spacer {"height":"var:preset|spacing|40","width":"0px"} -->
					<div style="height:var(--wp--preset--spacing--40);width:0px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:navigation {"ref":4,"overlayMenu":"never","overlayBackgroundColor":"base","overlayTextColor":"contrast","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">
				<?php esc_html_e( 'Windmill Theme', 'windmill-theme' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">
				<?php
					printf(
						/* translators: Copyleft &#127279; 20XX. %s: Current year */
						esc_html__( 'Copyleft &#127279; %s', 'windmill-theme' ),
						esc_html( current_datetime()->format( 'Y' ) )
					);
					?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">
				<?php
					printf(
						/* translators: Created with <3 by Max Caplan. %s: Max Caplan link. */
						esc_html__( 'Created with <3 by %s', 'windmill-theme' ),
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
