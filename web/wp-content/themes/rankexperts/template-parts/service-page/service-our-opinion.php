<?php if (get_field('our-opinion__display', get_the_ID())) :
  if (get_field('our-opinion__title', get_the_ID()) || get_sub_field('our-opinion__descr', get_the_ID()) || get_sub_field('our-opinion__author', get_the_ID())) :
  ?>
  <section class="our-opinion">
    <div class="container">
      <h2 class="our-opinion__title title"><?php echo get_field('our-opinion__title', get_the_ID()); ?></h2>
      <div class="our-opinion__wrap">
        <?php $image = get_field('our-opinion__image');
        if ($image) :
          // Image variables.
          $url = $image['sizes']['medium_large'];
          $alt = $image['alt'];
        ?>
          <img class="our-opinion__img" src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />
        <?php endif; ?>
        <blockquote class="our-opinion__quote">
          <h3 class="our-opinion__quote-caption"><?php echo get_field('our-opinion__quote-title', get_the_ID()); ?></h3>
          <p class="our-opinion__text">
            <?php echo get_field('our-opinion__descr', get_the_ID()); ?>
          </p>
          <div class="our-opinion__bottom-info">
            <cite class="our-opinion__quote-author">
              <strong><?php echo get_field('our-opinion__author', get_the_ID()); ?> /</strong>
              <?php echo get_field('our-opinion__profession', get_the_ID()); ?>
            </cite>
            <?php $imageLogo = get_field('our-opinion__image-logo');
            if ($imageLogo) :
              // Image variables.
              $url = $imageLogo['sizes']['thumbnail'];
              $alt = $imageLogo['alt'];
            ?>
              <img class="our-opinion__logo" src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />
            <?php endif; ?>
          </div>
        </blockquote>
      </div>
    </div>
  </section>
<?php 
endif; 
endif; 
?>