<?php
/**
 * Lux Modern Theme Functions
 *
 * @package LuxModern
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function luxmodern_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'lux-modern'),
        'footer' => __('Footer Menu', 'lux-modern'),
    ));
    
    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');
    
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Add support for full and wide align images
    add_theme_support('align-wide');
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');
    
    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'luxmodern_theme_setup');

/**
 * Set content width
 */
if (!isset($content_width)) {
    $content_width = 1280;
}

/**
 * Enqueue scripts and styles
 */
function luxmodern_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'luxmodern-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Sora:wght@400;500;600;700&display=swap',
        array(),
        null
    );
    
    // Design System CSS
    wp_enqueue_style(
        'luxmodern-design-system',
        get_template_directory_uri() . '/assets/css/design-system.css',
        array(),
        '1.0.0'
    );
    
    // Main stylesheet
    wp_enqueue_style(
        'luxmodern-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array('luxmodern-design-system'),
        '1.0.0'
    );
    
    // Animations
    wp_enqueue_style(
        'luxmodern-animations',
        get_template_directory_uri() . '/assets/css/animations.css',
        array(),
        '1.0.0'
    );
    
    // Components
    wp_enqueue_style(
        'luxmodern-components',
        get_template_directory_uri() . '/assets/css/components.css',
        array('luxmodern-design-system'),
        '1.0.0'
    );
    
    // Main JavaScript
    wp_enqueue_script(
        'luxmodern-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
    
    // Navigation script
    wp_enqueue_script(
        'luxmodern-navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        array(),
        '1.0.0',
        true
    );
    
    // Animations script
    wp_enqueue_script(
        'luxmodern-animations',
        get_template_directory_uri() . '/assets/js/animations.js',
        array(),
        '1.0.0',
        true
    );
    
    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'luxmodern_scripts');

/**
 * Register widget areas
 */
function luxmodern_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'lux-modern'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'lux-modern'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 1', 'lux-modern'),
        'id'            => 'footer-1',
        'description'   => __('First footer widget area.', 'lux-modern'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-heading">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 2', 'lux-modern'),
        'id'            => 'footer-2',
        'description'   => __('Second footer widget area.', 'lux-modern'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-heading">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 3', 'lux-modern'),
        'id'            => 'footer-3',
        'description'   => __('Third footer widget area.', 'lux-modern'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-heading">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 4', 'lux-modern'),
        'id'            => 'footer-4',
        'description'   => __('Fourth footer widget area.', 'lux-modern'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-heading">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'luxmodern_widgets_init');

/**
 * Custom template tags
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions
 */
require get_template_directory() . '/inc/customizer.php';
