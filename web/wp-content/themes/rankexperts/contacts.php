<?php

/**
 * Template name: Contacs page
 */

get_header();
?>

<div class="bread-crumb">
  <div class="container">
    <ul class="bread-crumb__box">
      <li class="bread-crumb__iterm">
        <a class="bread-crumb__link" href="#">Home</a>
      </li>
      <li class="bread-crumb__iterm bread-crumb__iterm--step">
        Contact
      </li>
    </ul>
  </div>
</div>

<section class="contact">
  <div class="container">
    <div class="contact__wrap">
      <div class="contact__info">
        <div class="contact__inner-head">
          <h1 class="contact__title title"><?php echo get_field('contacts__title', get_the_ID()); ?></h1>
          <h3 class="contact__subtitle"><?php echo get_field('contacts__subtitle', get_the_ID()); ?></h3>
        </div>
        <div class="contact__inner-address">
          <!-- block phones start -->
          <?php get_template_part('template-parts/contacs-page/contacs', 'phones'); ?>
          <!-- block phones end -->

          <!-- block emails start -->
          <?php get_template_part('template-parts/contacs-page/contacs', 'emails'); ?>
          <!-- block emails end -->

          <!-- block socials start -->
          <?php get_template_part('template-parts/contacs-page/contacs', 'socials'); ?>
          <!-- block socials end -->
        </div>
      </div>
      <div class="contact__form">
        <?php echo do_shortcode(get_field('contacs-form__do_shortcode', 'option')); ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
