<?php

function tq_theme_prefix_create_post_type() {

  // Custom Post Type - Testimonials
  register_post_type( 'testimonials',
    array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonial' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'testimonials'),
      'menu_icon'	=> 'dashicons-editor-quote',
    )
  );

  // Custom Post Type - Products
  register_post_type( 'products',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => 'products',
      'rewrite' => array(
        'slug' => 'products/%product-line%',
        'with_front' => false,
      ),
      'menu_icon' => 'dashicons-store',
      'supports' => array( 
        'title',
        'editor',
        'thumbnail',
      ),
    )
  );
  register_taxonomy(
    'product-line',
    'products',
    array(
        'label' => __( 'Product Lines' ),
        'rewrite' => array( 
          'slug' => 'products',
          'with_front' => false,
        ),
        'hierarchical' => true,
        'show_in_nav_menus' => true,
    )
  );

  function tq_show_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'products' ){
      $terms = wp_get_object_terms( $post->ID, 'product-line' );
      if( $terms ){
          return str_replace( '%product-line%' , $terms[0]->slug , $post_link );
      }
    }
    return $post_link;
  }
  add_filter( 'post_type_link', 'tq_show_permalinks', 1, 2 );


  // Custom Post Type - FAQa
  register_post_type( 'faqs',
    array(
      'labels' => array(
        'name' => __( 'FAQs' ),
        'singular_name' => __( 'FAQ' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'faqs'),
      'menu_icon' => 'dashicons-editor-help',
    )
  );

}

add_action( 'init', 'tq_theme_prefix_create_post_type' );