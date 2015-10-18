<?php
/**
 * Add class to current item.
 *
 * @param array $classes Array of CSS classes.
 * @param mixed $item Item.
 *
 * @return array
 */
function add_class_to_current_item( $classes, $item ) {
	if ( in_array( 'current-menu-item', $classes ) ) {
		$classes[] = 'active ';
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'add_class_to_current_item', 10, 2 );