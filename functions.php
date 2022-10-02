<?php

//Creates the menu
function epicure_menus()
{
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'footer-menu' => 'Footer Menu'
    ));
}
add_action('init', 'epicure_menus');

// Adds Stylesheets and JS files
function epicure_scripts()
{
    // Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '8.0.1');

    // Main Stylesheet
    wp_enqueue_style('style', get_stylesheet_uri() , array('normalize'), '1.0.0');

    wp_enqueue_style('hero-banner-style', get_template_directory_uri() . '/assets/css/hero-banner.css', array('normalize'), '1.0.0');

    wp_enqueue_style('highest-rated-style', get_template_directory_uri() . '/assets/css/highest-rated.css', array('normalize'), '1.0.0');

    wp_enqueue_style('signature-dish-style', get_template_directory_uri() . '/assets/css/signature-dish.css', array('normalize'), '1.0.0');

    wp_enqueue_style('dish-icons-style', get_template_directory_uri() . '/assets/css/dish-icons.css', array('normalize'), '1.0.0');

    wp_enqueue_style('featured-chef-style', get_template_directory_uri() . '/assets/css/featured-chef.css', array('normalize'), '1.0.0');

    wp_enqueue_style('about-us-style', get_template_directory_uri() . '/assets/css/about-us.css', array('normalize'), '1.0.0');

    wp_enqueue_script('jquery');

}
add_action('wp_enqueue_scripts', 'epicure_scripts');

//Enable Feature images and other stuff

function epicure_setup()
{
    //Register new image size
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 644, true);

    //Add featured image
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme', 'epicure_setup');

?>
