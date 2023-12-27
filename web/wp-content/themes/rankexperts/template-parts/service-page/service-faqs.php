<?php if (get_field('faqs__display', get_the_ID())): ?>
  <?php if (get_field('faqs__title')): ?>
    <section class="faqs">
      <div class="container">
        <h2 class="faqs__title title">
          <?php echo get_field('faqs__title', get_the_ID()); ?>
        </h2>
        <div data-ui-tablist class="accordion">
          <?php
          $countTab = 1;
          if (have_rows('faqs__list')):

            while (have_rows('faqs__list')):
              the_row();
              if (!empty(get_sub_field('faqs__question')) && !empty(get_sub_field('faqs__answer'))):
                ?>
                <?php if ($countTab === 1): ?>
                  <div data-ui-tablist-item class="ui-active">
                    <button data-ui-tablist-tab class="accordion-tab ui-active">
                      <?php echo get_sub_field('faqs__question', get_the_ID()); ?>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                      </svg>
                    </button>
                    <div data-ui-tablist-tabpanel data-ui-transition-name="collapse">
                      <div class="accordion-panel">
                        <?php echo get_sub_field('faqs__answer', get_the_ID()); ?>
                      </div>
                    </div>
                  </div>
                <?php else: ?>
                  <div data-ui-tablist-item>
                    <button data-ui-tablist-tab class="accordion-tab">
                      <?php echo get_sub_field('faqs__question', get_the_ID()); ?>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                      </svg>
                    </button>
                    <div data-ui-tablist-tabpanel data-ui-transition-name="collapse" hidden>
                      <div class="accordion-panel">
                        <?php echo get_sub_field('faqs__answer', get_the_ID()); ?>
                      </div>
                    </div>
                  </div>
                  <?php
                endif;
              endif;
              $countTab++;
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </section>
    <?php
  endif;
endif;
?>