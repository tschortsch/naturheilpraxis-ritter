<?php
// ===================================================
// Register Custom Taxonomy
// ===================================================

function suffering_taxonomy() {

    $labels  = array(
        'name'                       => _x( 'Suffering', 'Taxonomy General Name', 'nhpb' ),
        'singular_name'              => _x( 'Suffering', 'Taxonomy Singular Name', 'nhpb' ),
        'menu_name'                  => __( 'Sufferings', 'nhpb' ),
        'all_items'                  => __( 'All Items', 'nhpb' ),
        'parent_item'                => __( 'Parent Item', 'nhpb' ),
        'parent_item_colon'          => __( 'Parent Item:', 'nhpb' ),
        'new_item_name'              => __( 'New Item Name', 'nhpb' ),
        'add_new_item'               => __( 'Add New Item', 'nhpb' ),
        'edit_item'                  => __( 'Edit Item', 'nhpb' ),
        'update_item'                => __( 'Update Item', 'nhpb' ),
        'view_item'                  => __( 'View Item', 'nhpb' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'nhpb' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'nhpb' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'nhpb' ),
        'popular_items'              => __( 'Popular Items', 'nhpb' ),
        'search_items'               => __( 'Search Items', 'nhpb' ),
        'not_found'                  => __( 'Not Found', 'nhpb' ),
    );
    $rewrite = array(
        'slug'         => 'suffering',
        'with_front'   => true,
        'hierarchical' => true,
    );
    $args    = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => false,
        'rewrite'           => $rewrite,
    );
    register_taxonomy( 'suffering', array( 'treatment' ), $args );
}

add_action( 'init', 'suffering_taxonomy', 0 );
