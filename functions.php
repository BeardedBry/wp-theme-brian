<?php


// Load Style Sheets
function load_css()
{
    wp_register_style('min', get_template_directory_uri() . '/css/min.css', [], false, 'all'); //name, location, dependencies, version, media (print, screen)
    wp_enqueue_style('min');
}

add_action('wp_enqueue_scripts', 'load_css');

// Load JavaScript
function load_js()
{
    wp_register_script('mainjs', get_template_directory_uri() . '/js/main.js', [], false, true); // true puts link in footer, instead of header.
    wp_enqueue_script('mainjs');
}

add_action('wp_enqueue_scripts', 'load_js');


// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


// Menus
register_nav_menus(

    array(
        'top-nav' => 'Top Nav Location',
        'mobile-nav' => 'Mobile Nav Location',
        'bottom-nav' => 'Footer Nav Location'
    )
);


// Custom Image Sizes
add_image_size('blog-large', 600, 400, true);
add_image_size('blog-small', 318, 200, true);


// Register Side-Bars
function my_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}
add_action('widgets_init','my_sidebars');