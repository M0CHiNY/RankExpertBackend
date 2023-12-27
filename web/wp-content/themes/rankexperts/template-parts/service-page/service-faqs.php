<?php if (get_field('faqs__display', get_the_ID())) : ?>
  <section class="faqs">
    <div class="container">
      <h2 class="faqs__title title"><?php echo get_field('faqs__title', get_the_ID()); ?></h2>
      <div data-ui-tablist class="accordion">
        <?php
        if (have_rows('faqs__list')) :
          $countTab = 0;
          while (have_rows('faqs__list')) : the_row();
            if (!empty(get_sub_field('faqs__question')) && !empty(get_sub_field('faqs__answer'))) :
              $countTab++;
        ?>
              <div data-ui-tablist-item class="<?php echo $countTab == 1 ? 'ui-active': '';?>">
                <button data-ui-tablist-tab class="accordion-tab <?php echo $countTab == 1 ? 'ui-active': '';?>">
                  <?php echo get_sub_field('faqs__question', get_the_ID()); ?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                  </svg>
                </button>
                <div data-ui-tablist-tabpanel data-ui-transition-name="collapse" class="<?php echo $countTab == 1 ? 'ui-active': '';?>">
                  <div class="accordion-panel">
                    <?php echo get_sub_field('faqs__answer', get_the_ID()); ?>
                  </div>
                </div>
              </div>
        <?php
            endif;
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </section>
<?php
endif;
?>