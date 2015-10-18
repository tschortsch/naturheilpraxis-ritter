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

/**
 * Displays current breadcrumb
 * Source: https://www.thewebtaylor.com/articles/wordpress-creating-breadcrumbs-without-a-plugin
 */
function bootstrap_breadcrumb() {
	// Settings
	$home_title = __( 'Home', 'ogdch' );

	// If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
	$custom_taxonomy = 'product_cat';

	// Get the query & post information
	global $post, $wp_query;

	// Do not display on the homepage
	if ( ! is_front_page() ) {

		// Build the breadcrum
		echo '<ol class="breadcrumb">';
		// Home page
		echo '<li class="item-home"><a class="bread-link bread-home" href="' . esc_url( get_home_url() ) . '" title="' . esc_attr( $home_title ) . '">' . esc_attr( $home_title ) . '</a></li>';

		if ( is_archive() && ! is_tax() && ! is_category() ) {
			echo '<li class="item-archive active"><a href="" title="' . esc_attr( post_type_archive_title( '', false ) ) . '">' . esc_attr( post_type_archive_title( '', false ) ) . '</a></li>';
		} else if ( is_archive() && is_tax() && ! is_category() ) {
			// If post is a custom post type
			$post_type = get_post_type();
			// If it is a custom post type display name and link
			if ( 'post' !== $post_type ) {
				$post_type_object  = get_post_type_object( $post_type );
				$post_type_archive = get_post_type_archive_link( $post_type );
				echo '<li class="item-cat item-custom-post-type-' . esc_attr( $post_type ) . '"><a class="bread-cat bread-custom-post-type-' . esc_attr( $post_type ) . '" href="' . esc_url( $post_type_archive ) . '" title="' . esc_attr( $post_type_object->labels->name ) . '">' . esc_attr( $post_type_object->labels->name ) . '</a></li>';
			}

			$custom_tax_name = get_queried_object()->name;
			echo '<li class="item-archive active"><a href="" title="' . esc_attr( $custom_tax_name ) . '">' . esc_attr( $custom_tax_name ) . '</a></li>';
		} else if ( is_single() ) {
			// If post is a custom post type
			$post_type = get_post_type();
			// If it is a custom post type display name and link
			if ( 'post' !== $post_type ) {
				$post_type_object  = get_post_type_object( $post_type );
				$post_type_archive = get_post_type_archive_link( $post_type );
				echo '<li class="item-cat item-custom-post-type-' . esc_attr( $post_type ) . '"><a class="bread-cat bread-custom-post-type-' . esc_attr( $post_type ) . '" href="' . esc_url( $post_type_archive ) . '" title="' . esc_attr( $post_type_object->labels->name ) . '">' . esc_attr( $post_type_object->labels->name ) . '</a></li>';
			}

			// Get post category info
			$category = get_the_category();
			// Get last category post is in
			$last_category = end( array_values( $category ) );
			// Get parent any categories and create array
			$get_cat_parents = rtrim( get_category_parents( $last_category->term_id, true, ',' ), ',' );
			$cat_parents     = explode( ',', $get_cat_parents );
			// Loop through parent categories and store in variable $cat_display
			$cat_display = '';
			foreach ( $cat_parents as $parents ) {
				$cat_display .= '<li class="item-cat">' . $parents . '</li>';
			}

			// If it's a custom post type within a custom taxonomy
			$taxonomy_exists = taxonomy_exists( $custom_taxonomy );
			if ( empty( $last_category ) && ! empty( $custom_taxonomy ) && $taxonomy_exists ) {

				$taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
				$cat_id         = $taxonomy_terms[0]->term_id;
				$cat_nicename   = $taxonomy_terms[0]->slug;
				$cat_link       = get_term_link( $taxonomy_terms[0]->term_id, $custom_taxonomy );
				$cat_name       = $taxonomy_terms[0]->name;
			}

			// Check if the post is in a category
			if ( ! empty( $last_category ) ) {
				echo esc_attr( $cat_display );
				echo '<li class="item-' . esc_attr( $post->ID ) . ' active"><a href="">' . esc_attr( get_the_title() ) . '</a></li>';
				// Else if post is in a custom taxonomy
			} else if ( ! empty( $cat_id ) ) {
				echo '<li class="item-cat item-cat-' . esc_attr( $cat_id ) . ' item-cat-' . esc_attr( $cat_nicename ) . '"><a class="bread-cat bread-cat-' . esc_attr( $cat_id ) . ' bread-cat-' . esc_attr( $cat_nicename ) . '" href="' . esc_url( $cat_link ) . '" title="' . esc_attr( $cat_name ) . '">' . esc_attr( $cat_name ) . '</a></li>';
				echo '<li class="item-' . esc_attr( $post->ID ) . ' active"><a href="">' . esc_attr( get_the_title() ) . '</a></li>';
			} else {
				echo '<li class="item-' . esc_attr( $post->ID ) . ' active"><a href="">' . esc_attr( get_the_title() ) . '</a></li>';
			}
		} else if ( is_category() ) {
			// Category page
			echo '<li class="item-cat active"><a href="">' . esc_attr( single_cat_title( '', false ) ) . '</a></li>';
		} else if ( is_page() ) {
			// Standard page
			if ( $post->post_parent ) {
				// If child page, get parents
				$anc = get_post_ancestors( $post->ID );
				// Get parents in the right order
				$anc = array_reverse( $anc );
				$parents = '';
				// Parent page loop
				foreach ( $anc as $ancestor ) {
					$parents .= '<li class="item-parent item-parent-' . esc_attr( $ancestor ) . '"><a class="bread-parent bread-parent-' . esc_attr( $ancestor ) . '" href="' . esc_url( get_permalink( $ancestor ) ) . '" title="' . esc_attr( get_the_title( $ancestor ) ) . '">' . esc_attr( get_the_title( $ancestor ) ) . '</a></li>';
				}
				// Display parent pages
				echo esc_attr( $parents );
			}
			echo '<li class="item-' . esc_attr( $post->ID ) . ' active"><a href="" title="' . esc_attr( get_the_title() ) . '">' . esc_attr( get_the_title() ) . '</a></li>';
		} else if ( is_tag() ) {
			// Tag page
			// Get tag information
			$term_id  = get_query_var( 'tag_id' );
			$taxonomy = 'post_tag';
			$args     = 'include=' . $term_id;
			$terms    = get_terms( $taxonomy, $args );
			// Display the tag name
			echo '<li class="item-tag-' . esc_attr( $terms[0]->term_id ) . ' item-tag-' . esc_attr( $terms[0]->slug ) . ' active"><a href="">' . esc_attr( $terms[0]->name ) . '</a></li>';
		} elseif ( is_day() ) {
			// Day archive
			// Year link
			echo '<li class="item-year item-year-' . esc_attr( get_the_time( 'Y' ) ) . '"><a class="bread-year bread-year-' . esc_attr( get_the_time( 'Y' ) ) . '" href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '" title="' . esc_attr( get_the_time( 'Y' ) ) . '">' . esc_attr( get_the_time( 'Y' ) ) . ' ' . esc_attr__( 'Archives', 'ogdch' ) . '</a></li>';
			// Month link
			echo '<li class="item-month item-month-' . esc_attr( get_the_time( 'm' ) ) . '"><a class="bread-month bread-month-' . esc_attr( get_the_time( 'm' ) ) . '" href="' . esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ) . '" title="' . esc_attr( get_the_time( 'M' ) ) . '">' . esc_attr( get_the_time( 'M' ) ) . ' ' . esc_attr__( 'Archives', 'ogdch' ) . '</a></li>';
			// Day display
			echo '<li class="item-' . esc_attr( get_the_time( 'j' ) ) . ' active"><a href="">' . esc_attr( get_the_time( 'jS' ) ) . ' ' . esc_attr( get_the_time( 'M' ) ) . ' ' . esc_attr__( 'Archives', 'ogdch' ) . '</a></li>';
		} else if ( is_month() ) {
			// Month Archive
			// Year link
			echo '<li class="item-year item-year-' . esc_attr( get_the_time( 'Y' ) ) . '"><a class="bread-year bread-year-' . esc_attr( get_the_time( 'Y' ) ) . '" href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '" title="' . esc_attr( get_the_time( 'Y' ) ) . '">' . esc_attr( get_the_time( 'Y' ) ) . ' ' . esc_attr__( 'Archives', 'ogdch' ) . '</a></li>';
			// Month display
			echo '<li class="item-month item-month-' . esc_attr( get_the_time( 'm' ) ) . '">' . esc_attr( get_the_time( 'M' ) ) . ' ' . esc_attr__( 'Archives', 'ogdch' ) . '</li>';
		} else if ( is_year() ) {
			// Display year archive
			echo '<li class="item-year item-year-' . esc_attr( get_the_time( 'Y' ) ) . ' active"><a href="">' . esc_attr( get_the_time( 'Y' ) ) . ' ' . esc_attr__( 'Archives', 'ogdch' ) . '</a></li>';
		} else if ( is_author() ) {
			// Auhor archive
			// Get the author information
			global $author;
			$userdata = get_userdata( $author );
			// Display author name
			echo '<li class="item-author item-author-' . esc_attr( $userdata->user_nicename ) . ' active"><a href="">' . esc_attr__( 'Author', 'ogdch' ) . ' ' . esc_attr( $userdata->display_name ) . '</a></li>';
		} else if ( get_query_var( 'paged' ) ) {
			// Paginated archives
			echo '<li class="item-paged item-paged-' . esc_attr( get_query_var( 'paged' ) ) . ' active"><a href="">' . esc_attr__( 'Page', 'ogdch' ) . ' ' . esc_attr( get_query_var( 'paged' ) ) . '</a></li>';
		} else if ( is_search() ) {
			// Search results page
			echo '<li class="item-search item-search-' . esc_attr( get_search_query() ) . ' active"><a href="">' . esc_attr__( 'Search results for:', 'ogdch' ) . ' ' . esc_attr( get_search_query() ) . '</a></li>';
		} elseif ( is_404() ) {
			// 404 page
			echo '<li>' . esc_attr__( 'Page not found', 'ogdch' ) . '</li>';
		}
		echo '</ol>';
	}
}
