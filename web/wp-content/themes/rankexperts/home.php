<?php

/**
 * Template name: Home page
 */

get_header();
?>
<!-- section with subhead start -->
<?php get_template_part('template-parts/home-page/home', 'subhead'); ?>
<!-- section with subhead end -->

<!-- section with services start -->
<?php get_template_part('template-parts/home-page/home', 'services'); ?>
<!-- section with services end -->

<!-- section with searchInfo start -->
<?php get_template_part('template-parts/home-page/home', 'searchInfo'); ?>
<!-- section with searchInfo end -->

<!-- section with action start -->
<?php get_template_part('template-parts/home-page/home', 'action'); ?>
<!-- section with action end -->

<!-- section with steps start -->
<?php get_template_part('template-parts/home-page/home', 'steps'); ?>
<!-- section with steps end -->

<!-- section with reviews start -->
<?php if (get_field('reviews__display', get_the_ID())): ?>
  <?php get_template_part('template-parts/reviews'); ?>
<?php endif; ?>
<!-- section with reviews end -->

<!-- section with showcase start -->
<?php get_template_part('template-parts/home-page/home', 'portfolio'); ?>
<!-- section with showcase end -->

<!-- section with discount start -->
<?php get_template_part('template-parts/home-page/home', 'discount'); ?>
<!-- section with discount end -->

<!-- section with team start -->
<?php get_template_part('template-parts/home-page/home', 'team'); ?>
<!-- section with team end -->


<!-- section with faqs start -->
<?php get_template_part('template-parts/home-page/home', 'faqs'); ?>
<!-- section with faqs end -->


<?php
get_footer();
