<?php get_header(); ?>


<!-- Breadcrumb from yoast plugin start-->
<?php get_template_part('template-parts/breadcrumbs'); ?>
<!-- Breadcrumb from yoast plugin end-->

<?php
while (have_posts()) :
  the_post();
?>
  <section class="search-info">
    <div class="container">
      <h1 class="ruls__title title"><?php the_title(); ?></h1>
      <div class="content-container">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
<?php
endwhile;
?>



<?php get_footer(); ?>