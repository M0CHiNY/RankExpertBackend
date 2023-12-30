<?php

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/* public garbage removal
---------------------------------------------------------- */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
add_filter('xmlrpc_enabled', '__return_false');

//switch off Emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

function rankexperts_setup()
{
	load_theme_textdomain('rankexperts', get_template_directory() . '/languages');

	add_theme_support('title-tag');

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

//remove <br> for contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');


// Setting the number of views
require get_template_directory() . '/inc/views.php';
