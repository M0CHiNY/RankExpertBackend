<?php 
  if (get_field('main-service__display', get_the_ID())) :
  if (get_field('main-service__title', get_the_ID()) || get_sub_field('main-service__info', get_the_ID())) : 
?>
<section class="main-service">
  <div class="container">
    <h2 class="main-service__title title"><?php echo get_field('main-service__title', get_the_ID()); ?></h2>
    <div class="main-service__info">
      <?php echo get_field('main-service__info', get_the_ID()); ?>
    </div>
  </div>
</section>
<?php 
endif;
endif;
?>