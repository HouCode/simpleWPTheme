<?php 

function load_stylesheets()
{
    require_once get_template_directory() . '/assets/wp-bootstrap-navwalker.php';
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
remove_filter('the_content', 'wpautop');


function include_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', '', 1, true);
}

add_action('wp_enque_scripts', 'include_jquery');

add_theme_support('menus');
add_theme_support('post-thumbnails');

add_image_size('small', 300, 300, true);
add_image_size('medium', 500, 500, true);
add_image_size('large', 800, 800, true);

register_nav_menus(
    array(

        'main-menu' => __('Menu Top', 'theme'),
        'footer-menu' => __('Menu Footer', 'theme')
    )
);
?>

