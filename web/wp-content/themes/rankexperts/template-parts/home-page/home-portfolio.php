<?php if (get_field('home__showcase-display', get_the_ID())): ?>
    <section class="portfolio">
        <div class="container">
            <?php if ($title = get_field('home__showcase-title')): ?>
                <h2 class="portfolio__title title">
                    <?php echo $title; ?>
                </h2>
            <?php endif; ?>
            <?php if ($description = get_field('home__showcase-description')): ?>
                <p>
                    <?php echo $description; ?>
                </p>
            <?php endif; ?>
            <div class="swiper portfolio__swiper">
                <div class="swiper-wrapper">
                    <?php get_template_part('template-parts/content-showcases'); ?>
                </div>
            </div>
            <div class="portfolio__navbox">
                <div class="portfolio-button__prev">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="49" height="49" rx="7.5" stroke="#F5F6F0" />
                        <path
                            d="M25.6042 18.146L20.2084 23.5418C20.0152 23.7346 19.862 23.9635 19.7575 24.2155C19.6529 24.4675 19.5991 24.7377 19.5991 25.0106C19.5991 25.2834 19.6529 25.5536 19.7575 25.8056C19.862 26.0576 20.0152 26.2866 20.2084 26.4793L25.6042 31.8751C26.9167 33.1876 29.1667 32.2501 29.1667 30.396V19.6043C29.1667 17.7501 26.9167 16.8335 25.6042 18.146Z"
                            fill="#F5F6F0" />
                    </svg>
                </div>
                <div class="portfolio-pagination"></div>
                <div class="portfolio-button__next">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-0.5" y="0.5" width="49" height="49" rx="7.5" transform="matrix(-1 0 0 1 49 0)"
                            stroke="#F5F6F0" />
                        <path
                            d="M24.3958 18.146L29.7916 23.5418C29.9848 23.7346 30.138 23.9635 30.2425 24.2155C30.3471 24.4675 30.4009 24.7377 30.4009 25.0106C30.4009 25.2834 30.3471 25.5536 30.2425 25.8056C30.138 26.0576 29.9848 26.2866 29.7916 26.4793L24.3958 31.8751C23.0833 33.1876 20.8333 32.2501 20.8333 30.396V19.6043C20.8333 17.7501 23.0833 16.8335 24.3958 18.146Z"
                            fill="#F5F6F0" />
                    </svg>
                </div>
            </div>
            <?php if (get_field('home__showcase-btn-name') && get_field('home__showcase-link')): ?>
                <div class="portfolio__more">
                    <a class="portfolio__btn" href="<?php the_field('home__showcase-link') ?>">
                        <?php the_field('home__showcase-btn-name') ?><svg width="31" height="30" viewBox="0 0 31 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.25 15H26.125" stroke="#F5F6F0" stroke-width="4.16667" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M18 23.75L26.75 15L18 6.25" stroke="#F5F6F0" stroke-width="4.16667" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>