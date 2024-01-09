<?php 

// Setting customizer for logos

function rankexperts_theme_customizer($wp_customize) {

    $wp_customize->add_setting('header_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label'    => __('Header Logo', 'rankexperts'),
        'section'  => 'title_tagline',
        'settings' => 'header_logo',
    )));

    // Нижній логотип
    $wp_customize->add_setting('footer_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label'    => __('Footer Logo', 'rankexperts'),
        'section'  => 'title_tagline',
        'settings' => 'footer_logo',
    )));
}
add_action('customize_register', 'rankexperts_theme_customizer');