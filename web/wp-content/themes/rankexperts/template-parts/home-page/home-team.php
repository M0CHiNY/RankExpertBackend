<?php
$postArgsTeam = [
    'post_type' => 'rersons',
    'posts_per_page' => -1,
];

$team_query = new WP_Query($postArgsTeam );
?>

<section class="team">
    <div class="team__inner">
        <div class="container">
            <h2 class="team-title title">Meet Our Team</h2>
            <p class="team-text">
                Our team consists of seasoned professionals with extensive
                expertise in their respective fields. They collaborate closely to
                deliver the best solutions and results for you.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="swiper-team__wrapper">
            <div class="swiper team-swiper">
                <div class="swiper-wrapper">
                    <?php
                    if ($team_query->have_posts()):
                        while ($team_query->have_posts()):
                            $team_query->the_post();
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $image_attachment_id = attachment_url_to_postid($image_url);
                            $image_alt = get_post_meta($image_attachment_id, '_wp_attachment_image_alt', true);
                            ?>

                            <div class="swiper-slide">
                                <div class="team-swiper__slide">
                                    <?php if (!empty($image_url)): ?>
                                        <img class="team-swiper__img" src="<?php echo $image_url; ?>"
                                            alt="<?php echo $image_alt; ?>" />
                                    <?php endif; ?>
                                    <div class="team-swiper__specialization">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="team-swiper__name">
                                        <?php echo get_field('person__position', get_the_ID()) ?>
                                    </div>
                                    <div class="team-swiper__about">
                                        <?php echo get_field('person__description', get_the_ID()) ?>
                                    </div>
                                    <?php if (!empty($email = get_field('person__email', get_the_ID()))): ?>
                                        <a class="team-swiper__email" href="mailto:<?php echo $email; ?>">
                                            <?php echo $email; ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else:

                        echo 'No posts found.';
                    endif;
                    ?>
                </div>
                <div class="team-button__inner">
                    <div class="team-button__prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                            <rect x="0.5" y="0.5" width="49" height="49" rx="7.5" stroke="#201F1D" />
                            <path
                                d="M25.6042 18.146L20.2084 23.5418C20.0152 23.7346 19.862 23.9635 19.7575 24.2155C19.6529 24.4675 19.5991 24.7377 19.5991 25.0106C19.5991 25.2834 19.6529 25.5536 19.7575 25.8056C19.862 26.0576 20.0152 26.2866 20.2084 26.4793L25.6042 31.8751C26.9167 33.1876 29.1667 32.2501 29.1667 30.396V19.6043C29.1667 17.7501 26.9167 16.8335 25.6042 18.146Z"
                                fill="#E4101A" />
                        </svg>
                    </div>
                    <div class="team-button__next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                            <rect x="-0.5" y="0.5" width="49" height="49" rx="7.5" transform="matrix(-1 0 0 1 49 0)"
                                stroke="#201F1D" />
                            <path
                                d="M24.3958 18.146L29.7916 23.5418C29.9848 23.7346 30.138 23.9635 30.2425 24.2155C30.3471 24.4675 30.4009 24.7377 30.4009 25.0106C30.4009 25.2834 30.3471 25.5536 30.2425 25.8056C30.138 26.0576 29.9848 26.2866 29.7916 26.4793L24.3958 31.8751C23.0833 33.1876 20.8333 32.2501 20.8333 30.396V19.6043C20.8333 17.7501 23.0833 16.8335 24.3958 18.146Z"
                                fill="#E4101A" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
</section>