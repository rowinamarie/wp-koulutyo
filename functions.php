<?php
function my_custom_theme_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
}


register_nav_menus(array(
    'header-menu' => __('Header Menu', 'my-custom-theme'),
));

add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');
// 'wp_enqueue_scripts' on hook, jota WordPress ajaa silloin, kun skriptejä ja tyylejä ladataan sivulle.

//Tällä rivillä siis sanotaan:
// "Kun WordPress on lataamassa skriptejä ja tyylejä, aja myös my_custom_theme_enqueue_styles."


//tällä varmistetaan että teemalle rekisteröidään otsikkotuki heti alussa.
function my_custom_theme_wp_title() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'my_custom_theme_wp_title');

function my_custom_theme_setup() {
    add_theme_support ('custom-logo', array (
        'height' => 100,
        'widht' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));
}
add_action ('after_setup_theme', 'my_custom_theme_setup');




?>
