
<?php if (get_field('optimization_display', get_the_ID())): ?>
  <?php if (!empty(get_field('optimization_title')) || !empty(get_field('optimization_descr'))): ?>
    <section class="search-info">
      <div class="container">
        <div class="search-info__wrap">
          <?php if (!empty(get_field('optimization_img'))): ?>
            <div class="search-info__img">
              <?php $image = get_field('optimization_img');
              if ($image):
                // Image variables.
                $alt = $image['alt'];
                ?>
                <picture>
                  <source media="(min-width:767px)" srcset="<?php echo $image['sizes']['large'] ?>">
                  <img width="375px" height="375px" loading="lazy" src="<?php echo $image['sizes']['thumbnail'] ?>" alt="<?php echo $alt; ?>" >
                </picture>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <div class="search-info__short-text">
            <h2 class="search-info__title title">
              <?php echo get_field('optimization_title', get_the_ID()); ?>
            </h2>
            <div class="search-info__descr">
              <?php echo get_field('optimization_descr', get_the_ID()); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>