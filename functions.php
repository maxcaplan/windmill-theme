<?php
/**
 * Windmill Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WindmillTheme
 * @author Max Caplan
 * @license GNU General Public License v3
 */

namespace WindmillTheme;

// Setup theme.
require_once get_template_directory() . '/incs/setup.php';

// Enqueue theme scripts and files.
require_once get_template_directory() . '/incs/enqueue/index.php';
