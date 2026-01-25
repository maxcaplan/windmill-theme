<?php
/**
 * Enqueue block scripts, styles, and functionality
 *
 * @package WindmillTheme
 */

namespace WindmillTheme\Enqueue\Blocks;

/**
 * Enqueue styles for blocks with corresponding stylesheet in css folder
 */
function enqueue_block_styles() {
	// TODO: Implement getting all stylesheets for blocks.
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\enqueue_block_styles' );
