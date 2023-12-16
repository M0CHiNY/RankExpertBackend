<?php $postArgs = [
  'post_type' => 'rersons',
  'posts_per_page' => -1,
];

$custom_query = new WP_Query($postArgs);

if ($custom_query->have_posts()):
  while ($custom_query->have_posts()):
    $custom_query->the_post();
    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    $image_attachment_id = attachment_url_to_postid($image_url);
    $image_alt = get_post_meta($image_attachment_id, '_wp_attachment_image_alt', true);
    ?>

    <div class="swiper-slide">
      <div class="team-swiper__slide">
        <?php if (!empty($image_url)): ?>
          <img class="team-swiper__img" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" />
        <?php endif; ?>
        <div class="team-swiper__specialization">
          <?php the_title(); ?>
        </div>
        <div class="team-swiper__name">
          <?php echo get_field('person__position', get_the_ID()) ?>
        </div>
        <div class="team-swiper__about">
          <?php echo get_field('person__description', get_the_ID()) ?>
        </div>
        <?php if (!empty($email = get_field('person__email', get_the_ID()))): ?>
        <a class="team-swiper__email" href="mailto:<?php echo $email; ?>">
          <?php echo $email; ?>
        </a>
         <?php endif; ?>
      </div>
    </div>
    <?php
  endwhile;
  wp_reset_postdata();
else:

  echo 'No posts found.';
endif;
?>