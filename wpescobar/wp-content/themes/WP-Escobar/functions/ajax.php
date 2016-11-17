<?php

add_action('wp_enqueue_scripts', function () {
    // Envoyer l'url de admin-ajax.php au fichier main.js via la variable ajaxurl
    // wp_localize_script('theme_js', 'ajaxurl', get_template_directory_uri() . '/functions/ajax-handler.php');
    wp_localize_script('theme_js', 'ajaxurl', admin_url('admin-ajax.php'));
});

$post_function = function () {
    global $wpdb, $_POST;

    $post_id = $_POST['postid'];

    require __DIR__ . '/ajax-handler.php';

    exit;
};

add_action('wp_ajax_ajax-actionpost', $post_function);
add_action('wp_ajax_nopriv_ajax-actionpost', $post_function);
