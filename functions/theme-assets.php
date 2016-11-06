<?php

add_action('wp_enqueue_scripts', function () {
    $tpl = get_template_directory_uri();

    // BOOTSRAP JS
    wp_register_script('bootstrap_js', $tpl . '/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap_js');

    // BULMA CSS
    wp_register_style('bootstrap_css', $tpl . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap_css');

    // THEME JS
    wp_register_script('theme_js', $tpl . '/js/theme.js');
    wp_enqueue_script('theme_js');

    // THEME CSS
    wp_register_style('theme_css', $tpl . '/css/css/theme.css');
    wp_enqueue_style('theme_css');
});
