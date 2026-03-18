<?php
/**
 * Eske Studio Theme Functions
 * 
 * This file is like the control center of your theme.
 * WordPress automatically loads it, and everything here
 * runs before any page is displayed.
 */

// =============================================
// ENQUEUE STYLES AND FONTS
// This tells WordPress which CSS files and fonts to load.
// 'wp_enqueue_style' is the proper way to add CSS in WordPress
// (never hardcode <link> tags in templates).
// =============================================
function eskestudio_styles() {
    // Google Fonts
    wp_enqueue_style(
        'eskestudio-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=DM+Serif+Display:ital@0;1&display=swap',
        array(),
        null
    );

    // Main stylesheet (style.css in theme root)
    wp_enqueue_style(
        'eskestudio-style',
        get_stylesheet_uri(),
        array('eskestudio-fonts'),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'eskestudio_styles');

// =============================================
// ENQUEUE JAVASCRIPT
// Our scroll-triggered animation script.
// =============================================
function eskestudio_scripts() {
    wp_enqueue_script(
        'eskestudio-animations',
        get_template_directory_uri() . '/assets/js/animations.js',
        array(),
        '1.0.0',
        true  // 'true' loads the script in the footer (better performance)
    );
}
add_action('wp_enqueue_scripts', 'eskestudio_scripts');

// =============================================
// REGISTER NAVIGATION MENU
// This lets you manage nav links from the WordPress
// admin panel (Appearance > Menus) instead of
// hardcoding them in the template.
// =============================================
function eskestudio_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'eskestudio'),
        'footer'  => __('Footer Navigation', 'eskestudio'),
    ));
}
add_action('init', 'eskestudio_menus');

// =============================================
// THEME SUPPORT
// Enables WordPress features that themes need
// to opt into explicitly.
// =============================================
function eskestudio_theme_support() {
    // Let WordPress handle the <title> tag
    add_theme_support('title-tag');

    // Enable featured images (thumbnails) on posts
    add_theme_support('post-thumbnails');

    // Set a custom image size for the post grid (square)
    add_image_size('post-grid-square', 600, 600, true);

    // Set a custom image size for portfolio projects
    add_image_size('project-image', 800, 600, true);

    // Enable HTML5 markup for search forms, comments, etc.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'eskestudio_theme_support');

// =============================================
// CUSTOM EXCERPT LENGTH
// Shorter excerpts for the post grid cards.
// =============================================
function eskestudio_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'eskestudio_excerpt_length');

// =============================================
// REMOVE EXCERPT "[...]" SUFFIX
// =============================================
function eskestudio_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'eskestudio_excerpt_more');
