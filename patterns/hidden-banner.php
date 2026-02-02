<?php
/**
 * Title: Hero Banner
 * Slug: windmill-theme/hidden-banner
 * Inserter: no
 *
 * @package WindmillTheme
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div
	class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background"
	style="
		padding-top: var(--wp--preset--spacing--90);
		padding-bottom: var(--wp--preset--spacing--90);
	"
>
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading">
			<?php
			echo wp_kses_post(
				/* translators: This string contains the word "Stories" in four different languages with the first item in the locale's language. */
				_x( '“Stories, <span lang="es">historias</span>, <span lang="uk">iсторії</span>, <span lang="el">iστορίες</span>”', 'Pattern placeholder heading in four languages.', 'windmill-theme' )
			);
			?>
		</h1>
		<!-- /wp:heading -->


		<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph -->
			<p>
				<?php
				printf(
					/* translators: %s is the brand name, e.g., 'Fleurs'. */
					esc_html_x( 'We\'re %s, our mission is to deliver exquisite flower arrangements that not only adorn living spaces but also inspire a deeper appreciation for natural beauty.', 'Pattern placeholder text.', 'windmill-theme' ),
					'<strong>' . esc_html_x( 'Fleurs', 'Example brand name.', 'windmill-theme' ) . '</strong>'
				);
				?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
			<div class="wp-block-button">
				<a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="/">
					<?php echo esc_attr_x( 'Get started', 'Pattern placeholder primary CTA button text.', 'windmill-theme' ); ?>
				</a>
			</div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline">
				<a class="wp-block-button__link wp-element-button" href="/">
					<?php echo esc_attr_x( 'Learn more', 'Pattern placeholder secondary CTA button text.', 'windmill-theme' ); ?>
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
