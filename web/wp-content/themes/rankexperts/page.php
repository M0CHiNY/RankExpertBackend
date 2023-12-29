<?php get_header(); ?>


<div class="bread-crumb">
  <div class="container">
    <ul class="bread-crumb__box">
      <li class="bread-crumb__iterm"><a class="bread-crumb__link" href="#">Home</a></li>
      <li class="bread-crumb__iterm"><a class="bread-crumb__link" href="#">blog</a></li>
      <li class="bread-crumb__iterm bread-crumb__iterm--step">Article name</li>
    </ul>
  </div>
</div>

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