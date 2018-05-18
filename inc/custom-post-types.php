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
      'menu_icon'	=> 'dashicons-testimonial',
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
      'has_archive' => true,
      'rewrite' => array('slug' => 'products'),
      'menu_icon' => 'dashicons-store',
    )
  );

  register_taxonomy(
    'product-line',
    'products',
    array(
        'label' => __( 'Product Lines' ),
        'rewrite' => array( 'slug' => 'product-line' ),
        'hierarchical' => true,
    )
  );

}

add_action( 'init', 'tq_theme_prefix_create_post_type' );