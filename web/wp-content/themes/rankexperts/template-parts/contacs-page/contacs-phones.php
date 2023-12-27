<?php if (get_field('our-phones__display', 'options')) : ?>
  <div class="contact__phone-box">
    <h4 class="contact__caption">
      <?php echo get_field('contacts__title-phone', 'option'); ?>
    </h4>
    <ul class="contact__list">
      <?php
      if (have_rows('contacts__numbers')) :
        while (have_rows('contacts__numbers')) : the_row();
      ?>
          <li class="contact__list-item">
            <a class="contact__link" href="tel:+<?php echo esc_html(get_sub_field('contacts__phone', 'option')); ?>">
              +<?php echo esc_html(get_sub_field('contacts__phone', 'option')); ?>
            </a>
          </li>
      <?php
        endwhile;
      endif;
      ?>
    </ul>
  </div>
<?php endif; ?>