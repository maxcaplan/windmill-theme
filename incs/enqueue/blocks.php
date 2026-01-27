<?php
/**
 * Enqueue block scripts, styles, and functionality
 *
 * @package WindmillTheme
 */

namespace WindmillTheme\Enqueue\Blocks;

/**
 * Enqueue theme block styles hook
 */
function enqueue_theme_block_styles() {
	// Get paths for all block stylesheets.
	$block_css_paths = glob( get_parent_theme_file_path( 'build/css/blocks/{**/*,*}.css' ), GLOB_BRACE );

	if ( false === $block_css_paths ) {
		return;
	}

	// Get meta data for all block stylesheets.
	$block_styles_meta = array_reduce( $block_css_paths, __NAMESPACE__ . '\block_styles_meta_reduce_callback', array() );

	$theme_version = wp_get_theme()->get( 'Version' );

	// Enqueue all block styles.
	foreach ( $block_styles_meta as $block_name => $style_meta ) {
		// Get path to style asset file.
		$style_asset_path = get_parent_theme_file_path( $style_meta['asset'] );
		$has_style_asset  = is_readable( $style_asset_path );

		// Load style asset file if it exists.
		$style_asset_meta = $has_style_asset ? require $style_asset_path : null;

		// Get style file path.
		$style_file_path = get_parent_theme_file_path( $style_meta['src'] );

		// Set style args.
		$style_args = array(
			'handle' => $style_meta['handle'],
			'src'    => get_parent_theme_file_uri( $style_meta['src'] ),
			'path'   => $style_file_path,
			'ver'    => $has_style_asset ? $style_asset_meta['version'] : $theme_version . filemtime( $style_file_path ),
		);

		// Add style dependencies if it has any.
		if ( $has_style_asset ) {
			$style_args['deps'] = $style_asset_meta['dependencies'];
		}

		// Enqueue style.
		wp_enqueue_block_style(
			$block_name,
			$style_args,
		);
	}
}
add_action( 'init', __NAMESPACE__ . '\enqueue_theme_block_styles' );

/**
 * Register theme block styles hook
 */
function register_theme_block_styles() {
}
add_action( 'init', __NAMESPACE__ . '\register_theme_block_styles' );

/**
 * Block style paths array meta data reduction callback
 *
 * @param array  $accumulator Reduce accumulator array.
 * @param string $css_path Path to block css file.
 * @return array Reduce accumulator array.
 */
function block_styles_meta_reduce_callback( $accumulator, $css_path ) {
	// Skip rtl stylesheets.
	if ( substr( $css_path, -strlen( '-rtl.css' ) ) === '-rtl.css' ) {
		return $accumulator;
	}

	// Skip non css files or directories.
	if ( substr( $css_path, -strlen( '.css' ) ) !== '.css' ) {
		return $accumulator;
	}

	// Get block style meta data
	[
		'block_name'   => $block_name,
		'block_handle' => $block_handle,
		'style_path'   => $style_path,
		'asset_path'   => $asset_path
	] = get_block_style_path_meta( $css_path );

	// Add meta data to accumulator
	$accumulator[ $block_name ]['handle'] = $block_handle;
	$accumulator[ $block_name ]['src']    = $style_path;
	$accumulator[ $block_name ]['asset']  = $asset_path;

	return $accumulator;
}

/**
 * Get meta data for an absolute block stylesheet path
 *
 * @param string $path Absolute path for block stylesheet.
 * @return array|null
 */
function get_block_style_path_meta( $path ) {
	// Get path info for path.
	[
		'basename'  => $path_basename,
		'filename'  => $path_filename,
		'extension' => $path_extension,
		'dirname'   => $path_dirname,
	] = pathinfo( $path );

	// Get name of block stylesheets directory.
	$parent_dir      = pathinfo( $path_dirname )['filename'];
	$block_namespace = ( 'blocks' === $parent_dir ) ? null : $parent_dir;

	// Get block name and handle from stylesheet file name and subdir.
	$block_name   = ( null === $block_namespace ) ? $path_filename : $block_namespace . '/' . $path_filename;
	$block_handle = str_replace( '/', '-', $block_name );

	// Get relative path of stylesheet parent dir.
	$rel_parent_path = str_replace( get_template_directory() . '/', '', $path_dirname );

	// Return array of meta data.
	return array(
		'block_name'   => $block_name,
		'block_handle' => 'windmill-theme-' . $block_handle . '-block-style',
		'style_path'   => $rel_parent_path . '/' . $path_basename,
		'asset_path'   => $rel_parent_path . '/' . $path_filename . '.asset.php',
	);
}
