<?php

/**
 * Template name: Template for Showcases
 */

get_header();
?>
<!-- Breadcrumb from yoast plugin start-->
<?php get_template_part('template-parts/breadcrumbs'); ?>
<!-- Breadcrumb from yoast plugin end-->


<section class="showcases">
  <div class="container">
    <h1 class="showcases__title title">
      <?php echo get_field('showcases-title-page', 'option'); ?>
    </h1>
    <div class="showcases__descr">
      <?php echo get_field('showcases-description-page', 'option'); ?>
    </div>
    <!-- showcase__tempalte start-->
    <div class="showcases__wrap">
      <?php get_template_part('template-parts/content-showcases'); ?>
    </div>
    <!-- showcase__tempalte end-->
  </div>
</section>

<?php
get_footer();
