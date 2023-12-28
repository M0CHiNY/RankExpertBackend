<?php 
if (get_field('form-contacs__display', 'options')) : 
if (get_field('contacs-form__do_shortcode', 'options')) : 
?>
<div class="contact__form">
  <?php echo do_shortcode(get_field('contacs-form__do_shortcode', 'option')); ?>
</div>
<?php 
endif; 
endif; 
?>