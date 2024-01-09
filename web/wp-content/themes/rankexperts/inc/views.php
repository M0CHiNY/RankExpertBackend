<?php

if (!function_exists('function_name_given')) :
  /**
   * Get the value of views.
   */
  function function_name_given($postID)
  {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if ($count == '') {
      $count = 1;
      add_post_meta($postID, $count_key, $count, true);
    } else {
      $count++;
      update_post_meta($postID, $count_key, $count);
    }
    return intval($count);
  }
endif;

// Додати поле в адміністративній панелі для введення значення лічильника
function add_custom_views_field()
{
  add_meta_box(
    'custom_views_box',
    'Custom Views Count',
    'custom_views_box_callback',
    'post', // Змініть на свій тип запису
    'normal',
    'high'
  );
}
add_action('add_meta_boxes', 'add_custom_views_field');

function custom_views_box_callback($post)
{
  $count = get_post_meta($post->ID, 'wpb_post_views_count', true);
?>
  <label for="custom_views_count">Custom Views Count:</label>
  <input type="text" id="custom_views_count" name="custom_views_count" value="<?php echo esc_attr($count); ?>" />
<?php
}

function save_custom_views_count($post_id)
{
  if (array_key_exists('custom_views_count', $_POST)) {
    update_post_meta(
      $post_id,
      'wpb_post_views_count',
      sanitize_text_field($_POST['custom_views_count'])
    );
  }
}
add_action('save_post', 'save_custom_views_count');
