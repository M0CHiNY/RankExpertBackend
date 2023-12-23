<?php
$postArgsReviews = [
  'post_type' => 'review',
  'posts_per_page' => 6,
];

$Reviews_query = new WP_Query($postArgsReviews);

// mod padding-bottom for single-services
if (is_singular('services')) :
  // add class reviews--size
  $section_class = 'reviews reviews--size';
else :
  $section_class = 'reviews';
endif;
?>

<section class="<?php echo esc_attr($section_class); ?>">
  <div class="container">
    <h2 class="reviews__title title">Our clients trust us</h2>
    <div class="reviews__wrap">
      <?php
      if ($Reviews_query->have_posts()) :
        while ($Reviews_query->have_posts()) :
          $Reviews_query->the_post();
      ?>
          <article class="reviews__card">
            <div class="reviews__head">
              <?php
              if (!empty(get_field('reviews__logo'))) {
                $image = get_field('reviews__logo')['sizes']['thumbnail'];
                $alt = get_field('reviews__logo')['alt'];
              } else {
                $image = get_template_directory_uri() . '/images-custom/no-image.svg';
                $alt = 'No image';
              }
              ?>
              <img class="reviews__img" src="<?php echo $image; ?>" alt="<?php echo $alt; ?>" />
              <div class="reviews__head-box">
                <h3 class="reviews__name">
                  <?php the_title(); ?>
                </h3>
                <?php

                $starCount = get_field('reviews__stars', get_the_ID());
                if ($starCount) :
                ?>
                  <div class="reviews__stars-box">
                    <?php review_stars($starCount); ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="reviews__text">
              <?php echo get_field('reviews__text', get_the_ID()) ?>
            </div>
          </article>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo 'No posts found.';
      endif;
      ?>
    </div>
  </div>
</section>