<?php
/**
 * Taxonomy Suffering
 *
 * @package Treatment_Search
 */

/**
 * Class Suffering
 */
class Suffering {
    // Be careful max. 20 characters allowed!
    const TAXONOMY     = 'suffering';
    const FIELD_PREFIX = '_suffering_';

    /**
     * Constructor
     */
    public function __construct() {
        $this->register_taxonomy();
    }

    // ===================================================
    // Register Custom Taxonomy
    // ===================================================
    public function register_taxonomy() {
        $labels = array(
            'name' => _x('Suffering', 'Taxonomy General Name', 'nhpb'),
            'singular_name' => _x('Suffering', 'Taxonomy Singular Name', 'nhpb'),
            'menu_name' => __('Sufferings', 'nhpb'),
            'all_items' => __('All Items', 'nhpb'),
            'parent_item' => __('Parent Item', 'nhpb'),
            'parent_item_colon' => __('Parent Item:', 'nhpb'),
            'new_item_name' => __('New Item Name', 'nhpb'),
            'add_new_item' => __('Add New Item', 'nhpb'),
            'edit_item' => __('Edit Item', 'nhpb'),
            'update_item' => __('Update Item', 'nhpb'),
            'view_item' => __('View Item', 'nhpb'),
            'separate_items_with_commas' => __('Separate items with commas', 'nhpb'),
            'add_or_remove_items' => __('Add or remove items', 'nhpb'),
            'choose_from_most_used' => __('Choose from the most used', 'nhpb'),
            'popular_items' => __('Popular Items', 'nhpb'),
            'search_items' => __('Search Items', 'nhpb'),
            'not_found' => __('Not Found', 'nhpb'),
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
        );

        register_taxonomy( self::TAXONOMY, array( Treatment::POST_TYPE ), $args);
    }
}