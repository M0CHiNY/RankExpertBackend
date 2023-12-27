<?php if (get_field('service-steps__display', get_the_ID())) :
  if (get_field('service-steps__title', get_the_ID()) || get_sub_field('service_steps__caption', get_the_ID()) || get_sub_field('service_steps__descr', get_the_ID())) :
?>
  <section class="service-steps">
    <div class="container">
      <h2 class="service-steps__title title">
        <?php echo get_field('service-steps__title', get_the_ID()); ?>
      </h2>
      <div class="service-steps__wrap">
        <ul class="service-steps__list" id="service-steps-list">
          <?php
          if (have_rows('service_steps__box')) :
            while (have_rows('service_steps__box')) : the_row();
          ?>
              <li class="service-steps__item">
                <h3 class="service-steps__caption">
                  <?php echo get_sub_field('service_steps__caption', get_the_ID()); ?>
                </h3>
                <p class="service-steps__text">
                  <?php echo get_sub_field('service_steps__descr', get_the_ID()); ?>
                </p>
              </li>
          <?php
            endwhile;
          endif;
          ?>
        </ul>
      </div>
    </div>
  </section>
<?php 
  endif;
  endif;
?>