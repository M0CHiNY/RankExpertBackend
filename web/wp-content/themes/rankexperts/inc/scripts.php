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
  if (is_front_page() || is_home()) {
    wp_enqueue_style('rankexperts-swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), null, 'all');
    wp_enqueue_style('rankexperts-home', get_template_directory_uri() . '/assets/css/home-page.css', array(), '1.0', 'all');
    wp_enqueue_script('rankexperts-particles-min', get_template_directory_uri() . '/assets/js/partical/particles.min.js', array(), '1.0.0', true);
    wp_enqueue_script('rankexperts-partical-custom', get_template_directory_uri() . '/assets/js/partical/partical-custom.js', array(), '1.0.0', true);
    wp_enqueue_script('rankexperts-swiper', get_template_directory_uri() . '/assets/js/swiper/swiper.js', array(), '1.0.0', true);
  }
  // single page for blog
  if (is_single() && 'post' == get_post_type()) {
    wp_enqueue_style('rankexperts-swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all');
    wp_enqueue_style('rankexperts-single-blog', get_template_directory_uri() . '/assets/css/single-blog.css', array(), '1.0', 'all');
    wp_enqueue_script('rankexperts-swiper', get_template_directory_uri() . '/assets/js/swiper/swiper.js', array(), '1.0.0', true);
  }
  // single page for service
  if (is_singular('onlinemarketing')) {
    wp_enqueue_style('rankexperts-single-online-marketing', get_template_directory_uri() . '/assets/css/single-service.css', array(), '1.0', 'all');
    wp_enqueue_script('rankexperts-single-online-marketing', get_template_directory_uri() . '/assets/js/single-service.js', array(), '1.0.0', true);
  }

  // showcase page
  if (is_archive()) {
    wp_enqueue_style('rankexperts-showcases', get_template_directory_uri() . '/assets/css/showcases.css', array(), '1.0', 'all');
    wp_enqueue_style('rankexperts-archive-online-marketing', get_template_directory_uri() . '/assets/css/all-services.css', array(), '1.0', 'all');
  }
  
  if (is_home()) {
    wp_enqueue_style('rankexperts-blog', get_template_directory_uri() . '/assets/css/blog.css', array(), '1.0', 'all');
  }
  // showcase page
  if (is_single() && 'showcases' == get_post_type()) {
    wp_enqueue_style('rankexperts-swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all');
    wp_enqueue_style('rankexperts-showcases', get_template_directory_uri() . '/assets/css/single-showcase.css', array(), '1.0', 'all');
    wp_enqueue_script('rankexperts-swiper', get_template_directory_uri() . '/assets/js/swiper/swiper.js', array(), '1.0.0', true);
  }
  // contact page
  if (is_page_template('contacts.php')) {
    wp_enqueue_style('rankexperts-contacts', get_template_directory_uri() . '/assets/css/contact.css', array(), '1.0', 'all');
  }

  // 404 page
  if (is_404()) {
    wp_enqueue_style('rankexperts-404', get_template_directory_uri() . '/assets/css/404.css', array(), '1.0', 'all');
  }
  // Отримання ID головної сторінки
  $home_page_id = get_option('page_on_front');

  // Отримання ID шаблону сторінки
  $page_template_id = get_post_meta($home_page_id, '_wp_page_template', true);

  // Якщо ID шаблону сторінки порожній (користувач не вибрав шаблон), встановлюємо шаблон page.php
  if (empty($page_template_id)) {
    update_post_meta($home_page_id, '_wp_page_template', 'page.php');
    wp_enqueue_style('rankexperts-page', get_template_directory_uri() . '/assets/css/single-blog.css', array(), '1.0', 'all');
  }
  wp_enqueue_style('rankexperts-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'rankexperts_scripts', 100);
