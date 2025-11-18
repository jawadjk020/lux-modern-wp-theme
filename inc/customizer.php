<?php
/**
 * Lux Modern Theme Customizer
 *
 * @package LuxModern
 */

function luxmodern_customize_register($wp_customize) {
    // Add a section for theme options
    $wp_customize->add_section('luxmodern_options', array(
        'title'    => __('Lux Modern Options', 'lux-modern'),
        'priority' => 30,
    ));

    // Primary Color
    $wp_customize->add_setting('luxmodern_primary_color', array(
        'default'           => '#2563EB',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'luxmodern_primary_color', array(
        'label'    => __('Primary Color', 'lux-modern'),
        'section'  => 'luxmodern_options',
        'settings' => 'luxmodern_primary_color',
    )));

    // Footer Text
    $wp_customize->add_setting('luxmodern_footer_text', array(
        'default'           => 'Building beautiful digital experiences for modern businesses.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('luxmodern_footer_text', array(
        'label'    => __('Footer Description', 'lux-modern'),
        'section'  => 'luxmodern_options',
        'type'     => 'textarea',
    ));
}
add_action('customize_register', 'luxmodern_customize_register');
