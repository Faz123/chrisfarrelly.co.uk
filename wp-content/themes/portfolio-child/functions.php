<?php
/**
 * chrisfarrelly.co.uk Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package chrisfarrelly.co.uk
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_CHRISFARRELLY_CO_UK_VERSION', '1.0.0' );
const THEME_PATH = 'https://chrisfarrelly.co.uk/wp-content/themes/portfolio-child';
/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'chrisfarrelly-co-uk-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_CHRISFARRELLY_CO_UK_VERSION, 'all' );
	wp_enqueue_style( 'owlcarousel.min', get_stylesheet_directory_uri() . '/owlcarousel/owl.carousel.min.css' );
	wp_enqueue_style( 'owlcarousel.default', get_stylesheet_directory_uri() . '/owlcarousel/owl.theme.default.css' );
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


// add custom scripts
function add_custom_scripts() {
	wp_enqueue_script('scripts', THEME_PATH . '/js/scripts.js' );
	wp_enqueue_script('owlcarousel', THEME_PATH . '/owlcarousel/owl.carousel.min.js' );
}
add_action('wp_enqueue_scripts', 'add_custom_scripts', 20);