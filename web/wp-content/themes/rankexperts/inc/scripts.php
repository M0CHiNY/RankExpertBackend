<?php

/**
 * Enqueue scripts and styles.
 */
function rankexperts_scripts()
{
    //scripts global
    wp_enqueue_style('rankexperts-global', get_template_directory_uri() . '/assets/css/global.css', array(), '1.0', 'all');
    wp_enqueue_script('rankexperts-jolty-libs', get_template_directory_uri() . '/assets/js/joltyComponents/jolty-libs.js', array(), '1.0.0', true);
    wp_enqueue_script('rankexperts-jolty-main', get_template_directory_uri() . '/assets/js/joltyComponents/jolty-main.js', array(), '1.0.0', true);
    wp_enqueue_script('rankexperts-scroll', get_template_directory_uri() . '/assets/js/scroll.js', array(), '1.0.0', true);
    wp_enqueue_script('rankexperts-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true);

    // home page scritps
    if (is_page_template('home.php')) {
        wp_enqueue_style('rankexperts-swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all');
        wp_enqueue_style('rankexperts-home', get_template_directory_uri() . '/assets/css/home-page.css', array(), '1.0', 'all');
        wp_enqueue_script('rankexperts-particles-min', get_template_directory_uri() . '/assets/js/partical/particles.min.js', array(), '1.0.0', true);
        wp_enqueue_script('rankexperts-partical-custom', get_template_directory_uri() . '/assets/js/partical/partical-custom.js', array(), '1.0.0', true);
        wp_enqueue_script('rankexperts-swiper', get_template_directory_uri() . '/assets/js/swiper/swiper.js', array(), '1.0.0', true);
    }
    // single page for blog
    if (is_single()) {
        wp_enqueue_style('rankexperts-swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all');
        wp_enqueue_style('rankexperts-single-blog', get_template_directory_uri() . '/assets/css/single-blog.css', array(), '1.0', 'all');
        wp_enqueue_script('rankexperts-swiper', get_template_directory_uri() . '/assets/js/swiper/swiper.js', array(), '1.0.0', true);
    }
    // single page for service
    if (is_singular('service')) {
        wp_enqueue_style('rankexperts-single-service', get_template_directory_uri() . '/assets/css/single-service.css', array(), '1.0', 'all');
        wp_enqueue_script('rankexperts-single-service', get_template_directory_uri() . '/assets/js/single-service.js', array(), '1.0.0', true);
    }

    // showcase page
    if (is_page_template('template-showcases.php')) {
        wp_enqueue_style('rankexperts-showcases', get_template_directory_uri() . '/assets/css/showcases.css', array(), '1.0', 'all');
    }
    // contact page
    if (is_page_template('contacts.php')) {
        wp_enqueue_style('rankexperts-contacts', get_template_directory_uri() . '/assets/css/contact.css', array(), '1.0', 'all');
    }
    // 404 page
    if (is_404()) {
        wp_enqueue_style('rankexperts-404', get_template_directory_uri() . '/assets/css/404.css', array(), '1.0', 'all');
    }
    wp_enqueue_style('rankexperts-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'rankexperts_scripts');

