<?php


function domi_kunden_cpt() {
    register_post_type('domi_kunden_cpt',
        array(
            'labels'      => array(
                'name'               => _x('Kunden', 'General name', 'wptheme.smartfarming'),
                'singular_name'      => _x('Kunde', 'Singular name', 'wptheme.smartfarming'),
                'menu_name'          => _x('Kunden', 'Menu name', 'wptheme.smartfarming'),
                'parent_item_colon'  => _x('Übergeordneter Kunde', 'Parent item with colon', 'wptheme.smartfarming'),
                'all_items'          => _x('Alle Kunden anzeigen', 'All items', 'wptheme.smartfarming'),
                'view_item'          => _x('Kunde anzeigen', 'View item', 'wptheme.smartfarming'),
                'add_new_item'       => _x('Kunde hinzufügen', 'Add new item', 'wptheme.smartfarming'),
                'add_new'            => _x('Kunde hinzufügen', 'Add new', 'wptheme.smartfarming'),
                'edit_item'          => _x('Kunde bearbeiten', 'Edit item', 'wptheme.smartfarming'),
                'update_item'        => _x('Kunde aktualisieren', 'Update item', 'wptheme.smartfarming'),
                'search_items'       => _x('Kunde suchen', 'Search items', 'wptheme.smartfarming'),
                'not_found'          => _x('Keine Kunden gefunden.', 'Not found', 'wptheme.smartfarming'),
                'not_found_in_trash' => _x('Keine Kunden im Papierkorb gefunden.', 'Not found in trash', 'wptheme.smartfarming'),
            ),
            'description'         => _x('Kunden Informationen', 'Description', 'wpplungin.kunden'),
            'supports'            => ['title', 'thumbnail'],
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'rewrite'             => false,
            'menu_icon'           => 'dashicons-awards',
        )
    );
}
add_action('init', 'domi_kunden_cpt');
?>