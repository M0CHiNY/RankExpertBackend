<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rankexperts
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="icon" href="favicon.ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="container-big">
    <header class="header">
      <div class="container">
        <div class="header__inner">

          <!-- logo start -->
          <?php $header_logo = get_theme_mod('header_logo');
          $header_attachment_id = attachment_url_to_postid($header_logo);
          $header_logo_alt = get_post_meta($header_attachment_id, '_wp_attachment_image_alt', true);
          ?>

          <div class="logo-box">
            <?php if ($header_logo) : ?>
              <a href="<?php echo home_url(); ?>" class="logo-box__link">
                <img class="logo-box__img" src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr($header_logo_alt) ?>">
              </a>
            <?php endif; ?>
          </div>
          <!-- logo end -->

          <div class="header__navigation">
            <!-- navigation menu start-->
            <div class="mob-nav" id="mob-nav">
              <div data-ui-dialog-backdrop class="mob-nav-backdrop"></div>
              <div data-ui-dialog-content class="mob-nav-content">
                <div class="mob-nav-content__inner">

                  <!-- logo start mobile-->
                  <div class="logo-box logo-box--mobile">
                    <a href="<?php echo home_url(); ?>" class="logo-box__link">
                      <img class="logo-box__img" src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr($header_logo_alt) ?>">
                    </a>
                  </div>
                  <!-- logo end mobile-->

                  <button type="button" aria-label="Close" class="mob-nav-close" data-ui-dismiss>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                      <path d="M35.1562 16L14.8438 36.3125M14.8438 16L35.1562 36.3125" stroke="#201F1D" stroke-width="4.6875" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </button>
                </div>
                <nav class="nav">
                  <?php
                  // display header meny

                  wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_class' => 'nav-menu',
                    'container' => 'div',
                    'depth' => 3,
                    'walker' => new Custom_Walker_Nav_Menu()
                  ));
                  ?>
                </nav>
                <div class="lang-switcher-mobile">
                  <ul class="lang-switcher-mobile__list">
                    <li class="lang-switcher-mobile__item current">
                      <a class="lang-switcher-mobile__link " href="">
                        Eng
                      </a>
                    </li>
                    <li class="lang-switcher-mobile__item ">
                      <a class="lang-switcher-mobile__link" href="">
                        Ger
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- navigation menu end-->
            <!-- mobile btn start-->
            <button type="button" aria-label="Navigation" class="mob-nav-toggler" data-ui-toggle="mob-nav">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.33333 37.5H41.6667C42.8125 37.5 43.75 36.5625 43.75 35.4167C43.75 34.2708 42.8125 33.3333 41.6667 33.3333H8.33333C7.1875 33.3333 6.25 34.2708 6.25 35.4167C6.25 36.5625 7.1875 37.5 8.33333 37.5ZM8.33333 27.0833H41.6667C42.8125 27.0833 43.75 26.1458 43.75 25C43.75 23.8542 42.8125 22.9167 41.6667 22.9167H8.33333C7.1875 22.9167 6.25 23.8542 6.25 25C6.25 26.1458 7.1875 27.0833 8.33333 27.0833ZM6.25 14.5833C6.25 15.7292 7.1875 16.6667 8.33333 16.6667H41.6667C42.8125 16.6667 43.75 15.7292 43.75 14.5833C43.75 13.4375 42.8125 12.5 41.6667 12.5H8.33333C7.1875 12.5 6.25 13.4375 6.25 14.5833Z" fill="#201F1D" />
              </svg>
            </button>
            <!-- mobile btn end-->
          </div>
          <div class="header__box">
            <?php if (get_field('button__header', 'options')) : ?>
              <button class="btn btn-modal" type="button" data-ui-toggle="my-dialog">
                <?php echo get_field('button__header', 'option'); ?>
              </button>
            <?php endif; ?>
            <ul class="lang-switcher">
              <li class="lang-switcher__item ">
                <a href="#" class="lang-switcher-link current">
                  Eng
                </a>
              </li>
              <li class="lang-switcher__item">
                <a href="#" class="lang-switcher-link">
                  Ger
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <main class="main">
      <a class="up-arrow" href="#" id="up">
        <p>&#8593;</p>
      </a>