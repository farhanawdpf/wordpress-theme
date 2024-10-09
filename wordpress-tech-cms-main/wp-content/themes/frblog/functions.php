<?php
function add_styles() {
    wp_enqueue_style('style',get_theme_file_uri('blog.css'));
    wp_enqueue_style('style1',get_theme_file_uri('style.css'));
    wp_enqueue_style('bootstrap',get_theme_file_uri('assets/dist/css/bootstrap.min.css'));
}
add_action('wp_enqueue_scripts','add_styles');

function mytheme_register_nav_menu(){
    register_nav_menus(
        array(
            'primary_menu' => __('Primary Menu', 'text_domain'),
            'footer_nav' => __('Footer Menu', 'text_domain'),
        )
        );
}
add_action('after_setup_theme','mytheme_register_nav_menu', 0);
?>