<?php

/**
 * Template name: Contacts template
 */

get_header();
?>

<!-- Breadcrumb from yoast plugin start-->
<?php get_template_part('template-parts/breadcrumbs'); ?>
<!-- Breadcrumb from yoast plugin end-->

<?php
  if (get_field('contacs__display', get_the_ID())) :
  if (get_field('form-contacs__display', 'options') || get_field('our-email__display', 'options') || get_field('our-phones__display', 'options') || get_field('our-socials__display', 'options') ) :
?>
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

          <!-- block form start -->
          <?php get_template_part('template-parts/contacs-page/contacs', 'form'); ?>
          <!-- block form end -->
        </div>
      </div>
    </section>
<?php
  endif;
  endif;
?>

<?php
get_footer();
