<?php

function enqueue_styles() {
    wp_register_style('style', get_template_directory_uri() . '/dist/css/app.css', [], rand(111,9999), 'all');
    wp_enqueue_style('style');
}

function enqueue_scripts() {
    wp_register_script('app', get_template_directory_uri() . '/dist/js/app.js', [], 1, true);
    wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'enqueue_styles'); 
add_action('wp_enqueue_scripts', 'enqueue_scripts');
?>




<?php
    $argsDevelopment = array ( 
        'category_name' => 'development',
    );

    $argsDesign = array ( 
        'category_name' => 'design'
    )

    if(class_exists("tab--design active", true)) {
        $the_query = new WP_Query($argsDesign);
        if(have_posts()) {
            while($the_query -> have_posts()) {
                $the_query -> the_post(); ?>
            <?php }
        }
    } ?>
?>;