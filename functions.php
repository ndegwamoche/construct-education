<?php

/**
 * construct-education functions and definitions
 * 
 * @link https://github.com/ndegwamoche/construct-education
 *
 * @package construct-education
 */


//Setup theme defaults

function construct_education_setup()
{
    //Enable custom title
    add_theme_support('title-tag');

    //Enable post thumbnails
    add_theme_support('post-thumbnails');

    //Enable custom logo
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 32,
            'width'       => 162,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'construct_education_setup');

//Register default menu

register_nav_menus(
    array(
        'menu-1' => esc_html__('Primary', 'construct-education'),
    )
);

// Remove 'menu-item' class and add 'nav-item' class and some margin 'me-4'

function replace_menu_item_class($classes, $item, $args)
{
    $classes = array_diff($classes, array('menu-item'));
    $classes[] = 'nav-item me-4';
    return $classes;
}
add_filter('nav_menu_css_class', 'replace_menu_item_class', 10, 3);

// Add 'nav-link' class to all menu <a> elements

function add_additional_class_on_a($atts, $item, $args)
{
    $atts['class'] = 'nav-link me-lg-3';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 10, 3);

//Enqueue scripts and styles.

function construct_education_scripts()
{
    //Open Sans google font
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');

    //Bootstrap css
    wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    //Template css
    wp_enqueue_style('template-style', get_theme_file_uri('/css/styles.css'));

    //Custom style
    wp_enqueue_style('construct-education-style', get_stylesheet_uri());

    //Bootstrap scripts
    wp_enqueue_script('bootstrap-script', '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array('jquery'), false, true);

    //Custom scripts
    wp_enqueue_script('construct-education-script', get_theme_file_uri('/js/scripts.js'), array(), false, true);
}

add_action('wp_enqueue_scripts', 'construct_education_scripts');
