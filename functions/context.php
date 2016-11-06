<?php

add_filter('timber_context', function ($context) {
    $context['menu'] = new TimberMenu();
    return $context;
});
