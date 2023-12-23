<?php

function rankexsperts_register_post_type()
{

  //  Showcases start

  $labels = array(
    'name' => esc_html_x('Showcases', 'Post type general name', 'rankexsperts'),
    'singular_name' => esc_html_x('Showcase ', 'Post type singular name', 'rankexsperts'),
    'menu_name' => esc_html_x('Showcases', 'Admin Menu text', 'rankexsperts'),
    'name_admin_bar' => esc_html_x('Showcase', 'Add New on Toolbar', 'rankexsperts'),
    'add_new' => esc_html__('Add New', 'rankexsperts'),
    'add_new_item' => esc_html__('Add New showcase', 'rankexsperts'),
    'new_item' => esc_html__('New Showcase', 'rankexsperts'),
    'edit_item' => esc_html__('Edit Showcase', 'rankexsperts'),
    'view_item' => esc_html__('View Showcase', 'rankexsperts'),
    'all_items' => esc_html__('All Showcases', 'rankexsperts'),
    'search_items' => esc_html__('Search Showcases', 'rankexsperts'),
    'parent_item_colon' => esc_html__('Parent Showcases:', 'rankexsperts'),
    'not_found' => esc_html__('No Showcases found.', 'rankexsperts'),
    'not_found_in_trash' => esc_html__('No Showcases found in Trash.', 'rankexsperts'),
    'featured_image' => esc_html_x('Showcase Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'set_featured_image' => esc_html_x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'remove_featured_image' => esc_html_x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'use_featured_image' => esc_html_x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'archives' => esc_html_x('Showcase archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'rankexsperts'),
    'insert_into_item' => esc_html_x('Insert into Showcase', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'rankexsperts'),
    'uploaded_to_this_item' => esc_html_x('Uploaded to this Showcase', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'rankexsperts'),
    'filter_items_list' => esc_html_x('Filter Showcase list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'rankexsperts'),
    'items_list_navigation' => esc_html_x('Showcases list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'rankexsperts'),
    'items_list' => esc_html_x('Showcases list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'rankexsperts'),
  );

  $args = array(
    'labels' => $labels,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'Showcases'),
    'menu_icon' => 'dashicons-awards',
    'show_in_rest' => true,
    'menu_position' => 3
  );

  register_post_type('showcases', $args);

  //  Showcases end

  //  Persons start

  unset($labels);
  unset($args);

  $labels = array(
    'name' => esc_html_x('Persons', 'Post type general name', 'rankexsperts'),
    'singular_name' => esc_html_x('Person', 'Post type singular name', 'rankexsperts'),
    'menu_name' => esc_html_x('Persons', 'Admin Menu text', 'rankexsperts'),
    'name_admin_bar' => esc_html_x('Person', 'Add New on Toolbar', 'rankexsperts'),
    'add_new' => esc_html__('Add New', 'rankexsperts'),
    'add_new_item' => esc_html__('Add New Person', 'rankexsperts'),
    'new_item' => esc_html__('New Person', 'rankexsperts'),
    'edit_item' => esc_html__('Edit Person', 'rankexsperts'),
    'view_item' => esc_html__('View Person', 'rankexsperts'),
    'all_items' => esc_html__('All Persons', 'rankexsperts'),
    'search_items' => esc_html__('Search Persons', 'rankexsperts'),
    'parent_item_colon' => esc_html__('Parent Persons:', 'rankexsperts'),
    'not_found' => esc_html__('No Persons found.', 'rankexsperts'),
    'not_found_in_trash' => esc_html__('No Persons found in Trash.', 'rankexsperts'),
    'featured_image' => esc_html_x('Person Profile Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'set_featured_image' => esc_html_x('Set profile image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'remove_featured_image' => esc_html_x('Remove profile image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'use_featured_image' => esc_html_x('Use as profile image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'archives' => esc_html_x('Person archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'rankexsperts'),
    'insert_into_item' => esc_html_x('Insert into Person', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'rankexsperts'),
    'uploaded_to_this_item' => esc_html_x('Uploaded to this Person', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'rankexsperts'),
    'filter_items_list' => esc_html_x('Filter Person list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'rankexsperts'),
    'items_list_navigation' => esc_html_x('Persons list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'rankexsperts'),
    'items_list' => esc_html_x('Persons list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'rankexsperts'),
  );

  $args = array(
    'labels' => $labels,
    'supports' => array('title', 'thumbnail'),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'rersons'),
    'menu_icon' => 'dashicons-businessperson',
    'show_in_rest' => true,
    'menu_position' => 4
  );

  register_post_type('rersons', $args);

  //  Persons end
  //  Reviews start

  unset($labels);
  unset($args);

  $labels = array(
    'name' => esc_html_x('Reviews', 'Post type general name', 'rankexsperts'),
    'singular_name' => esc_html_x('Review', 'Post type singular name', 'rankexsperts'),
    'menu_name' => esc_html_x('Reviews', 'Admin Menu text', 'rankexsperts'),
    'name_admin_bar' => esc_html_x('Review', 'Add New on Toolbar', 'rankexsperts'),
    'add_new' => esc_html__('Add New', 'rankexsperts'),
    'add_new_item' => esc_html__('Add New Review', 'rankexsperts'),
    'new_item' => esc_html__('New Review', 'rankexsperts'),
    'edit_item' => esc_html__('Edit Review', 'rankexsperts'),
    'view_item' => esc_html__('View Review', 'rankexsperts'),
    'all_items' => esc_html__('All Reviews', 'rankexsperts'),
    'search_items' => esc_html__('Search Reviews', 'rankexsperts'),
    'parent_item_colon' => esc_html__('Parent Reviews:', 'rankexsperts'),
    'not_found' => esc_html__('No Reviews found.', 'rankexsperts'),
    'not_found_in_trash' => esc_html__('No Reviews found in Trash.', 'rankexsperts'),
    'featured_image' => esc_html_x('Review Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'set_featured_image' => esc_html_x('Set review image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'remove_featured_image' => esc_html_x('Remove review image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'use_featured_image' => esc_html_x('Use as review image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'archives' => esc_html_x('Review archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'rankexsperts'),
    'insert_into_item' => esc_html_x('Insert into Review', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'rankexsperts'),
    'uploaded_to_this_item' => esc_html_x('Uploaded to this Review', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'rankexsperts'),
    'filter_items_list' => esc_html_x('Filter Review list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'rankexsperts'),
    'items_list_navigation' => esc_html_x('Reviews list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'rankexsperts'),
    'items_list' => esc_html_x('Reviews list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'rankexsperts'),
  );
  $args = array(
    'labels' => $labels,
    'supports' => array('title'),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'review'),
    'menu_icon' => 'dashicons-buddicons-buddypress-logo',
    'show_in_rest' => true,
    'menu_position' => 5
  );

  register_post_type('review', $args);
  //  Reviews end

  //  Service start
  unset($labels);
  unset($args);

  $labels = array(
    'lebel' => esc_html_x('Services', 'Post type general name', 'rankexsperts'),
    'singular_name' => esc_html_x('Service', 'Post type singular name', 'rankexsperts'),
    'menu_name' => esc_html_x('Services', 'Admin Menu text', 'rankexsperts'),
    'name_admin_bar' => esc_html_x('Service', 'Add New on Toolbar', 'rankexsperts'),
    'add_new' => esc_html__('Add New', 'rankexsperts'),
    'add_new_item' => esc_html__('Add New Service', 'rankexsperts'),
    'new_item' => esc_html__('New Service', 'rankexsperts'),
    'edit_item' => esc_html__('Edit Service', 'rankexsperts'),
    'view_item' => esc_html__('View Service', 'rankexsperts'),
    'all_items' => esc_html__('All Services', 'rankexsperts'),
    'search_items' => esc_html__('Search Services', 'rankexsperts'),
    'parent_item_colon' => esc_html__('Parent Services:', 'rankexsperts'),
    'not_found' => esc_html__('No Services found.', 'rankexsperts'),
    'not_found_in_trash' => esc_html__('No Services found in Trash.', 'rankexsperts'),
    'featured_image' => esc_html_x('Service Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'set_featured_image' => esc_html_x('Set service image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'remove_featured_image' => esc_html_x('Remove service image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'use_featured_image' => esc_html_x('Use as service image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'rankexsperts'),
    'archives' => esc_html_x('Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'rankexsperts'),
    'insert_into_item' => esc_html_x('Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'rankexsperts'),
    'uploaded_to_this_item' => esc_html_x('Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'rankexsperts'),
    'filter_items_list' => esc_html_x('Filter Service list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'rankexsperts'),
    'items_list_navigation' => esc_html_x('Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'rankexsperts'),
    'items_list' => esc_html_x('Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'rankexsperts'),
  );

  $args = array(
    'labels' => $labels,
    'supports' => array('title', 'excerpt'),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'capability_type'    => 'post',
    'show_in_menu' => true,
    'has_archive' => false,
    'rewrite' => array('slug' => 'service'),
    'menu_icon' => 'dashicons-clipboard',
    'show_in_rest' => true,
    'menu_position' => 4
  );

  register_post_type('service', $args);
  //  Service end



}

add_action('init', 'rankexsperts_register_post_type', 99);