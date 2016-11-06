<?php

add_action('after_switch_theme', function () {

    $capabilities = [
        'read',
        'read_temoignage',
        'edit_temoignage',
        'edit_temoignages',
        'delete_temoignage',
        'delete_temoignages',
    ];

    add_role('adherent', __('Adhérent'), $capabilities);
    add_role('membre', __('Membre'), $capabilities);

    $supporter = get_role('adherent');
    $member = get_role('membre');

    // foreach ([$supporter, $member] as $role) {
    //     $role->add_cap('read');
    //     $role->add_cap('read_temoignage');
    //     $role->add_cap('edit_temoignage');
    //     $role->add_cap('edit_temoignages');
    //     $role->add_cap('delete_temoignage');
    //     $role->add_cap('delete_temoignages');
    // }

    $admin = get_role('administrator');

    foreach (['temoignage', 'promesse'] as $type) {
        $admin->add_cap('read_' . $type);
        $admin->add_cap('edit_' . $type);
        $admin->add_cap('edit_' . $type . 's');
        $admin->add_cap('delete_' . $type);
        $admin->add_cap('delete_' . $type . 's');
        $admin->add_cap('publish_' . $type . 's');
        $admin->add_cap('read_private_' . $type . 's');
        $admin->add_cap('edit_others_' . $type . 's');
        $admin->add_cap('edit_published_' . $type . 's');
        $admin->add_cap('delete_published_' . $type . 's');
    }
});
