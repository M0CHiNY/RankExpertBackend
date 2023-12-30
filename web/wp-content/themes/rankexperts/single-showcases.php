<?php
/**
 * The template for displaying showcase page
 *
 * @package rankexperts
 */

get_header();
?>
<div class="showcase-more">
    <div class="showcase-more__top-wrapper">
        <div class="showcase-more__top">
            <div class="container">
                <!-- Breadcrumb from yoast plugin start-->
                <?php get_template_part('template-parts/breadcrumbs'); ?>
                <!-- Breadcrumb from yoast plugin end-->
                <h1 class="showcase-more__title title">
                    <?php the_title(); ?>>
                </h1>
            </div>
        </div>
    </div>
    <?php if ($results = get_field('showcases_overview')): ?>
        <div class="showcase-more__resultbox">
            <?php foreach ($results as $result): ?>
                <div class="showcase-more__resultbox-item">
                    <div class="showcase-more__resultbox-item block-1">
                        <?php echo $result['number'] ?? ''; ?>
                    </div>
                    <div class="showcase-more__resultbox-item block-2">
                        <?php echo $result['traffic_growth'] ?? ''; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <div class="showcase-more_top__content">
        <?php if ($image = get_field('main_image')): ?>
            <div class="container">
                <img src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>" />
                <?php if (get_field('main_image_description')): ?>
                    <p>
                        <?php echo get_field('main_image_description'); ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="showcase-more__main">
        <div class="container">
            <div class="showcase-more__steps">
                <?php if ($title = get_field('1_step_title')): ?>
                    <div class="showcase-more__step one--mod">
                        <div class="showcase-more__step__wrapper">
                            <div class="showcase-more__step-counter">1</div>
                            <div class="showcase-more__step-name">
                                <?php echo $title; ?>
                            </div>
                        </div>
                        <div class="showcase-more__step-content one">

                            <div class="showcase-more__aboutcase">
                                <?php the_field('1_step_сonfiguration'); ?>
                                <div class="showcase-more__aboutcase-container">
                                    <?php the_field('1_step_сonfiguration_description'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php $count = (empty(get_field('1_step_title')) == null || empty(get_field('1_step_сonfiguration')) == null) ? 1 : 0; ?>
                <?php if ($steps = get_field('next__step')): ?>
                    <?php foreach ($steps as $step):
                        $count++ ?>

                        <div class="showcase-more__step">
                            <div class="showcase-more__step__wrapper">
                                <div class="showcase-more__step-counter">
                                    <?php echo $count; ?>
                                </div>
                                <div class="showcase-more__step-name">
                                    <?php echo $step['title'] ?>
                                </div>
                            </div>
                            <?php if ($step['showcase__subtitle']): ?>
                                <div class="showcase__subtitle">
                                    <?php echo $step['showcase__subtitle']; ?>
                                </div>
                            <?php endif; ?>
                            <div class="showcase-more__step-content one ">
                                <div
                                    class="showcase-more__aboutcase <?php echo (count($step['content']) == 2) ? 'column' : '' ?>">
                                    <?php foreach ($step['content'] as $content):
                                        $conutContent++;
                                        ?>
                                        <div class="showcase-more__aboutcasebox">
                                            <?php echo $content['content'] ?? ''; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if (get_field('consultaion__display')): ?>
        <?php if (!empty(get_field('consultaion__title'))): ?>
            <div class="action">
                <div class="container">
                    <div class="action__inner">
                        <div class="action__items">
                            <div class="action__item">
                                <div class="action__item-title">
                                    <?php the_field('consultaion__title'); ?>
                                </div>
                                <?php the_field('consultaion__description'); ?>
                            </div>
                            <div class="action__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150"
                                    fill="none">
                                    <path
                                        d="M78.8175 4.23915C46.4523 4.77381 -6.36378 31.4501 7.47958 136.222C7.47958 74.5007 42.2339 43.753 60.7454 43.753C72.9681 43.753 81.4275 53.9908 82.37 73.8555H70.4778L72.5925 77.8654L106.266 141.816L108.683 146.411L111.109 141.815L144.782 77.866L146.897 73.8558H129.483C128.432 30.6465 105.797 4.46473 80.3468 4.23915C79.8437 4.23417 79.3316 4.23036 78.8175 4.23915ZM77.4722 17.3035C102.537 16.9763 120.296 39.4716 121.033 79.3303H137.824L108.691 134.665L79.5499 79.33H98.7672C98.0869 38.2534 81.1158 20.1972 48.4586 26.5223C58.7594 20.4145 68.5779 17.4198 77.4719 17.3032L77.4722 17.3035Z"
                                        fill="#F5F6F0" />
                                </svg>
                                <?php if ($btn = get_field('consultaion__btn')): ?>
                                    <button class="btn btn-modal" type="button" data-ui-toggle="my-dialog">
                                        <?php echo $btn; ?>
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>
<section class="showcases">
    <div class="container">
        <h3 class="showcases__title title">
            Explore more case studies
        </h3>
        <div class="showcases__description">
            <p>
                After four months of working on the website, the tax law SEO
                specialists’ results were already clearly visible.
            </p>
        </div>
        <div class="showcases__slider">
            <div class="swiper-wrapper">
                <?php get_template_part('template-parts/content-showcases'); ?>
            </div>
            <div class="showcase__pagintation"></div>
        </div>
    </div>
</section>

<?php
get_footer();
