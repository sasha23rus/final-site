<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package learn2
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function learn2_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'learn2_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function learn2_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'learn2_pingback_header' );

/**
 * Добавим класс для li в меню
 */
function add_class_li_header_menu( $classes, $item ) {
    $classes[] = 'header-menu__item';

    if ( in_array('current-menu-item', $classes ) ) {
        $classes[] = 'header-menu__item_active';
    }

	return $classes;
}
add_filter( 'nav_menu_css_class', 'add_class_li_header_menu', 10, 2 );
