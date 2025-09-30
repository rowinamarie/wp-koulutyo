function my_custom_theme_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');