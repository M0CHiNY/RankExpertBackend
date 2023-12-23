<?php



get_header();
?>

<div class="bread-crumb">
  <div class="container">
    <ul class="bread-crumb__box">
      <li class="bread-crumb__iterm"><a class="bread-crumb__link" href="#">Home</a></li>
      <li class="bread-crumb__iterm bread-crumb__iterm--step">SEO for e-commerce</li>
    </ul>
  </div>
</div>

<!-- section service-subhed start -->
<?php get_template_part('template-parts/service-page/service', 'subhead'); ?>
<!-- section service-subhed end -->

<!-- section service-advantage start -->
<?php get_template_part('template-parts/service-page/service', 'advantage'); ?>
<!-- section service-advantage end -->

<!-- section  service-main start -->
<?php get_template_part('template-parts/service-page/service', 'main'); ?>
<!-- section service-main  end -->

<!-- section  service-different start -->
<?php get_template_part('template-parts/service-page/service', 'different'); ?>
<!-- section service-different  end -->

<!-- section  service-steps start -->
<?php get_template_part('template-parts/service-page/service', 'steps'); ?>
<!-- section service-steps  end -->

<!-- section  our-opinion start -->
<?php get_template_part('template-parts/service-page/service', 'our-opinion'); ?>
<!-- section our-opinion  end -->

<!-- section  consultation start -->
<?php get_template_part('template-parts/service-page/service', 'consultation'); ?>
<!-- section consultation  end -->


<!-- section reviews start -->
<?php if (get_field('reviews__display', get_the_ID())) : ?>
  <?php get_template_part('template-parts/reviews'); ?>
<?php endif; ?>
<!-- section reviews end -->


<!-- section faqs start -->
<?php get_template_part('template-parts/service-page/service', 'faqs'); ?>
<!-- section faqs end -->

<?php
get_footer();
