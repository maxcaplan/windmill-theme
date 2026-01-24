<?php
/**
 * Setup theme defaults and register support for WordPress theme features
 *
 * @package windmill-theme
 */

namespace WindmillTheme;

require __DIR__ . '/scripts.php';

/**
 * Set supported features of the theme
 */
function setup_theme_supports() {
	// Allow wide alignment for blocks.
	add_theme_support( 'align-wide' );

	// Allow theme styles to be loaded in the editor.
	add_theme_support( 'editor-styles' );

	// Set supported post formats.
	add_theme_support(
		'post-formats',
		array(
			'aside',
			'audio',
			'chat',
			'gallery',
			'image',
			'link',
			'quote',
			'status',
			'video',
		)
	);
}

/**
 * Register block styles for the theme
 */
function register_theme_block_styles() {
	register_block_style(
		'core/list',
		array(
			'name'  => 'checkmark-list',
			'label' => __( 'Checkmark', 'windmill-theme' ),
		)
	);
}

/**
 * Theme setup hook
 */
function setup() {
	// Set themes supported features.
	setup_theme_supports();

	// Add editor styles.
	add_editor_style( 'assets/css/editor-styles.css' );
}

/**
 * Theme init hook
 */
function init() {
	register_theme_block_styles();
}

// Attach theme setup hook.
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );

// Attach theme init hook.
add_action( 'init', __NAMESPACE__ . '\init' );
