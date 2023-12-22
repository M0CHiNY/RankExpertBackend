<?php

/**
 * Template name: Showcases template
 */

get_header();
?>

<section class="showcases">
  <div class="container">
    <h1 class="showcases__title title">
      <?php echo get_the_title(); ?>
    </h1>
    <div class="showcases__descr">
      <?php echo get_the_content(); ?>
    </div>
    <!-- showcase__tempalte start-->
    <div class="showcases__wrap">
      <?php get_template_part('template-parts/content-showcases'); ?>
    </div>
    <!-- showcase__tempalte end-->
  </div>

  <div class="pagination">
    <div class="container">
      <ul class="pagination__items">
        <div class="pagination__item-prev"><a href="#" class="pagination__item-prev-link"><svg width="50" height="50"
              viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M25.6042 18.1459L20.2084 23.5417C20.0152 23.7344 19.862 23.9634 19.7575 24.2154C19.6529 24.4674 19.5991 24.7376 19.5991 25.0104C19.5991 25.2833 19.6529 25.5535 19.7575 25.8055C19.862 26.0575 20.0152 26.2865 20.2084 26.4792L25.6042 31.875C26.9167 33.1875 29.1667 32.25 29.1667 30.3959V19.6042C29.1667 17.75 26.9167 16.8334 25.6042 18.1459Z"
                fill="#201F1D" />
            </svg></a></div>
        <li class="pagination__item current"><a class="pagination__item-link" href="#">1</a></li>
        <li class="pagination__item"><a class="pagination__item-link" href="#">2</a></li>
        <li class="pagination__item"><a class="pagination__item-link" href="#">3</a></li>
        <div class="pagination__item-next"><a href="#" class="pagination__item-prev-next"><svg width="50" height="50"
              viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M24.3958 18.1459L29.7916 23.5417C29.9848 23.7344 30.138 23.9634 30.2425 24.2154C30.3471 24.4674 30.4009 24.7376 30.4009 25.0104C30.4009 25.2833 30.3471 25.5535 30.2425 25.8055C30.138 26.0575 29.9848 26.2865 29.7916 26.4792L24.3958 31.875C23.0833 33.1875 20.8333 32.25 20.8333 30.3959V19.6042C20.8333 17.75 23.0833 16.8334 24.3958 18.1459Z"
                fill="#201F1D" />
            </svg></a></div>
      </ul>
    </div>
  </div>
</section>

<?php
get_footer();
