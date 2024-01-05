<?php get_header(); ?>


  <!-- Breadcrumb from yoast plugin start-->
  <?php get_template_part('template-parts/breadcrumbs'); ?>
  <!-- Breadcrumb from yoast plugin end-->

  <?php
  while (have_posts()) :
    the_post();
  ?>
    <section class="single-blog">
      <div class="container">
        <div class="content-container--page">
          <h1 class="title" style="margin-bottom: 30px;"><?php the_title(); ?></h1>
          <div class="content-container">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>
  <?php
  endwhile;
  ?>



  <?php get_footer(); ?>