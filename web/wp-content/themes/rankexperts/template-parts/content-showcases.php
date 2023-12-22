<?php
$countPost = is_home() || is_page_template('home.php') ? '4' : '6';
$postArgs = [
    'post_type' => 'showcase',
    'posts_per_page' => $countPost,
];

$custom_query = new WP_Query($postArgs);

if ($custom_query->have_posts()):
    while ($custom_query->have_posts()):
        $custom_query->the_post(); ?>
        <?php echo is_home() || is_page_template('home.php') ? '<div class="swiper-slide">' : ''; ?>
        <div class="showcase-item" <?php post_class(); ?> id="post-<?php the_ID(); ?>" data-post-id="<?php the_ID(); ?>">
            <?php
            // Check if the post has a featured image
    
            if (has_post_thumbnail()):
                // Get the URL of the featured image
                $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
                $alt = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true);
                ?>
                <img class="showcase-item__img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo $alt ?>" />
            <?php else: ?>
                <img class="showcase-item__img"
                    src="<?php echo get_template_directory_uri() . '/images-custom/no-image-showcase.webp'; ?>" alt="no image" />
            <?php endif; ?>
            <div class="showcase-item__title">
                <?php the_title(); ?>
            </div>
            <div class="showcase-itembox">
                <div class="showcase-item__date">
                    <?php echo get_the_date('j F Y'); ?>
                </div>
                <a class="showcase-item-btn" href="<?php the_permalink(); ?>">
                    View Case Study
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                        <path
                            d="M11.3687 15.7831C11.3479 15.7331 11.3373 15.6794 11.3373 15.6252C11.3373 15.571 11.3479 15.5173 11.3687 15.4672C11.3894 15.4172 11.4199 15.3717 11.4582 15.3334C11.4582 15.3334 11.4582 15.3333 11.4582 15.3333L16.3789 10.4127L3.625 10.4127C3.5156 10.4127 3.41068 10.3692 3.33332 10.2919C3.25596 10.2145 3.2125 10.1096 3.2125 10.0002C3.2125 9.89077 3.25596 9.78585 3.33332 9.70849C3.41068 9.63113 3.5156 9.58767 3.625 9.58767L16.3789 9.58767L11.4582 4.66698C11.4199 4.62866 11.3895 4.58316 11.3687 4.5331C11.348 4.48303 11.3373 4.42937 11.3373 4.37517C11.3373 4.32098 11.348 4.26732 11.3687 4.21725C11.3895 4.16718 11.4199 4.12169 11.4582 4.08337C11.4965 4.04505 11.542 4.01465 11.5921 3.99391C11.6421 3.97317 11.6958 3.9625 11.75 3.9625C11.8042 3.9625 11.8579 3.97317 11.9079 3.99391C11.958 4.01465 12.0035 4.04505 12.0418 4.08337L17.6668 9.70833L11.3687 15.7831ZM11.3687 15.7831C11.3894 15.8332 11.4198 15.8786 11.4582 15.9169M11.3687 15.7831L11.4582 15.9169M17.6668 10.292L12.0418 15.9169L12.0418 15.917L17.6668 10.292ZM17.6668 10.292L17.6668 10.292L17.5961 10.2213L17.6668 10.292ZM11.4582 15.9169C11.4582 15.917 11.4582 15.917 11.4582 15.917L11.5289 15.8463L11.4582 15.9169Z"
                            fill="#F5F6F0" stroke="#F5F6F0" stroke-width="0.2" />
                    </svg>
                </a>
            </div>
        </div>
        <?php echo is_home() || is_page_template('home.php') ? '</div>' : ''; ?>
    <?php endwhile;
    wp_reset_postdata();
else:
    echo 'No posts found.';
endif;
?>