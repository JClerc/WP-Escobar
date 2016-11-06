<?php

add_action('init', function () {

    $labels = [
        'name'               => 'Témoignages',
        'singular_name'      => 'Témoignage',
        'all_items'          => 'Toutes les témoignages',
        'add_new'            => 'Ajouter un témoignage',
        'add_new_item'       => 'Ajouter un nouveau témoignage',
        'edit_item'          => 'Modifier le témoignage',
        'new_item'           => 'Nouveau témoignage',
        'view_item'          => 'Voir le témoignage',
        'search_items'       => 'Rechercher un témoignage',
        'not_found'          => 'Aucun résultat',
        'not_found_in_trash' => 'Aucun résultat',
        'parent_item_colon'  => 'Témoignage parent:',
        'menu_name'          => 'Témoignages',
    ];

    $args = [
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => ['title', 'thumbnail', 'editor', 'excerpt', 'comments'],
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-quote',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => ['slug' => 'temoignage'],
        'capability_type'     => ['temoignage', 'temoignages'],
        'map_meta_cap'        => true,
    ];

    register_post_type('temoignage', $args);
});

add_action('init', function () {

    $labels = [
        'name'               => 'Promesses',
        'singular_name'      => 'Promesse',
        'all_items'          => 'Toutes les promesses',
        'add_new'            => 'Ajouter une promesse',
        'add_new_item'       => 'Ajouter une nouvelle promesse',
        'edit_item'          => 'Modifier la promesse',
        'new_item'           => 'Nouvelle promesse',
        'view_item'          => 'Voir la promesse',
        'search_items'       => 'Rechercher une promesse',
        'not_found'          => 'Aucun résultat',
        'not_found_in_trash' => 'Aucun résultat',
        'parent_item_colon'  => 'Promesse parente:',
        'menu_name'          => 'Promesses',
    ];

    $args = [
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => ['title', 'thumbnail', 'editor', 'excerpt'],
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-microphone',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => ['slug' => 'promesse'],
        'capability_type'     => ['promesse', 'promesses'],
        'map_meta_cap'        => true,
    ];

    register_post_type('promesse', $args);
});
