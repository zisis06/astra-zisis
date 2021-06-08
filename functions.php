<?php
/**
 * Astra Zisis theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Zisis theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_ZISIS_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-zisis-theme-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_ZISIS_THEME_VERSION, 'all' );
  //με αυτο φοτρωνει το custom.css
	wp_register_style('custom_css' , get_stylesheet_directory_uri() . '/css/custom.css');
	wp_enqueue_style('custom_css');

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
