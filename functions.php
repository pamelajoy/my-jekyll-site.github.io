<?php
/**
 * Add bootstrap
 */
add_filter('tq_include_bootstrap', function($value){
 return 1;
});

/**
 * Enqueue scripts and styles.
 */
function tq_custom_script_init(){

	// Slick Slider JS
	wp_register_script( 'slick-slider', get_stylesheet_directory_uri().'/dist/slick.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'slick-slider' );

	// Compiled and minified javascript
	wp_register_script( 'scripts', get_stylesheet_directory_uri().'/dist/scripts.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'scripts' );

	// Compiled and minified style sheet
	wp_register_style( 'style', get_stylesheet_directory_uri().'/dist/style.min.css' );
	wp_enqueue_style( 'style' );


}
add_action( 'wp_enqueue_scripts', 'tq_custom_script_init' );

/**
 * Register Custom Post Types
 */
require get_stylesheet_directory().'/inc/custom-post-types.php';
/**
* Customizer additions.
*/
require get_stylesheet_directory(). '/inc/customizer.php';
/**
 * Register ACF Pro Fields with PHP
 */
require get_stylesheet_directory().'/inc/acf-init.php';

/**
 * Add ACF Pro Options page
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	acf_add_options_page(array(
        'page_title'    => 'Products Options',
        'menu_title'    => 'Products Options',
        'menu_slug'     => 'options_products',
        'capability'    => 'edit_posts',
        'parent_slug'   => 'edit.php?post_type=products',
        'position'      => false,
        'icon_url'      => 'dashicons-images-alt2',
        'redirect'      => false,
    ));
}