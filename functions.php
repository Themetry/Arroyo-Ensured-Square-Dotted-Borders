<?php
/**
 * Arroyo Ensured Square Dotted Borders functions
 *
 * @package Arroyo Ensured Square Dotted Borders
 */

/**
 * Enqueue styles.
 */
function arroyo_ensured_square_dotted_borders_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'arroyo_ensured_square_dotted_borders_enqueue_styles' );
