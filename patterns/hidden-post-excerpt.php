<?php
/**
 * Title: Post excerpt
 * Slug: windmill-theme/hidden-post-excerpt
 * Inserter: no
 *
 * @package WindmillTheme
 */

?>

<?php if ( false !== get_the_ID() && has_excerpt( get_the_ID() ) ) : // Only show custom excerpt. ?>
<!-- wp:post-excerpt /-->
<?php endif ?>
