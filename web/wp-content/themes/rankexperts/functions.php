<?php
/**
 * rankexperts functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rankexperts
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rankexperts_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on rankexperts, use a find and replace
	 * to change 'rankexperts' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('rankexperts', get_template_directory() . '/languages');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header-menu' => esc_html__('Primary', 'rankexperts'),
			'footer-menu-left' => esc_html__('Footer menu left', 'rankexperts'),
			'footer-menu-right' => esc_html__('Footer menu right', 'rankexperts'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

}
add_action('after_setup_theme', 'rankexperts_setup');


/**
 * Implement scripts
 */

require get_template_directory() . '/inc/scripts.php';

// custom post
require get_template_directory() . '/inc/cpt.php';

// add svg script
require get_template_directory() . '/inc/scriptSvg.php';


/**
 * Implement header menu
 */
require get_template_directory() . '/inc/headerWalkerMenu.php';

/**
 * Implement footer menu
 */
require get_template_directory() . '/inc/footerWalkerMenu.php';

/**
 * Implement customizer logos
 */
require get_template_directory() . '/inc/customizer-logos.php';

/**
 * Implement customizer stars
 */
require get_template_directory() . '/inc/stars.php';
/**
 * Implement сustom categories
 */
require get_template_directory() . '/inc/сustom-categories.php';

// br for contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');
