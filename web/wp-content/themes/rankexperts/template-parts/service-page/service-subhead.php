<?php if (get_field('subhead__display', get_the_ID())) : ?>
  <section class="service-subhead">
    <div class="container">
      <div class="service-subhead__wrap">
        <div class="service-subhead__box">
          <h2 class="service-subhead__title title"><?php the_title(); ?></h2>
          <p class="service-subhead__text">
            <?php echo get_field('subhead__descroption', get_the_ID()); ?>
          </p>
          <button class="service-subhead__button btn" type="button" data-ui-toggle="my-dialog">
            <?php echo get_field('subhead__name_button', get_the_ID()); ?>
          </button>
        </div>
        <?php $image = get_field('subhead__image');
        if ($image) :
          // Image variables.
          $url = $image['sizes']['medium_large'];
          $alt = $image['alt'];
        ?>
          <img class="service-subhead__img" src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>