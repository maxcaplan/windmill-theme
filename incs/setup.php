<?php
/**
 * Setup theme defaults and register support for theme features
 *
 * @package WindmillTheme
 */

namespace WindmillTheme\Setup;

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

	// Remove core block pattern library.
	remove_theme_support( 'core-block-patterns' );
}

/**
 * Theme setup hook
 */
function setup_theme() {
	// Make theme available for translations.
	// Translations can be filled in the languages directory.
	load_textdomain( 'windmill-theme', get_template_directory() . '/languages' );

	// Set themes supported features.
	setup_theme_supports();

	// Add editor styles.
	add_editor_style( 'assets/css/editor-styles.css' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup_theme' );
