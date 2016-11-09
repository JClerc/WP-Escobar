<?php

$context = Timber::get_context();

if (isset($query) and !empty($query)) {
    $context['posts'] = Timber::get_posts($query);
} else {
    $post = new TimberPost();
    $context['post'] = $post;
}

Timber::render(array('templates/' . $template . '.twig'), $context);
