<?php

function enqueue_styles() {
    wp_register_style('style', get_template_directory_uri() . '/dist/css/app.css', [], 1, 'all');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'enqueue_styles'); ?>