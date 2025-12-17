<?php
/**
 * Enqueue theme scripts and styles
 *
 * @package windmill-theme
 */

namespace WindmillTheme;

/**
 * Enqueue theme scripts hook
 */
function enqueue_theme_scripts() {
}

// Attach enqueue theme scripts hook.
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . "\\enqueue_theme_scripts" );

/**
 * Enqueue theme styles hook
 */
function enqueue_theme_styles() {
	wp_enqueue_style(
		'windmill-theme-style',
		get_parent_theme_file_uri( 'assets/css/index.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}

// Attach enqueue theme styles hook.
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . "\\enqueue_theme_styles" );
