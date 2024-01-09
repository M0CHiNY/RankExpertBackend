<?php if (get_field('faqs_display', get_the_ID())) : ?>
  <?php if (get_field('faqs_title', get_the_ID())) : ?>
    <section class="faqs">
      <div class="container">
        <h2 class="faqs__title title">
          <?php echo get_field('faqs_title', get_the_ID()); ?>
        </h2>
        <div data-ui-tablist class="accordion">
          <?php
          $countTab = 1;
          if (have_rows('faqs_acordeon')) :
            while (have_rows('faqs_acordeon')) :
              the_row();
              if (!empty(get_sub_field('accordion_question')) && !empty(get_sub_field('accordion_content'))) :
          ?>
                <div data-ui-tablist-item<?php echo $countTab === 1 ? ' class="ui-active"' : ''; ?>>
                  <button data-ui-tablist-tab id="tab-<?php echo $countTab; ?>" class="accordion-tab<?php echo $countTab === 1 ? ' ui-active' : ''; ?>">
                    <?php echo get_sub_field('accordion_question', get_the_ID()); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                    </svg>
                  </button>
                  <div data-ui-tablist-tabpanel data-ui-transition-name="collapse" aria-labelledby="tab-<?php echo $countTab; ?>" <?php echo $countTab === 1 ? '' : ' hidden'; ?>>
                    <div class="accordion-panel">
                      <?php echo get_sub_field('accordion_content', get_the_ID()); ?>
                    </div>
                  </div>
                </div>
          <?php
                ++$countTab;
              endif;
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>