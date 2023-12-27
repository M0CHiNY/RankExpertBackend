<?php if (get_field('subhead_display', get_the_ID())): ?>
  <?php if (get_field('subhead_title', get_the_ID()) || get_field('subhead_description', get_the_ID())): ?>
    <section class="subhead" id="particles-js">
      <div class="container">
        <div class="subhead__wrap">
          <?php if ($subheadTitle = get_field('subhead_title', get_the_ID(), false)): ?>
            <h1 class="subhead__title">
              <?php echo $subheadTitle; ?>
            </h1>
          <?php endif; ?>
          <?php if ($subheadDescription = get_field('subhead_description', get_the_ID())): ?>
            <p class="subhead__descr">
              <?php echo $subheadDescription; ?>
            </p>
          <?php endif; ?>
          <div>
            <?php
            $subhead_button_name = get_field('subhead_button_name', get_the_ID());
            if (!empty($subhead_button_name)):
              ?>
              <button class="subhead__btn btn" type="button" data-ui-toggle="my-dialog">
                <?php echo esc_html($subhead_button_name); ?>
              </button>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>