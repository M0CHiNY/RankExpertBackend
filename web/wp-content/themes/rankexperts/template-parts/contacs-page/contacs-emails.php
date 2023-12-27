<?php if (get_field('our-email__display', 'options')) : ?>
  <div class="contact__email-box">
    <h4 class="contact__caption">
      <?php
      echo get_field('ours-email__title', 'option'); ?>
    </h4>
    <ul class="contact__list">
      <?php
      if (have_rows('ours-emails', 'option')) :
        while (have_rows('ours-emails', 'option')) : the_row();
      ?>
          <li class="contact__list-item">
            <?php
            $email = get_sub_field('ours-emails__fild', 'option');
            $encoded_email = antispambot($email);
            ?>
            <a class="contact__link" href="mailto:<?php echo esc_url($encoded_email); ?>">
              <?php echo esc_html($encoded_email); ?>
            </a>
          </li>
      <?php
        endwhile;
      endif;
      ?>
    </ul>

  </div>

<?php endif; ?>