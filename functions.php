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
if (! function_exists('tq_custom_script_init') ){  
  function tq_custom_script_init(){

  	// Compiled and minified javascript
  	wp_register_script( 'scripts', get_stylesheet_directory_uri().'/dist/scripts.min.js', array( 'jquery' ), '', true );
  	wp_enqueue_script( 'scripts' );

  	// Compiled and minified style sheet
  	wp_register_style( 'style', get_stylesheet_directory_uri().'/dist/style.min.css' );
  	wp_enqueue_style( 'style' );

  }
}
add_action( 'wp_enqueue_scripts', 'tq_custom_script_init' );

/**
 * Register Custom Post Types
 */
require get_stylesheet_directory().'/inc/custom-post-types.php';

/**
 * Register ACF Pro Fields with PHP
 */
require get_stylesheet_directory().'/inc/acf-init.php';

/**
 * Add ACF Pro Options page
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}


// This allows you to only view images you added to the media library, I plan to repurpose this using the category
// add_filter( 'ajax_query_attachments_args', array( $this, 'load_media_library_by_category_access' ), 10, 1 );

// function load_media_library_by_category_access( $query = array() ) {
//    $user_id = get_current_user_id();
//    if( $user_id ) {
//       $query['author'] = $user_id;
//    }

//    return $query;
// }

// This should 
// function author_filter($query) {
//     if ( is_admin() && $query->is_main_query() ) {
//         if (isset($_GET['author']) && $_GET['author'] == -1) {
//             $query->set('author', '');
//         }
//     }
// }
// add_action('pre_get_posts','author_filter');