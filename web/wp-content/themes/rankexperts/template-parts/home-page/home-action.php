<?php if(get_field('our_advantages_display', get_the_ID())): ?>
<?php if(get_field('our_advantages_title', get_the_ID()) || get_field('our_advantages_descr', get_the_ID())): ?>
  <section class="action">
  <div class="container">
    <div class="action__inner">
      <div class="action__items">
        <div class="action__item">
          <h2 class="action__item-title">
            <?php echo get_field('our_advantages_title', get_the_ID(), false) ?>
          </h2>
          <p>
            <?php echo get_field('our_advantages_descr', get_the_ID()); ?>
          </p>
        </div>
        <div class="action__item">
          <?php if($actionBtn = get_field('our_advantages_btnName', get_the_ID())): ?>
          <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150" fill="none">
            <path d="M78.8175 4.23915C46.4523 4.77381 -6.36378 31.4501 7.47958 136.222C7.47958 74.5007 42.2339 43.753 60.7454 43.753C72.9681 43.753 81.4275 53.9908 82.37 73.8555H70.4778L72.5925 77.8654L106.266 141.816L108.683 146.411L111.109 141.815L144.782 77.866L146.897 73.8558H129.483C128.432 30.6465 105.797 4.46473 80.3468 4.23915C79.8437 4.23417 79.3316 4.23036 78.8175 4.23915ZM77.4722 17.3035C102.537 16.9763 120.296 39.4716 121.033 79.3303H137.824L108.691 134.665L79.5499 79.33H98.7672C98.0869 38.2534 81.1158 20.1972 48.4586 26.5223C58.7594 20.4145 68.5779 17.4198 77.4719 17.3032L77.4722 17.3035Z" fill="#F5F6F0" />
          </svg>
          <button class="btn btn-modal" type="button" data-ui-toggle="my-dialog">
            <?php echo get_field('our_advantages_btnName', get_the_ID()); ?>
          </button>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>