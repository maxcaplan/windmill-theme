<?php
/**
 * Enqueue theme scripts and styles
 *
 * @package WindmillTheme
 */

namespace WindmillTheme\Enqueue;

require_once get_template_directory() . '/incs/enqueue/blocks.php';

/**
 * Enqueue theme scripts hook
 */
function enqueue_theme_scripts() {
	// Get script asset meta data.
	$asset_meta = include get_template_directory() . '/build/js/main.asset.php';

	wp_enqueue_script(
		'windmill-theme-script',
		get_parent_theme_file_uri( 'build/js/main.js' ),
		$asset_meta['dependencies'],
		$asset_meta['version'],
		true
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_theme_scripts' );

/**
 * Enqueue theme styles hook
 */
function enqueue_theme_styles() {
	// Get style asset meta data.
	$asset_meta = include get_template_directory() . '/build/css/main.asset.php';

	wp_enqueue_style(
		'windmill-theme-style',
		get_parent_theme_file_uri( 'build/css/main.css' ),
		$asset_meta['dependencies'],
		$asset_meta['version']
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_theme_styles' );

/**
 * Enqueue editor scripts hook
 */
function enqueue_editor_scripts() {
	// Get script asset meta data.
	$asset_meta = include get_template_directory() . '/build/js/editor.asset.php';

	wp_enqueue_script(
		'windmill-theme-editor-script',
		get_parent_theme_file_uri( 'build/js/editor.js' ),
		$asset_meta['dependencies'],
		$asset_meta['version'],
		true
	);
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_editor_scripts' );

/**
 * Enqueue editor styles hook
 */
function enqueue_editor_content_styles() {
	if ( ! is_admin() ) {
		return;
	}

	$asset_meta = include get_template_directory() . '/build/css/editor.asset.php';

	wp_enqueue_style(
		'windmill-theme-editor-content-style',
		get_parent_theme_file_uri( 'build/css/editor.css' ),
		$asset_meta['dependencies'],
		$asset_meta['version']
	);
}
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\enqueue_editor_content_styles' );
