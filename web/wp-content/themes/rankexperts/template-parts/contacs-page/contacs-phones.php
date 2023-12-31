<?php 
  if (get_field('our-phones__display', 'options')) : 
  if (get_field('contacts__title-phone', 'option')) : 
?>
  <div class="contact__phone-box">
    <h3 class="contact__caption">
      <?php echo get_field('contacts__title-phone', 'option'); ?>
    </h3>
    <ul class="contact__list">
      <?php
      if (have_rows('contacts__numbers', 'option')) :
        while (have_rows('contacts__numbers', 'option')) : the_row();
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
<?php 
  endif; 
  endif; 
?>