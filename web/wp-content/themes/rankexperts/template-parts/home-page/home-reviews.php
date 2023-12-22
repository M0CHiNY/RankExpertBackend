<?php
$postArgsReviews = [
    'post_type' => 'review',
    'posts_per_page' => 6,
];

$Reviews_query = new WP_Query($postArgsReviews);

?>

<?php if (get_field('reviews__display', get_the_ID())): ?>
    <section class="reviews">
        <div class="container">
            <h2 class="reviews__title title">Our clients trust us</h2>
            <div class="reviews__wrap">
                <?php
                if ($Reviews_query->have_posts()):
                    while ($Reviews_query->have_posts()):
                        $Reviews_query->the_post();
                        ?>
                        <article class="reviews__card">
                            <div class="reviews__head">
                                <img class="reviews__img" src="images/reviews/reviews-1.jpg" alt="Yana Pryhodko" />
                                <div class="reviews__head-box">
                                    <h3 class="reviews__name">
                                        <?php the_title(); ?>
                                    </h3>
                                    <?php

                                    $starCount = get_field('reviews__stars', get_the_ID());
                                    if ($starCount):
                                        ?>
                                        <div class="reviews__stars-box">
                                            <?php review_stars($starCount); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <p class="reviews__text">
                                <?php echo get_field('reviews__text', get_the_ID()) ?>
                            </p>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else:

                    echo 'No posts found.';
                endif;
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>