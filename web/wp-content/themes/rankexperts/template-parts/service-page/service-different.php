<?php
if (get_field('service-different__display', get_the_ID())) :
if (get_field('service-different__title', get_the_ID()) || get_sub_field('service-different__other-text', get_the_ID()) || get_sub_field('service-different__our-text', get_the_ID())) :
?>
  <section class="service-different">
    <div class="container">
      <h2 class="service-different__title title"><?php echo get_field('service-different__title', get_the_ID()); ?></h2>
      <div class="service-different__box">
          <div class="service-different__other-box">
            <h3 class="service-different__other-title">
              <?php echo get_field('service-different__title-other', get_the_ID()); ?>
            </h3>
            <ul class="service-different__other-list">

              <?php
              if (have_rows('service_different__other')) :
                while (have_rows('service_different__other')) : the_row();
              ?>
                  <li class="service-different__other-item">
                    <?php echo get_sub_field('service-different__other-text', get_the_ID()); ?>
                  </li>
              <?php
                endwhile;
              endif;
              ?>
            </ul>
          </div>
          <div class="service-different__good-box">
            <h3 class="service-different__good-title">
              <?php echo get_field('service_different__title-our', get_the_ID()); ?>
            </h3>
            <ul class="service-different__good-list">
              <?php
              if (have_rows('service_different__our')) :
                while (have_rows('service_different__our')) : the_row();
              ?>
                  <li class="service-different__good-item">
                    <?php echo get_sub_field('service-different__our-text', get_the_ID()); ?>
                  </li>
              <?php
                endwhile;
              endif;
              ?>
            </ul>
          </div>
      </div>
    </div>
  </section>
<?php
endif;
endif;
?>