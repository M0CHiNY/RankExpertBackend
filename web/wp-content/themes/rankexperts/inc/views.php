
<?php

function custom_post_views_field()
{
  global $post;

  // Get the current value of the number of views
  $views = get_post_meta($post->ID, 'post_views', true);

  // Display a field for entering the number of views
  echo '<label for="post_views">Views:</label>';
  echo '<input type="number" name="post_views" id="post_views" value="' . esc_attr($views) . '" />';
}

// Save the value of the number of views when saving the post
function save_custom_post_views_field($post_id)
{
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

  if (isset($_POST['post_views'])) {
    $views = sanitize_text_field($_POST['post_views']);
    update_post_meta($post_id, 'post_views', $views);
  }
}

// Add field admin panel
add_action('add_meta_boxes', function () {
  add_meta_box('custom_post_views', 'Post Views', 'custom_post_views_field', 'post', 'normal', 'high');
});

// Save the value when saving the post
add_action('save_post', 'save_custom_post_views_field');
