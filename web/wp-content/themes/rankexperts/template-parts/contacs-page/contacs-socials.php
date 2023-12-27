<?php if (get_field('our-socials__display', 'options')) : ?>
  <div class="contact__social-box">
    <h4 class="contact__caption"><?php echo get_field('contacs__title-social', 'option'); ?></h4>
    <ul class="contact__list">    
      <?php
      if ($socials = get_field('our-social', 'option')) :
        foreach ($socials as $index => $social) :
      ?>
          <li class="contact__list-item">
            <a class="contact__link" href="<?php echo esc_url($social['our-social__link']); ?>">
              <?php echo $social['our-social__icons']; ?>
            </a>
          </li>
        <?php endforeach; ?>

        <style>
          <?php foreach ($socials as $index => $social) : ?>.contact__list-item:nth-child(<?php echo $index + 1; ?>) .contact__link:hover svg path {
            fill: <?php echo $social['change-color']; ?>;
          }
          <?php endforeach; ?>
        </style>

      <?php endif; ?>
    </ul>

  </div>

<?php endif; ?>