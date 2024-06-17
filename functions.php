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

//Register the menus

function construct_education_register_nav_menus()
{
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'construct-education'),
            'footer-menu-1' => esc_html__('Footer Menu 1', 'construct-education'),
            'footer-menu-2' => esc_html__('Footer Menu 2', 'construct-education'),
            'footer-menu-3' => esc_html__('Footer Menu 3', 'construct-education')
        )
    );
}

add_action('init', 'construct_education_register_nav_menus');

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

//Enable page excerpt
add_post_type_support('page', 'excerpt');

//Enqueue scripts and styles.

function construct_education_scripts()
{
    //Open Sans google font
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');

    //Bootstrap css
    wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    //Flickity slider css
    wp_enqueue_style('flickity-css', '//unpkg.com/flickity@2/dist/flickity.min.css');

    //Template css
    wp_enqueue_style('template-style', get_theme_file_uri('/css/styles.css'));

    //Custom style
    wp_enqueue_style('construct-education-style', get_stylesheet_uri());

    //Bootstrap scripts
    wp_enqueue_script('bootstrap-script', '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array('jquery'), false, true);

    //Flickity slider scripts
    wp_enqueue_script('flickity-script', '//unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array('jquery'), false, true);

    //Custom scripts
    wp_enqueue_script('construct-education-script', get_theme_file_uri('/js/scripts.js'), array(), false, true);
}

add_action('wp_enqueue_scripts', 'construct_education_scripts');

//This class is used to replace the default nav ul li links to paragraphs for the footer menus

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
    // Start Level
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        // No <ul> wrapper for submenu items
    }

    // End Level
    function end_lvl(&$output, $depth = 0, $args = array())
    {
        // No </ul> wrapper for submenu items
    }

    // Start Element
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= '<p' . $class_names . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    // End Element
    function end_el(&$output, $item, $depth = 0, $args = array())
    {
        $output .= '</p>';
    }
}
