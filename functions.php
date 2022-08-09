<?php

function enqueue_styles() {
    wp_register_style('style', get_template_directory_uri() . '/dist/css/app.css', [], rand(111,9999), 'all');
    wp_enqueue_style('style');
}

function enqueue_scripts() {
    wp_register_script('app', get_template_directory_uri() . '/dist/js/app.js', [], 1, true);
    wp_enqueue_script('app');
}

function create_project_post_type() {
    register_post_type('project', array(
        'public' => true,
        'show_in_menu' => true,
        'labels' => array(
            'name' => 'Projects'
        ),
        'menu_icon' => 'dashicons-media-code'
    ));
}

add_action('wp_enqueue_scripts', 'enqueue_styles'); 
add_action('wp_enqueue_scripts', 'enqueue_scripts');
add_action('init', 'create_project_post_type');
?>



