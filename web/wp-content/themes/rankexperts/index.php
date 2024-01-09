<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rankexperts
 */

get_header();
?>


<?php if (is_front_page() && is_home()) {


  // <!-- section with subhead start -->
  get_template_part('template-parts/home-page/home', 'subhead');
  // <!-- section with subhead end -->

  // <!-- section with services start -->
  get_template_part('template-parts/home-page/home', 'services');
  // <!-- section with services end -->

  // <!-- section with searchInfo start -->
  get_template_part('template-parts/home-page/home', 'searchInfo');
  // <!-- section with searchInfo end -->

  // <!-- section with action start -->
  get_template_part('template-parts/home-page/home', 'action');
  // <!-- section with action end -->

  // <!-- section with steps start -->
  get_template_part('template-parts/home-page/home', 'steps');
  // <!-- section with steps end -->


  if (get_field('reviews__display', get_the_ID())) {
    get_template_part('template-parts/reviews');
  }
  // <!-- section with reviews end -->

  // <!-- section with showcase start -->
  get_template_part('template-parts/home-page/home', 'portfolio');
  // <!-- section with showcase end -->

  // <!-- section with discount start -->
  get_template_part('template-parts/home-page/home', 'discount');
  // <!-- section with discount end -->

  // <!-- section with team start -->
  get_template_part('template-parts/home-page/home', 'team');
  // <!-- section with team end -->


  // <!-- section with faqs start -->
  get_template_part('template-parts/home-page/home', 'faqs');
  // <!-- section with faqs end -->
} elseif (is_home()) {
  get_template_part('template-parts/blog/blog');
}
get_footer();
