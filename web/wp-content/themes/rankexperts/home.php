<?php

/**
 * Template name: Home page
 */

get_header();
?>
<!-- section subhead start -->
<?php get_template_part('template-parts/home-page/home', 'subhead'); ?>
<!-- section subhead end -->

<!-- section services start -->
<?php get_template_part('template-parts/home-page/home', 'services'); ?>
<!-- section services end -->

<!-- section searchInfo start -->
<?php get_template_part('template-parts/home-page/home', 'searchInfo'); ?>
<!-- section searchInfo end -->

<!-- section action start -->
<?php get_template_part('template-parts/home-page/home', 'action'); ?>
<!-- section action end -->

<!-- section steps start -->
<?php get_template_part('template-parts/home-page/home', 'steps'); ?>
<!-- section steps end -->

<!-- section reviews start -->
<?php if (get_field('reviews__display', get_the_ID())): ?>
  <?php get_template_part('template-parts/reviews'); ?>
<?php endif; ?>
<!-- section reviews end -->

<!-- section showcase start -->
<?php get_template_part('template-parts/home-page/home', 'portfolio'); ?>
<!-- section showcase end -->

<section class="discount">
  <div class='container'>
    <h2 class="discount__title title">
      The most popular services.
      <span>Hot discount</span>
    </h2>
    <div class="cards">
      <article class="card-item">
        <div class="card-item__inner">
          <div class="card-item__top">
            <div class="card-item__img">
              <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M21.0003 0.166687C9.52116 0.166687 0.166992 9.52085 0.166992 21C0.166992 32.4792 9.52116 41.8334 21.0003 41.8334C32.4795 41.8334 41.8337 32.4792 41.8337 21C41.8337 9.52085 32.4795 0.166687 21.0003 0.166687ZM2.27116 21C2.27116 18.2917 2.85449 15.7084 3.89616 13.375L12.8337 37.8542C6.58366 34.8125 2.27116 28.4167 2.27116 21ZM21.0003 39.7292C19.167 39.7292 17.3962 39.4584 15.7087 38.9584L21.3337 22.625L27.0837 38.3959C27.1253 38.4792 27.167 38.5834 27.2087 38.6459C25.2712 39.3542 23.1878 39.7292 21.0003 39.7292ZM23.5837 12.2084C24.7087 12.1459 25.7295 12.0209 25.7295 12.0209C26.7295 11.8959 26.6253 10.4167 25.6045 10.4792C25.6045 10.4792 22.5628 10.7084 20.6045 10.7084C18.7712 10.7084 15.667 10.4792 15.667 10.4792C14.667 10.4375 14.542 11.9792 15.5628 12.0417C15.5628 12.0417 16.5212 12.1667 17.5212 12.2292L20.4378 20.2292L16.3337 32.5209L9.52116 12.2084C10.6462 12.1667 11.667 12.0417 11.667 12.0417C12.667 11.9167 12.5628 10.4375 11.542 10.5C11.542 10.5 8.50033 10.7292 6.54199 10.7292C6.18783 10.7292 5.77116 10.7292 5.33366 10.7084C8.70866 5.62502 14.4587 2.27085 21.0003 2.27085C25.8753 2.27085 30.3128 4.12502 33.6462 7.18752C33.5628 7.18752 33.4795 7.16669 33.3962 7.16669C31.5628 7.16669 30.2503 8.77085 30.2503 10.5C30.2503 12.0417 31.1462 13.3542 32.0837 14.8959C32.792 16.1459 33.6253 17.75 33.6253 20.0625C33.6253 21.6667 33.0003 23.5209 32.2087 26.125L30.3337 32.375L23.5837 12.2084ZM37.4378 12.0209C39.7778 16.3034 40.3535 21.3304 39.0421 26.0311C37.7307 30.7317 34.636 34.7347 30.417 37.1875L36.1462 20.6459C37.2087 17.9792 37.5628 15.8334 37.5628 13.9375C37.5628 13.25 37.5212 12.6042 37.4378 12.0209Z"
                  fill="black" />
              </svg>
            </div>
            <h4 class="card-item__caption">Service 1</h4>
          </div>
          <!-- Discount-->
          <div class="card-item__discount"><span>35</span>%</div>
          <!-- Discount-->
        </div>
        <p class="card-item__text">
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard
        </p>
        <div class="card-item__link-box">
          <a class="card-item__link" href="#">Learn more
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M8.70082 12.4553C8.66974 12.4243 8.64507 12.3874 8.62824 12.3468C8.61142 12.3062 8.60276 12.2627 8.60276 12.2188C8.60276 12.1748 8.61142 12.1313 8.62824 12.0907C8.64507 12.0501 8.66974 12.0132 8.70082 11.9822M8.70082 12.4553L8.7715 12.0529M8.70082 12.4553C8.73186 12.4864 8.76871 12.511 8.80927 12.5278C8.84986 12.5447 8.89338 12.5533 8.93732 12.5533C8.98126 12.5533 9.02477 12.5447 9.06536 12.5278C9.10594 12.511 9.1428 12.4864 9.17385 12.4553C9.17386 12.4553 9.17387 12.4553 9.17389 12.4552L13.3926 8.23658L8.70075 12.4552C8.70077 12.4553 8.7008 12.4553 8.70082 12.4553ZM8.70082 11.9822L8.7715 12.0529M8.70082 11.9822L8.70078 11.9822L8.7715 12.0529M8.70082 11.9822L12.3486 8.33438M8.7715 12.0529L12.4901 8.33438H12.3486M12.3486 8.33438L12.4486 8.23438H12.59L12.4486 7.76563L12.3486 7.66563M12.3486 8.33438L2.84357 8.33438C2.75488 8.33438 2.66983 8.29915 2.60713 8.23645C2.54442 8.17374 2.50919 8.08869 2.50919 8.00001C2.50919 7.91133 2.54442 7.82628 2.60713 7.76357C2.66984 7.70086 2.75488 7.66563 2.84357 7.66563L12.3486 7.66563M12.3486 7.66563H12.4901L12.59 7.76563L13.3926 8.23654C13.4237 8.20549 13.4483 8.16863 13.4651 8.12806C13.482 8.08746 13.4906 8.04395 13.4906 8.00001C13.4906 7.95607 13.482 7.91256 13.4651 7.87196C13.4483 7.83139 13.4237 7.79452 13.3926 7.76348C13.3926 7.76346 13.3926 7.76345 13.3926 7.76344L9.17385 3.54473C9.14279 3.51367 9.10591 3.48903 9.06533 3.47222C9.02474 3.4554 8.98124 3.44675 8.93732 3.44675C8.89339 3.44675 8.84989 3.4554 8.80931 3.47222C8.76872 3.48903 8.73185 3.51367 8.70078 3.54473C8.66972 3.57579 8.64508 3.61266 8.62827 3.65325C8.61146 3.69383 8.60281 3.73733 8.60281 3.78126C8.60281 3.82519 8.61146 3.86868 8.62827 3.90927C8.64508 3.94985 8.66972 3.98673 8.70078 4.01779L12.3486 7.66563Z"
                fill="#201F1D" stroke="#201F1D" stroke-width="0.2" />
            </svg>
          </a>
        </div>
      </article>
      <article class="card-item">
        <div class="card-item__inner">
          <div class="card-item__top">
            <div class="card-item__img">
              <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M21.0003 0.166687C9.52116 0.166687 0.166992 9.52085 0.166992 21C0.166992 32.4792 9.52116 41.8334 21.0003 41.8334C32.4795 41.8334 41.8337 32.4792 41.8337 21C41.8337 9.52085 32.4795 0.166687 21.0003 0.166687ZM2.27116 21C2.27116 18.2917 2.85449 15.7084 3.89616 13.375L12.8337 37.8542C6.58366 34.8125 2.27116 28.4167 2.27116 21ZM21.0003 39.7292C19.167 39.7292 17.3962 39.4584 15.7087 38.9584L21.3337 22.625L27.0837 38.3959C27.1253 38.4792 27.167 38.5834 27.2087 38.6459C25.2712 39.3542 23.1878 39.7292 21.0003 39.7292ZM23.5837 12.2084C24.7087 12.1459 25.7295 12.0209 25.7295 12.0209C26.7295 11.8959 26.6253 10.4167 25.6045 10.4792C25.6045 10.4792 22.5628 10.7084 20.6045 10.7084C18.7712 10.7084 15.667 10.4792 15.667 10.4792C14.667 10.4375 14.542 11.9792 15.5628 12.0417C15.5628 12.0417 16.5212 12.1667 17.5212 12.2292L20.4378 20.2292L16.3337 32.5209L9.52116 12.2084C10.6462 12.1667 11.667 12.0417 11.667 12.0417C12.667 11.9167 12.5628 10.4375 11.542 10.5C11.542 10.5 8.50033 10.7292 6.54199 10.7292C6.18783 10.7292 5.77116 10.7292 5.33366 10.7084C8.70866 5.62502 14.4587 2.27085 21.0003 2.27085C25.8753 2.27085 30.3128 4.12502 33.6462 7.18752C33.5628 7.18752 33.4795 7.16669 33.3962 7.16669C31.5628 7.16669 30.2503 8.77085 30.2503 10.5C30.2503 12.0417 31.1462 13.3542 32.0837 14.8959C32.792 16.1459 33.6253 17.75 33.6253 20.0625C33.6253 21.6667 33.0003 23.5209 32.2087 26.125L30.3337 32.375L23.5837 12.2084ZM37.4378 12.0209C39.7778 16.3034 40.3535 21.3304 39.0421 26.0311C37.7307 30.7317 34.636 34.7347 30.417 37.1875L36.1462 20.6459C37.2087 17.9792 37.5628 15.8334 37.5628 13.9375C37.5628 13.25 37.5212 12.6042 37.4378 12.0209Z"
                  fill="black" />
              </svg>
            </div>
            <h4 class="card-item__caption">Service 1</h4>
          </div>
          <!-- Discount-->
          <div class="card-item__discount"><span>35</span>%</div>
          <!-- Discount-->
        </div>
        <p class="card-item__text">
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard
        </p>
        <div class="card-item__link-box">
          <a class="card-item__link" href="#">Learn more
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M8.70082 12.4553C8.66974 12.4243 8.64507 12.3874 8.62824 12.3468C8.61142 12.3062 8.60276 12.2627 8.60276 12.2188C8.60276 12.1748 8.61142 12.1313 8.62824 12.0907C8.64507 12.0501 8.66974 12.0132 8.70082 11.9822M8.70082 12.4553L8.7715 12.0529M8.70082 12.4553C8.73186 12.4864 8.76871 12.511 8.80927 12.5278C8.84986 12.5447 8.89338 12.5533 8.93732 12.5533C8.98126 12.5533 9.02477 12.5447 9.06536 12.5278C9.10594 12.511 9.1428 12.4864 9.17385 12.4553C9.17386 12.4553 9.17387 12.4553 9.17389 12.4552L13.3926 8.23658L8.70075 12.4552C8.70077 12.4553 8.7008 12.4553 8.70082 12.4553ZM8.70082 11.9822L8.7715 12.0529M8.70082 11.9822L8.70078 11.9822L8.7715 12.0529M8.70082 11.9822L12.3486 8.33438M8.7715 12.0529L12.4901 8.33438H12.3486M12.3486 8.33438L12.4486 8.23438H12.59L12.4486 7.76563L12.3486 7.66563M12.3486 8.33438L2.84357 8.33438C2.75488 8.33438 2.66983 8.29915 2.60713 8.23645C2.54442 8.17374 2.50919 8.08869 2.50919 8.00001C2.50919 7.91133 2.54442 7.82628 2.60713 7.76357C2.66984 7.70086 2.75488 7.66563 2.84357 7.66563L12.3486 7.66563M12.3486 7.66563H12.4901L12.59 7.76563L13.3926 8.23654C13.4237 8.20549 13.4483 8.16863 13.4651 8.12806C13.482 8.08746 13.4906 8.04395 13.4906 8.00001C13.4906 7.95607 13.482 7.91256 13.4651 7.87196C13.4483 7.83139 13.4237 7.79452 13.3926 7.76348C13.3926 7.76346 13.3926 7.76345 13.3926 7.76344L9.17385 3.54473C9.14279 3.51367 9.10591 3.48903 9.06533 3.47222C9.02474 3.4554 8.98124 3.44675 8.93732 3.44675C8.89339 3.44675 8.84989 3.4554 8.80931 3.47222C8.76872 3.48903 8.73185 3.51367 8.70078 3.54473C8.66972 3.57579 8.64508 3.61266 8.62827 3.65325C8.61146 3.69383 8.60281 3.73733 8.60281 3.78126C8.60281 3.82519 8.61146 3.86868 8.62827 3.90927C8.64508 3.94985 8.66972 3.98673 8.70078 4.01779L12.3486 7.66563Z"
                fill="#201F1D" stroke="#201F1D" stroke-width="0.2" />
            </svg>
          </a>
        </div>
      </article>
      <article class="card-item">
        <div class="card-item__inner">
          <div class="card-item__top">
            <div class="card-item__img">
              <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M21.0003 0.166687C9.52116 0.166687 0.166992 9.52085 0.166992 21C0.166992 32.4792 9.52116 41.8334 21.0003 41.8334C32.4795 41.8334 41.8337 32.4792 41.8337 21C41.8337 9.52085 32.4795 0.166687 21.0003 0.166687ZM2.27116 21C2.27116 18.2917 2.85449 15.7084 3.89616 13.375L12.8337 37.8542C6.58366 34.8125 2.27116 28.4167 2.27116 21ZM21.0003 39.7292C19.167 39.7292 17.3962 39.4584 15.7087 38.9584L21.3337 22.625L27.0837 38.3959C27.1253 38.4792 27.167 38.5834 27.2087 38.6459C25.2712 39.3542 23.1878 39.7292 21.0003 39.7292ZM23.5837 12.2084C24.7087 12.1459 25.7295 12.0209 25.7295 12.0209C26.7295 11.8959 26.6253 10.4167 25.6045 10.4792C25.6045 10.4792 22.5628 10.7084 20.6045 10.7084C18.7712 10.7084 15.667 10.4792 15.667 10.4792C14.667 10.4375 14.542 11.9792 15.5628 12.0417C15.5628 12.0417 16.5212 12.1667 17.5212 12.2292L20.4378 20.2292L16.3337 32.5209L9.52116 12.2084C10.6462 12.1667 11.667 12.0417 11.667 12.0417C12.667 11.9167 12.5628 10.4375 11.542 10.5C11.542 10.5 8.50033 10.7292 6.54199 10.7292C6.18783 10.7292 5.77116 10.7292 5.33366 10.7084C8.70866 5.62502 14.4587 2.27085 21.0003 2.27085C25.8753 2.27085 30.3128 4.12502 33.6462 7.18752C33.5628 7.18752 33.4795 7.16669 33.3962 7.16669C31.5628 7.16669 30.2503 8.77085 30.2503 10.5C30.2503 12.0417 31.1462 13.3542 32.0837 14.8959C32.792 16.1459 33.6253 17.75 33.6253 20.0625C33.6253 21.6667 33.0003 23.5209 32.2087 26.125L30.3337 32.375L23.5837 12.2084ZM37.4378 12.0209C39.7778 16.3034 40.3535 21.3304 39.0421 26.0311C37.7307 30.7317 34.636 34.7347 30.417 37.1875L36.1462 20.6459C37.2087 17.9792 37.5628 15.8334 37.5628 13.9375C37.5628 13.25 37.5212 12.6042 37.4378 12.0209Z"
                  fill="black" />
              </svg>
            </div>
            <h4 class="card-item__caption">Service 1</h4>
          </div>
          <!-- Discount-->
          <div class="card-item__discount"><span>35</span>%</div>
          <!-- Discount-->
        </div>
        <p class="card-item__text">
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard
        </p>
        <div class="card-item__link-box">
          <a class="card-item__link" href="#">Learn more
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M8.70082 12.4553C8.66974 12.4243 8.64507 12.3874 8.62824 12.3468C8.61142 12.3062 8.60276 12.2627 8.60276 12.2188C8.60276 12.1748 8.61142 12.1313 8.62824 12.0907C8.64507 12.0501 8.66974 12.0132 8.70082 11.9822M8.70082 12.4553L8.7715 12.0529M8.70082 12.4553C8.73186 12.4864 8.76871 12.511 8.80927 12.5278C8.84986 12.5447 8.89338 12.5533 8.93732 12.5533C8.98126 12.5533 9.02477 12.5447 9.06536 12.5278C9.10594 12.511 9.1428 12.4864 9.17385 12.4553C9.17386 12.4553 9.17387 12.4553 9.17389 12.4552L13.3926 8.23658L8.70075 12.4552C8.70077 12.4553 8.7008 12.4553 8.70082 12.4553ZM8.70082 11.9822L8.7715 12.0529M8.70082 11.9822L8.70078 11.9822L8.7715 12.0529M8.70082 11.9822L12.3486 8.33438M8.7715 12.0529L12.4901 8.33438H12.3486M12.3486 8.33438L12.4486 8.23438H12.59L12.4486 7.76563L12.3486 7.66563M12.3486 8.33438L2.84357 8.33438C2.75488 8.33438 2.66983 8.29915 2.60713 8.23645C2.54442 8.17374 2.50919 8.08869 2.50919 8.00001C2.50919 7.91133 2.54442 7.82628 2.60713 7.76357C2.66984 7.70086 2.75488 7.66563 2.84357 7.66563L12.3486 7.66563M12.3486 7.66563H12.4901L12.59 7.76563L13.3926 8.23654C13.4237 8.20549 13.4483 8.16863 13.4651 8.12806C13.482 8.08746 13.4906 8.04395 13.4906 8.00001C13.4906 7.95607 13.482 7.91256 13.4651 7.87196C13.4483 7.83139 13.4237 7.79452 13.3926 7.76348C13.3926 7.76346 13.3926 7.76345 13.3926 7.76344L9.17385 3.54473C9.14279 3.51367 9.10591 3.48903 9.06533 3.47222C9.02474 3.4554 8.98124 3.44675 8.93732 3.44675C8.89339 3.44675 8.84989 3.4554 8.80931 3.47222C8.76872 3.48903 8.73185 3.51367 8.70078 3.54473C8.66972 3.57579 8.64508 3.61266 8.62827 3.65325C8.61146 3.69383 8.60281 3.73733 8.60281 3.78126C8.60281 3.82519 8.61146 3.86868 8.62827 3.90927C8.64508 3.94985 8.66972 3.98673 8.70078 4.01779L12.3486 7.66563Z"
                fill="#201F1D" stroke="#201F1D" stroke-width="0.2" />
            </svg>
          </a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- section team start -->
<?php get_template_part('template-parts/home-page/home', 'team'); ?>
<!-- section team end -->


<!-- section faqs start -->
<?php get_template_part('template-parts/home-page/home', 'faqs'); ?>
<!-- section faqs end -->


<?php
get_footer();
