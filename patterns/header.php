<?php
/**
 * Title: Header
 * Slug: windmill-theme/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 *
 * @package windmill-theme
 */

?>


<!-- wp:group {"align":"full","style":{"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"style":"solid","width":"1px","color":"var:preset|color|grey-500"},"left":{"style":"none","width":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"position":{"type":"sticky","top":"0px"}},"backgroundColor":"base","textColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-primary-color has-base-background-color has-text-color has-background has-link-color" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--grey-500);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
			<?php
				echo has_custom_logo() ?
				'<!-- wp:site-logo {"width":200} /-->' : '
				<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} /-->';
			?>

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
			<div class="wp-block-group">
				<!-- wp:navigation {"ref":4,"icon":"menu","overlayBackgroundColor":"base","overlayTextColor":"contrast","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
