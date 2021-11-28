<?php

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('html5');
});

add_action('wp_enqueue_scripts', 'mw_wht_enqueue_styles');
function mw_wht_enqueue_styles()
{
    wp_register_script('slick-slider', get_stylesheet_directory_uri(). '/assets/vendor/slick.min.js', ['jquery'], '1.9.0', true);
    wp_register_script('wht-scripts', get_stylesheet_directory_uri(). '/assets/js/wht.js', ['jquery', 'slick-slider'], wp_get_theme()->get('Version'), true);
    wp_enqueue_script('wht-scripts');

    wp_register_style('parent', get_template_directory_uri() . '/style.css', '2.8');
    wp_register_style('wht-main', get_stylesheet_directory_uri() . '/assets/css/main.min.css', wp_get_theme()->get('Version'));

    wp_enqueue_style(
        'wht-theme',
        get_stylesheet_directory_uri() . '/style.css',
        [
            'parent',
            'ghostkit',
            'wht-main',
        ],
        wp_get_theme()->get('Version')
    );
}

add_action('after_setup_theme', 'mw_wht_after_setup_theme');
function mw_wht_after_setup_theme()
{
    register_nav_menus([
        'footer_quicklinks' => __('Footer Quicklinks', 'wht'),
        'footer_social' => __('Footer Social', 'wht'),
    ]);
}

function child_theme_setup()
{
    remove_filter('excerpt_more', 'twentyten_auto_excerpt_more');
    add_filter('excerpt_more', function () {
        global $post;
        return sprintf(
            '<br><a class="read-more" href="%s">%s</a>',
            get_permalink($post->ID),
            __('weiterlesen', 'wht')
        );
    });
}
add_action('after_setup_theme', 'child_theme_setup');

add_action('init', function () {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page();
    }
});
