<?php

if ( ! function_exists('tq_theme_prefix_create_post_type') ) :
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

  }
endif;

add_action( 'init', 'tq_theme_prefix_create_post_type' );