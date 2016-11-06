<?php

$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;
$context['wp_title'] .= ' - ' . $post->title();
$context['comment_form'] = TimberHelper::get_comment_form();

Timber::render([
    'pages/single-' . $post->ID . '.twig',
    'pages/single-' . $post->post_type . '.twig',
    'pages/single.twig'
], $context);
