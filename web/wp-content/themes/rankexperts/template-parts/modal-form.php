<?php if (get_field('contacs-form__do_shortcode', 'options')) : ?>
  <dialog class="dialog" data-ui-dialog id="my-dialog" hidden>
    <div data-ui-dialog-backdrop class="dialog-backdrop"></div>
    <div data-ui-dialog-content class="dialog-content">
      <button type="button" class="btn-modal btn--close" data-ui-dismiss aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" stroke-width="2" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
      <?php $image = get_field('form-modal__img', 'options');
      if ($image) :
        // Image variables.
        $url = $image['sizes']['medium_large'];
        $alt = $image['alt'];
      ?>
        <img class="modal-form__img" src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />
      <?php endif; ?>
      <div class="modal-form__for-con7">
        <?php echo do_shortcode(get_field('contacs-form__do_shortcode', 'option')); ?>
      </div>

    </div>
  </dialog>
<?php endif; ?>