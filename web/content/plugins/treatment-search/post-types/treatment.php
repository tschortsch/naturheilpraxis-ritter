<?php
/**
 * Post type Treatment
 *
 * @package Treatment_Search
 */

/**
 * Class Treatment
 */
class Treatment {
    // Be careful max. 20 characters allowed!
    const POST_TYPE = 'treatment';
    const FIELD_PREFIX = '_treatment_';

    /**
     * Constructor
     */
    public function __construct() {
        $this->register_post_type();
    }

    public function register_post_type() {
        $labels = array(
            'name' => __('Treatment Methods', 'nhpb'),
            'singular_name' => __('Treatment Method', 'nhpb'),
            'menu_name' => __('Treatment', 'nhpb'),
            'name_admin_bar' => __('Treatment', 'nhpb'),
            'parent_item_colon' => __('Parent Treatment Method:', 'nhpb'),
            'all_items' => __('All Treatment Methods', 'nhpb'),
            'add_new_item' => __('Add New Treatment Method', 'nhpb'),
            'add_new' => __('Add New', 'nhpb'),
            'new_item' => __('New Treatment Method', 'nhpb'),
            'edit_item' => __('Edit Treatment Method', 'nhpb'),
            'update_item' => __('Update Treatment Method', 'nhpb'),
            'view_item' => __('View Treatment Method', 'nhpb'),
            'search_items' => __('Search Treatment Method', 'nhpb'),
            'not_found' => __('Not found', 'nhpb'),
            'not_found_in_trash' => __('Not found in Trash', 'nhpb'),
        );
        $args = array(
            'label' => __('Treatment Method', 'nhpb'),
            'description' => __('Treatment Methods', 'nhpb'),
            'labels' => $labels,
            'supports' => array('title', 'editor'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-category',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
        );
        register_post_type( self::POST_TYPE, $args );
    }
}