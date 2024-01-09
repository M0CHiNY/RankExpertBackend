<?php

/**
 * @package rankexperts
 */

get_header();
?>

<!-- Breadcrumb from yoast plugin start-->
<?php get_template_part('template-parts/breadcrumbs'); ?>
<!-- Breadcrumb from yoast plugin end-->

<article class="single-blog">
  <div class="container">
    <?php
    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
    if ($image_url) : ?>
      <div class="single-blog__img">
        <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>" />
      </div>
    <?php endif; ?>
    <div class="blog-article__box">
      <div class="blog-article__athor">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
            the_author();
        ?> |
        <?php
          endwhile;
        endif;
        ?>
      </div>
      <div class="blog-article__date">
        <?php echo get_the_date('d M Y'); ?>
      </div>
    </div>
    <div class="content-container__wrapper">
      <div class="content-container">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <ul class="list-tags">
          <?php
          $tags = get_the_terms(get_the_ID(), 'post_tag');
          if ($tags) {
            foreach ($tags as $tag) {
              echo '<li class="tag"><a href="' . get_term_link($tag) . '">' . $tag->name . '</a></li>';
            }
          }
          ?>
        </ul>
        <div class="content-box">
          <div class="content-view">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
              <path d="M12.5 3.90625C20.3125 3.90625 25 12.5 25 12.5C25 12.5 20.3125 21.0938 12.5 21.0938C4.6875 21.0938 0 12.5 0 12.5C0 12.5 4.6875 3.90625 12.5 3.90625ZM12.5 5.46875C7 5.46875 3.12188 10.5484 1.83594 12.5C3.12031 14.45 6.99844 19.5312 12.5 19.5312C18 19.5312 21.8781 14.4516 23.1641 12.5C21.8797 10.55 18.0016 5.46875 12.5 5.46875ZM12.5 7.03125C13.9504 7.03125 15.3414 7.60742 16.367 8.63301C17.3926 9.6586 17.9688 11.0496 17.9688 12.5C17.9688 13.9504 17.3926 15.3414 16.367 16.367C15.3414 17.3926 13.9504 17.9688 12.5 17.9688C11.0496 17.9688 9.6586 17.3926 8.63301 16.367C7.60742 15.3414 7.03125 13.9504 7.03125 12.5C7.03125 11.0496 7.60742 9.6586 8.63301 8.63301C9.6586 7.60742 11.0496 7.03125 12.5 7.03125ZM12.5 8.59375C11.4644 8.59499 10.4715 9.00694 9.73923 9.73923C9.00694 10.4715 8.59499 11.4644 8.59375 12.5C8.59375 14.6531 10.3453 16.4062 12.5 16.4062C14.6547 16.4062 16.4062 14.6531 16.4062 12.5C16.4062 10.3469 14.6547 8.59375 12.5 8.59375Z" fill="#8F8F8E" />
            </svg>
            <div class="post-views">
              <div class="post-views"><span>View:</span>
                <?php
                $custom_count = get_post_meta(get_the_ID(), 'wpb_post_views_count', true);
                $count = function_name_given(get_the_ID());
                echo !empty($custom_count) ? intval($custom_count) : $count;
                ?>
              </div>
            </div>
          </div>

          <div class="content-share">
            <?php
            //plagin for socail icons
            if (function_exists('is_plugin_active')) {
              if (is_plugin_active('ultimate-social-media-icons/ultimate_social_media_icons.php')) {
                echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]');
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>

<div class="most-popular">
  <div class="container">
    <div class="most-popular__title"><?php pll_e('Single-page-blog') ?? 'The most popular'; ?></div>
    <div class="most-popular__items most-popular__swiper">
      <div class="swiper-wrapper">
        <?php
        $args = array(
          'post_type'      => 'post',
          'posts_per_page' => -1,
          'meta_key'       => 'post_views', // Замініть на свій мета-ключ
          'orderby'        => 'meta_value_num', // Сортувати за числовим значенням мета-ключа
          'order'          => 'DESC', // В порядку спадання (найбільше - перше)
        );

        $popular_posts_query = new WP_Query($args);

        if ($popular_posts_query->have_posts()) :
          while ($popular_posts_query->have_posts()) : $popular_posts_query->the_post();
            if (!is_single(get_the_ID())) {
        ?>
              <div class="swiper-slide">
                <article class="most-popular__article">
                  <div class="most-popular__box">
                    <div class="most-popular__imginner">
                      <img class="most-popular__img" src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="<?php the_title_attribute(); ?>" />
                      <div class="blog-article__box mobbile">
                        <div class="blog-article__athor">
                          <?php the_author(); ?> |
                        </div>
                        <div class="blog-article__date">
                          <?php the_date('d M Y'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="most-popular__content">
                      <div class="blog-article__box">
                        <div class="blog-article__athor">
                          <?php the_author(); ?> |
                        </div>
                        <div class="blog-article__date">
                          <?php echo get_the_date('d M Y'); ?>
                        </div>
                      </div>
                      <h2>
                        <a href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h2>
                      <div class="most-popular__sumary">
                        <?php
                        if (has_excerpt()) {
                          the_excerpt();
                        } else {
                          echo wp_trim_words(get_the_content(), 15, '...');
                        }
                        ?>
                      </div>
                      <ul class="list-tags">
                        <?php
                        $tags = get_the_terms(get_the_ID(), 'post_tag');
                        if ($tags) {
                          foreach ($tags as $tag) {
                            echo '<li class="tag"><a href="' . get_term_link($tag) . '">' . $tag->name . '</a></li>';
                          }
                        }
                        ?>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>

        <?php
            }
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
      <div class="most-popular__pagintation"></div>
    </div>
  </div>
</div>

<?php
get_footer();
?>