<section class="marketing all-services" id="down">
  <div class="container">
    <?php if ($divisionTitle = get_field('title_page', 'option')): ?>
      <h2 class="marketing__title title">
        <?php echo $divisionTitle; ?>
      </h2>
    <?php endif; ?>
    <?php if ($slogan = get_field('description_page', 'option')): ?>
      <p class="marketing__slogan">
        <?php echo $slogan ?>
      </p>
    <?php endif; ?>
    <div class="marketing__wrap">
      <?php if (get_field('archive-categories', 'option')): ?>
        <?php foreach (get_field('archive-categories', 'option') as $settings): ?>
          <div class="marketing__card-box">
            <?php if (!empty($settings['title'])): ?>
              <h3 class="marketing__card-title">
                <?php echo $settings['title']; ?>
              </h3>
            <?php endif; ?>
            <?php if (!empty($settings['description'])): ?>
              <p class="marketing__card-descr">
                <?php echo $settings['description']; ?>
              </p>
            <?php endif; ?>
            <?php ?>
            <div class="cards">
              <?php
              $terms = get_terms(
                array(
                  'taxonomy' => 'category', // Замініть на вашу реальну назву таксономії
                  'hide_empty' => false, // Щоб включити терміни, які не мають пов'язаних записів
                )
              );
              $category_slugs = wp_list_pluck($terms, 'slug');
              $postServicesArgs = array(
                'post_type' => 'onlinemarketing',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'category', // Замініть на вашу реальну назву таксономії
                    'field' => 'slug',
                    'terms' => $settings['categories']->slug,
                  ),
                ),
              );
              $ServicesPost = new WP_Query($postServicesArgs); ?>

              <?php if ($ServicesPost->have_posts()):
                while ($ServicesPost->have_posts()):
                  $ServicesPost->the_post();
                  ?>
                  <article class="card-item">
                    <div class="card-item__inner">
                      <div class="card-item__top">
                        <div class="card-item__img">
                          <?php echo get_field('svg_icon', get_the_ID()) ?>
                        </div>
                        <h4 class="card-item__caption">
                          <?php the_title(); ?>
                        </h4>
                      </div>
                      <!-- Discount-->
                      <!-- <div class="card-item__discount">
                            <span>35</span>%
                          </div> -->
                      <!-- Discount-->
                    </div>
                    <p class="card-item__text">
                      <?php echo get_the_excerpt(); ?>
                    </p>
                    <div class="card-item__link-box">
                      <a class="card-item__link" href="<?php echo get_permalink(); ?>"><?php pll_e('services-button') ?? 'Learn more'; ?>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M8.70082 12.4553C8.66974 12.4243 8.64507 12.3874 8.62824 12.3468C8.61142 12.3062 8.60276 12.2627 8.60276 12.2188C8.60276 12.1748 8.61142 12.1313 8.62824 12.0907C8.64507 12.0501 8.66974 12.0132 8.70082 11.9822M8.70082 12.4553L8.7715 12.0529M8.70082 12.4553C8.73186 12.4864 8.76871 12.511 8.80927 12.5278C8.84986 12.5447 8.89338 12.5533 8.93732 12.5533C8.98126 12.5533 9.02477 12.5447 9.06536 12.5278C9.10594 12.511 9.1428 12.4864 9.17385 12.4553C9.17386 12.4553 9.17387 12.4553 9.17389 12.4552L13.3926 8.23658L8.70075 12.4552C8.70077 12.4553 8.7008 12.4553 8.70082 12.4553ZM8.70082 11.9822L8.7715 12.0529M8.70082 11.9822L8.70078 11.9822L8.7715 12.0529M8.70082 11.9822L12.3486 8.33438M8.7715 12.0529L12.4901 8.33438H12.3486M12.3486 8.33438L12.4486 8.23438H12.59L12.4486 7.76563L12.3486 7.66563M12.3486 8.33438L2.84357 8.33438C2.75488 8.33438 2.66983 8.29915 2.60713 8.23645C2.54442 8.17374 2.50919 8.08869 2.50919 8.00001C2.50919 7.91133 2.54442 7.82628 2.60713 7.76357C2.66984 7.70086 2.75488 7.66563 2.84357 7.66563L12.3486 7.66563M12.3486 7.66563H12.4901L12.59 7.76563L13.3926 8.23654C13.4237 8.20549 13.4483 8.16863 13.4651 8.12806C13.482 8.08746 13.4906 8.04395 13.4906 8.00001C13.4906 7.95607 13.482 7.91256 13.4651 7.87196C13.4483 7.83139 13.4237 7.79452 13.3926 7.76348C13.3926 7.76346 13.3926 7.76345 13.3926 7.76344L9.17385 3.54473C9.14279 3.51367 9.10591 3.48903 9.06533 3.47222C9.02474 3.4554 8.98124 3.44675 8.93732 3.44675C8.89339 3.44675 8.84989 3.4554 8.80931 3.47222C8.76872 3.48903 8.73185 3.51367 8.70078 3.54473C8.66972 3.57579 8.64508 3.61266 8.62827 3.65325C8.61146 3.69383 8.60281 3.73733 8.60281 3.78126C8.60281 3.82519 8.61146 3.86868 8.62827 3.90927C8.64508 3.94985 8.66972 3.98673 8.70078 4.01779L12.3486 7.66563Z"
                            fill="#201F1D" stroke="#201F1D" stroke-width="0.2" />
                        </svg>
                      </a>
                    </div>
                  </article>
                <?php endwhile;
                wp_reset_postdata();
              else:
                echo 'No posts found.';
              endif;
              ?>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>