<?php if (get_field('service-advantage__display', get_the_ID())) : ?>
  <section class="service-advantage">
    <div class="container">
      <h2 class="service-advantage__title title"><?php echo get_field('service-advantage__title', get_the_ID()); ?></h2>
      <ul class="service-advantage__list">
        <?php
        if (have_rows('service_advantage__list')) :
          while (have_rows('service_advantage__list')) : the_row();
        ?>
            <li class="service-advantage__item"><?php echo get_sub_field('service-advantage__text', get_the_ID()); ?></li>
        <?php
          endwhile;
        endif;
        ?>
      </ul>
    </div>
  </section>
<?php endif; ?>