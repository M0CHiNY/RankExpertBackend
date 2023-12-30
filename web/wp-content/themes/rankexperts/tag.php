<?php
/**
 * The template for displaying tag.php (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rankexperts
 */
get_header();
?>

<?php
$tag = get_query_var('tag');
$paged = (get_query_var('page')) ? get_query_var('page') : 1;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'paged' => get_query_var('page'),
    'tag' => $tag
);

$queryTest = new WP_Query($args);
?>

<!-- Breadcrumb from yoast plugin start-->
<?php get_template_part('template-parts/breadcrumbs'); ?>
<!-- Breadcrumb from yoast plugin end-->

<?php if (!empty($tag)): ?>
    <div class="main-tags">
        <div class="container">
            <div class="main-tags__inner">
                <?php echo '<h1 class="main-tags">' . $tag . '</h1>'; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<section class="blog tags">
    <div class="container">
        <div class="blog-tags__inner">
            <!-- last article start -->
            <?php $count = 1; ?>
            <?php if ($queryTest->have_posts()):
                while ($queryTest->have_posts()):
                    $queryTest->the_post();
                    ?>

                    <article class="blog-article-tags">
                        <?php
                        if (has_post_thumbnail()):
                            $thumbnail_id = get_post_thumbnail_id(get_the_ID());
                            $srcset = wp_get_attachment_image_srcset($thumbnail_id, 'large');
                            ?>
                            <div class="picture__inner">
                                <picture class="blog-article__img">
                                    <source media="(min-width:767px)" srcset="<?php echo esc_attr($srcset); ?>" />
                                    <img src="<?php the_post_thumbnail_url('medium_large'); ?>"
                                        alt="<?php the_title_attribute(); ?>" />
                                </picture>
                            </div>
                        <?php else: ?>
                            <div class="picture__inner">
                                <picture class="blog-article__img">
                                    <source media="(min-width:767px)" srcset="<?php echo esc_attr($srcset); ?>" />
                                    <img src="<?php echo get_template_directory_uri() . '/images-custom/no-image-showcase.webp'; ?>"
                                        alt="<?php the_title_attribute(); ?>" />
                                </picture>
                            </div>
                        <?php endif; ?>
                        <div class="tags__contents">
                            <div class="blog-article__box">
                                <div class="blog-article__athor">
                                    <?php the_author(); ?> |
                                </div>
                                <div class="blog-article__date">
                                <?php echo get_the_date('d M Y'); ?>
                                </div>
                            </div>
                            <h2 class="blog-article__title"><a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a></h2>
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
                                        echo '<li class="tag"><a href="' . get_term_link($tag) . '">' . $tag->name . '</a></li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </article>
                    <?php


                endwhile;
            else:
                echo 'Постів не знайдено.';
            endif;

            wp_reset_postdata();
            ?>
            <!-- last article end -->

        </div>
    </div>

    <div class="pagination">
        <div class="container">
            <div class="pagination__items">
                <?php
                echo paginate_links(array(
                    'total' => $queryTest->max_num_pages,
                    'current' => max(1, get_query_var('page')),
                    'format' => '?paged=%#%',
                    'show_all' => false,
                    'end_size' => 1,
                    'mid_size' => 2,
                    'prev_next' => true,
                    'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none"><path d="M25.6042 18.1459L20.2083 23.5417C20.0152 23.7344 19.862 23.9634 19.7574 24.2154C19.6529 24.4674 19.5991 24.7376 19.5991 25.0104C19.5991 25.2833 19.6529 25.5535 19.7574 25.8055C19.862 26.0575 20.0152 26.2865 20.2083 26.4792L25.6042 31.875C26.9167 33.1875 29.1667 32.25 29.1667 30.3959V19.6042C29.1667 17.75 26.9167 16.8334 25.6042 18.1459Z" fill="#201F1D"/></svg>',
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

</section>
<?php
get_footer();
