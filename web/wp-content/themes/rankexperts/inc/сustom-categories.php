<?php
function services_categories()
{

    $args = array(
        'label' => 'Categories',
        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy('categories', 'services', $args);
}

// Викликати функцію реєстрації таксономії
add_action('init', 'services_categories');


