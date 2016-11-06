<?php

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_image_size('thumbnail', 450, 300, true);
    add_image_size('thumbnail_full', 1450, 800, true);
});
