<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rankexperts
 */

?>


<!-- block modal-form start -->
<?php get_template_part('template-parts/modal-form'); ?>
<!-- block modal-form end -->

</main>
<footer class="footer">
  <div class="container">
    <div class="footer__wrap">
      <div class="footer__logo-wrap">
        <!-- logo start -->
        <?php $footer_logo = get_theme_mod('footer_logo');
        $footer_attachment_id = attachment_url_to_postid($footer_logo);
        $footer_logo_alt = get_post_meta($footer_attachment_id, '_wp_attachment_image_alt', true);
        ?>

        <div class="logo-box">
          <?php if ($footer_logo) : ?>
            <a href="<?php echo home_url(); ?>" class="footer__logo">
              <img class="footer__logo-img" src="<?php echo esc_url($footer_logo); ?>" alt="<?php echo esc_attr($footer_logo_alt) ?>">
            </a>
          <?php endif; ?>
        </div>
        <!-- logo end -->
      </div>
      <div class="footer__wrap-menu">
        <div class="footer__inner-menu">

          <!-- footer left menu start -->
          <?php
          wp_nav_menu(array(
            'theme_location' => 'footer-menu-left',
            'menu_class' => 'footer__menu',
            'container' => '',
            'depth' => 1,
            'walker' => new Footer_Walker_Nav_Menu(),
          )); ?>
          <!-- footer left menu end-->

          <!-- footer right menu start -->
          <?php
          wp_nav_menu(array(
            'theme_location' => 'footer-menu-right',
            'menu_class' => 'footer__menu',
            'container' => '',
            'depth' => 1,
            'walker' => new Footer_Walker_Nav_Menu(),
          )); ?>
          <!-- footer right menu end-->

        </div>
        <?php
        if (get_field('footer__display-social', 'options')) :
          if (get_field('footer__social-icons', 'options')) :
        ?>
            <div class="footer__social">
              <ul class="footer__link-list">
                <?php
                if ($socials = get_field('footer__social-icons', 'option')) :
                  foreach ($socials as $index => $social) :
                ?>
                    <li class="footer__link-item">
                      <a class="footer__link-icon" href="<?php echo esc_url($social['footer__social-link']); ?>">
                        <?php echo $social['footer__social-icon']; ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                  <style>
                    <?php foreach ($socials as $index => $social) : ?>.footer__link-item:nth-child(<?php echo $index + 1; ?>) .footer__link-icon:hover svg path {
                      fill: <?php echo $social['footer__color-icon']; ?>;
                    }

                    <?php endforeach; ?>
                  </style>

                <?php endif; ?>

              </ul>
              <?php if (get_field('button__footer', 'options')) : ?>
              <button class="footer__btn btn" type="button" data-ui-toggle="my-dialog">
                <?php echo get_field('button__footer', 'option'); ?>
              </button>
              <?php endif; ?>
            </div>
        <?php
          endif;
        endif;
        ?>
      </div>
    </div>
    <div class="footer__coppy">Copyright ©
      <?php echo date('Y') ?> Rankexperts
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>