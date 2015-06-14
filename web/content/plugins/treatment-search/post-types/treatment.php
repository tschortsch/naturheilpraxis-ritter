<?php
// ===================================================
// Register Post Type
// ===================================================

function register_treatment_post_type() {

    $labels  = array(
        'name'               => __( 'Treatment Methods', 'nhpb' ),
        'singular_name'      => __( 'Treatment Method', 'nhpb' ),
        'menu_name'          => __( 'Treatment', 'nhpb' ),
        'name_admin_bar'     => __( 'Treatment', 'nhpb' ),
        'parent_item_colon'  => __( 'Parent Treatment Method:', 'nhpb' ),
        'all_items'          => __( 'All Treatment Methods', 'nhpb' ),
        'add_new_item'       => __( 'Add New Treatment Method', 'nhpb' ),
        'add_new'            => __( 'Add New', 'nhpb' ),
        'new_item'           => __( 'New Treatment Method', 'nhpb' ),
        'edit_item'          => __( 'Edit Treatment Method', 'nhpb' ),
        'update_item'        => __( 'Update Treatment Method', 'nhpb' ),
        'view_item'          => __( 'View Treatment Method', 'nhpb' ),
        'search_items'       => __( 'Search Treatment Method', 'nhpb' ),
        'not_found'          => __( 'Not found', 'nhpb' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'nhpb' ),
    );
    $rewrite = array(
        'slug'       => 'treatment',
        'with_front' => false,
        'pages'      => true,
        'feeds'      => true,
    );
    $args    = array(
        'label'               => __( 'Treatment Method', 'nhpb' ),
        'description'         => __( 'Treatment Methods', 'nhpb' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'comments' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-category',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'rewrite'             => $rewrite,
        'capability_type'     => 'page',
    );
    register_post_type( 'treatment', $args );
}

add_action( 'init', 'register_treatment_post_type', 0 );


// ===================================================
// Treatment Functions
// ===================================================
