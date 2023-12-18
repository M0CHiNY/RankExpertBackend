<?php if(get_field('subhead_display', get_the_ID())): ?>
<section class="subhead" id="particles-js">
  <div class="container">
    <div class="subhead__wrap">
      <h1 class="subhead__title">
        <?php echo get_field('subhead_title', get_the_ID(), false); ?>
      </h1>
      <p class="subhead__descr">
        <?php echo get_field('subhead_description', get_the_ID()); ?>
      </p>
      <div>
        <?php
        $subhead_button_name = get_field('subhead_button_name', get_the_ID());
        if (!empty($subhead_button_name)) :
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