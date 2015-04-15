<?php
/**
 * Wireframe functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Wireframe
 * @since Wireframe
 */

/**
 *  Enqueue scripts and styles
 */
function theme_scripts() {
	if ( !is_admin() ) :
		
	/** styles ------------ */
	wp_enqueue_style( 'font-awesome', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );

	/** scripts ------------ */
	wp_enqueue_script( 'jquery','//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '1.10.2', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array(), '2.6.2', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), '3.0', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/plugins.js', array(), '1.0.0', true );

	endif;
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );