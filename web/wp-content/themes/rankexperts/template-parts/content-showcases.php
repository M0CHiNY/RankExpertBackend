<?php
$countPost = (is_front_page()) ? '4' : '6';
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$postArgs = [
  'post_type' => 'showcases',
  'posts_per_page' => $countPost,
  'paged' => $paged,
];

$custom_query = new WP_Query($postArgs);

if ($custom_query->have_posts()) :
  while ($custom_query->have_posts()) :
    $custom_query->the_post(); ?>
    <?php echo is_archive() ? '' : '<div class="swiper-slide">'; ?>
    <div class="showcase-item" <?php post_class(); ?> id="post-<?php the_ID(); ?>" data-post-id="<?php the_ID(); ?>">
      <?php
      // Check if the post has a featured image
      if (has_post_thumbnail()) :
        $image_id = get_post_thumbnail_id();
        $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
        $image_data = wp_get_attachment_image_src($image_id, 'medium');
        if ($image_id && $image_data) {
          echo '<picture>';
          echo '<source srcset="' . $image_data[0] . '" media="(min-width: 768px)">';
          echo '<img loading="lazy" class="showcase-item__img" src="' . $image_data[0] . '" width="' . $image_data[1] . '" height="' . $image_data[2] . '" alt="' . $alt . '">';
          echo '</picture>';
        }
      ?>
      <?php else : ?>
        <img class="showcase-item__img" src="<?php echo get_template_directory_uri() . '/images-custom/no-image-showcase.webp'; ?>" alt="no image" />
      <?php endif; ?>


      <div class="showcase-item__title">
        <?php the_title(); ?>
      </div>
      <div class="showcase-itembox">
        <div class="showcase-item__date <?php echo is_archive() ? 'color' : ''; ?>">
          <?php echo get_the_date('j F Y'); ?>
        </div>
        <a class="showcase-item-btn" href="<?php the_permalink(); ?>">
          <?php pll_e('showcases-button') ?? 'View Case Study'; ?>
          <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
            <path d="M11.3687 15.7831C11.3479 15.7331 11.3373 15.6794 11.3373 15.6252C11.3373 15.571 11.3479 15.5173 11.3687 15.4672C11.3894 15.4172 11.4199 15.3717 11.4582 15.3334C11.4582 15.3334 11.4582 15.3333 11.4582 15.3333L16.3789 10.4127L3.625 10.4127C3.5156 10.4127 3.41068 10.3692 3.33332 10.2919C3.25596 10.2145 3.2125 10.1096 3.2125 10.0002C3.2125 9.89077 3.25596 9.78585 3.33332 9.70849C3.41068 9.63113 3.5156 9.58767 3.625 9.58767L16.3789 9.58767L11.4582 4.66698C11.4199 4.62866 11.3895 4.58316 11.3687 4.5331C11.348 4.48303 11.3373 4.42937 11.3373 4.37517C11.3373 4.32098 11.348 4.26732 11.3687 4.21725C11.3895 4.16718 11.4199 4.12169 11.4582 4.08337C11.4965 4.04505 11.542 4.01465 11.5921 3.99391C11.6421 3.97317 11.6958 3.9625 11.75 3.9625C11.8042 3.9625 11.8579 3.97317 11.9079 3.99391C11.958 4.01465 12.0035 4.04505 12.0418 4.08337L17.6668 9.70833L11.3687 15.7831ZM11.3687 15.7831C11.3894 15.8332 11.4198 15.8786 11.4582 15.9169M11.3687 15.7831L11.4582 15.9169M17.6668 10.292L12.0418 15.9169L12.0418 15.917L17.6668 10.292ZM17.6668 10.292L17.6668 10.292L17.5961 10.2213L17.6668 10.292ZM11.4582 15.9169C11.4582 15.917 11.4582 15.917 11.4582 15.917L11.5289 15.8463L11.4582 15.9169Z" fill="#F5F6F0" stroke="#F5F6F0" stroke-width="0.2" />
          </svg>
        </a>
      </div>
    </div>
    <?php echo is_archive() ? '' : '</div>'; ?>
<?php endwhile;
  wp_reset_postdata();
else :
  get_template_part('template-parts/content-none');
endif;

?>
<?php if (is_archive()) : ?>
  <div class="pagination showcase">
    <div class="container">
      <div class="pagination__items">
        <?php
        $pagination_links = paginate_links(
          array(
            'total' => $custom_query->max_num_pages,
            'current' => max(1, get_query_var('paged')),
            'format' => 'page/%#%',
            'show_all' => false,
            'end_size' => 1,
            'mid_size' => 2,
            'prev_next' => true,
            'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none"><path d="M25.6042 18.1459L20.2083 23.5417C20.0152 23.7344 19.862 23.9634 19.7574 24.2154C19.6529 24.4674 19.5991 24.7376 19.5991 25.0104C19.5991 25.2833 19.6529 25.5535 19.7574 25.8055C19.862 26.0575 20.0152 26.2865 20.2083 26.4792L25.6042 31.875C26.9167 33.1875 29.1667 32.25 29.1667 30.3959V19.6042C29.1667 17.75 26.9167 16.8334 25.6042 18.1459Z" fill="#201F1D"/></svg>',
            'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none"><path d="M24.3958 18.1459L29.7917 23.5417C29.9848 23.7344 30.138 23.9634 30.2426 24.2154C30.3471 24.4674 30.4009 24.7376 30.4009 25.0104C30.4009 25.2833 30.3471 25.5535 30.2426 25.8055C30.138 26.0575 29.9848 26.2865 29.7917 26.4792L24.3958 31.875C23.0833 33.1875 20.8333 32.25 20.8333 30.3959V19.6042C20.8333 17.75 23.0833 16.8334 24.3958 18.1459Z" fill="#201F1D"></path></svg>',
            'add_args' => true,
            'add_fragment' => '',
            'before_page_number' => '<div class="pagination__item">',
            'after_page_number' => '</div>',
          )
        );

        // Add aria-label for btn Next and Previous
        $pagination_links = str_replace(
          array('<a class="prev page-numbers"', '<a class="next page-numbers"'),
          array('<a class="prev page-numbers" aria-label="Previous"', '<a class="next page-numbers" aria-label="Next"'),
          $pagination_links
        );

        echo $pagination_links;

        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
<?php endif; ?>