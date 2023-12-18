<?php if(get_field('our_steps_display', get_the_ID())): ?>
<section class="ruls">
  <div class="container">
    <div class="ruls__wrap">
      <h2 class="ruls__title title">
        <?php echo get_field('steps_title'); ?>
      </h2>

      <ul class="infoGraphic ruls__steps">
        <?php if ($steps = get_field('our_steps_cards', get_the_ID())) : ?>
          <?php
          $count = 1;
          foreach ($steps as $step) :
          ?>
            <li class="ruls__item">
              <div class="numberWrap">
                <div class="number fontColor1 ruls__num"><?php echo $count++; ?></div>
                <div class="coverWrap">
                  <div class="numberCover"></div>
                </div>
              </div>
              <div class="ruls__info-box">
                <div class="ruls__info-box-img">
                  <img src="<?php echo $step['step_image']; ?>" />
                </div>
                <h5 class="ruls__info-caption">
                  <?php echo $step['step_title_card']; ?>
                </h5>
                <p class="ruls__info-text">
                  <?php echo  $step['step_description']; ?>
                </p>
              </div>
            </li>
        <?php
          endforeach;
        endif;
        ?>
      </ul>
    </div>
  </div>
</section>
<?php endif; ?>