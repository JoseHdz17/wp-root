<?php
/*
 * NYU WP Root.
 *
 *
 * @package WP Root
 * @author  NYU WP Team
 * @license GPL-2.0+
 * @link    https://wp.nyu.edu
 */

// Add class to body for CSS
add_filter( 'body_class', 'wproot_add_archive_body_class' );

function wproot_add_archive_body_class( $classes ) {

	$classes[] = 'post-archive';
	return $classes;
}

// Add Category title & description
add_action( 'genesis_before_content', 'wproot_output_category_info' );

function wproot_output_category_info() {
	if ( is_category() || is_tag() || is_tax() ) {
		echo single_term_title();
		echo term_description();
	}
}

// Remove author
// Universal - Moved to functions.php

// Remove category at the bottom of each entry
// Universal - Moved to functions.php

// Run Genesis loop
genesis();
