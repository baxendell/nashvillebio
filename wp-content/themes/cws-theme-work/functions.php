<?php
/**
 *  functions and definitions
 *
 * @package herrmanandherrman
 * @since herrmanandherrman 2.0
 * @license GPL 2.0
 */

define( 'JS_VERS', '1.0.1' );
define( 'CSS_VERS', '1.0.1' );


require_once STYLESHEETPATH . '/includes/walker.php';
require_once STYLESHEETPATH . '/includes/post-types.php';
require_once STYLESHEETPATH . '/includes/acf.php';

/**Remove unnecessary WP items**/

remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Load scripts and styles for the theme
 *
 * @action wp_enqueue_scripts
 *
 * @return void
 */
function nb_enqueue_scripts() {
	wp_enqueue_style  ( 'nb-main',      get_template_directory_uri() . '/compiled/css/theme.css', false, CSS_VERS );
	if(is_page_template('contact.php')) {
		wp_enqueue_script ('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA9pf9soCGDm_24PCp-qBqRCS6eAlKC1PY');
		wp_enqueue_script ( 'map',  get_template_directory_uri() . '/compiled/js/map.js', array( 'jquery' ), JS_VERS, true );

	}
	wp_enqueue_script ( 'nb-theme-js',  get_template_directory_uri() . '/compiled/js/app.js', array( 'jquery' ), JS_VERS, true );
}
add_action( 'wp_enqueue_scripts', 'nb_enqueue_scripts' );


/**
 * Add header and footer menus
 *
 * @add_action init
 */
function cws_register_menus() {
	register_nav_menus(
		array(
			'header-menu'     => __( 'Header Menu' ),
			'mobile-menu'     => __( 'Mobile Menu' )
		)
	);
}
add_action( 'init', 'cws_register_menus' );

/**
 * Add an acf options page
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page();
}

/**
* Add excerpt support to pages
*/

add_post_type_support( 'page', 'excerpt' );

/**
 * Add featured images
 */

function wpse_setup_theme() {
   add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'wpse_setup_theme' );

