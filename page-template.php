<?php

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

Timber::render(array('pages/template-' . $template . '.twig'), $context);
