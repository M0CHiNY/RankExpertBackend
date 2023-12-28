<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rankexperts
 */
/**
 * Template name: Blog template
 */

get_header();
?>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,     
    'paged' => $paged,  
);

$query = new WP_Query($args);?>

<div class="bread-crumb">
    <div class="container">
        <ul class="bread-crumb__box">
            <li class="bread-crumb__iterm">
                <a class="bread-crumb__link" href="#">Home</a>
            </li>
            <li class="bread-crumb__iterm bread-crumb__iterm--step">blog</li>
        </ul>
    </div>
</div>

<section class="blog">
    <div class="container">
        <div class="blog-inner">
            <!-- last article start -->
            <?php $count = 1; ?>
            <?php if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <?php if ($count === 1): ?>
                        <article class="blog-article">
                            <?php
                            if (has_post_thumbnail()):
                                $thumbnail_id = get_post_thumbnail_id(get_the_ID());
                                $srcset = wp_get_attachment_image_srcset($thumbnail_id, 'large');
                                ?>
                                <picture class="blog-article__img">
                                    <source media="(min-width:767px)" srcset="<?php echo esc_attr($srcset); ?>" />
                                    <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="<?php the_title_attribute(); ?>" />
                                </picture>
                            <?php else: ?>
                                <picture class="blog-article__img">
                                    <source media="(min-width:767px)" srcset="<?php echo esc_attr($srcset); ?>" />
                                    <img src="<?php echo get_template_directory_uri() . '/images-custom/no-image-showcase.webp'; ?>"
                                        alt="<?php the_title_attribute(); ?>" />
                                </picture>
                            <?php endif; ?>
                            <div class="blog-article__box">
                                <div class="blog-article__athor">
                                    <?php the_author(); ?> |
                                </div>
                                <div class="blog-article__date">
                                    <?php the_date('d M Y'); ?>
                                </div>
                            </div>
                            <h1 class="blog-article__title"><a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a></h1>
                            <div class="blog-article__summary">
                                <?php
                                if (has_excerpt()) {
                                    the_excerpt();
                                } else {
                                    echo wp_trim_words(get_the_content(), 30, '...');
                                }
                                ?>
                            </div>
                            <ul class="list-tags">
                                <?php
                                $tags = get_the_terms(get_the_ID(), 'post_tag');
                                if ($tags) {
                                    foreach ($tags as $tag) {
                                        echo '<li class="tag">' . $tag->name . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                        </article>
                        <?php
                        break;
                    endif; ?>
                    <?php
                    $count++;
                endwhile;
            else:
                echo 'Постів не знайдено.';
            endif;

            wp_reset_postdata();
            ?>
            <!-- last article end -->
            <div class="blog-items">
                <?php if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
                        ?>
                        <div class="blog-item">
                            <article class="blog-article__left">
                                <div class="blog-article__items">
                                    <div class="blog-article__item">
                                        <?php
                                        if (has_post_thumbnail()): ?>
                                            <img class="blog-article__left-img"
                                                src="<?php the_post_thumbnail_url('medium_large'); ?>"
                                                alt="<?php the_title_attribute(); ?>" />
                                        <?php else: ?>
                                            <img class="blog-article__left-img"
                                                src="<?php echo get_template_directory_uri() . '/images-custom/no-image-showcase.webp'; ?>"
                                                alt="<?php the_title_attribute(); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="blog-article__item">
                                        <div class="blog-article__box">
                                            <div class="blog-article__athor">
                                                <?php the_author(); ?>
                                            </div>
                                            <span>|</span>
                                            <div class="blog-article__date">
                                                <?php echo get_the_date('d M Y'); ?>
                                            </div>
                                        </div>
                                        <h2 class="blog-article__item-title"><a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a></h2>
                                        <div class="blog-article__item-summary">
                                            <?php
                                            if (has_excerpt()) {
                                                the_excerpt();
                                            } else {
                                                echo wp_trim_words(get_the_content(), 20, '...');
                                            }
                                            ?>
                                        </div>
                                        <ul class="list-tags">
                                            <?php
                                            $tags = get_the_terms(get_the_ID(), 'post_tag');
                                            if ($tags) {
                                                foreach ($tags as $tag) {
                                                    echo '<li class="tag">' . $tag->name . '</li>';
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <?php
                    endwhile;
                else:
                    echo 'Постів не знайдено.';
                endif;

                wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </div>

    <div class="pagination">
        <div class="container">
            <div class="pagination__items">
                <?php
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'current' => max(1, get_query_var('paged')),
                    'format' => '?paged=%#%',
                    'show_all' => false,
                    'end_size' => 1,
                    'mid_size' => 2,
                    'prev_next' => true,
                    'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" viewBox="0 0 11 16" fill="none"><path d="M6.60415 1.14586L1.20832 6.54169C1.01519 6.73443 0.861962 6.96336 0.757418 7.21539C0.652873 7.46742 0.59906 7.73759 0.59906 8.01044C0.59906 8.28329 0.652873 8.55346 0.757418 8.80549C0.861962 9.05752 1.01519 9.28646 1.20832 9.47919L6.60415 14.875C7.91665 16.1875 10.1667 15.25 10.1667 13.3959V2.60419C10.1667 0.750025 7.91665 -0.166641 6.60415 1.14586Z" fill="#201F1D"></path></svg>',
                    'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none"><path d="M24.3958 18.1459L29.7917 23.5417C29.9848 23.7344 30.138 23.9634 30.2426 24.2154C30.3471 24.4674 30.4009 24.7376 30.4009 25.0104C30.4009 25.2833 30.3471 25.5535 30.2426 25.8055C30.138 26.0575 29.9848 26.2865 29.7917 26.4792L24.3958 31.875C23.0833 33.1875 20.8333 32.25 20.8333 30.3959V19.6042C20.8333 17.75 23.0833 16.8334 24.3958 18.1459Z" fill="#201F1D"></path></svg>',
                    'add_args' => false,
                    'add_fragment' => '',
                    'before_page_number' => '<div class="pagination__item">',
                    'after_page_number' => '</div>',
                ));

                ?>
            </div>
        </div>
    </div>
    <?php the_posts_pagination(); ?>
</section>
<?php
get_footer();
