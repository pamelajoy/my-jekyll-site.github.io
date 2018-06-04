<?php
/**
 * Loop to display the page sections content for a default page
 *
 * @package Wordpress
 */


// check if the flexible content field has rows of data
if ( have_rows( 'modules' ) ):

  // loop through the rows of data
  while ( have_rows( 'modules' ) ) : the_row();

    switch ( get_row_layout() ) {

      case 'header' :
        $image = get_sub_field( 'image' );
        $text_overlay= get_sub_field( 'text_overlay' );

        include locate_template('/template-parts/template-header.php');

        break;

      case 'page_overview' :

        $headline = get_sub_field( 'headline' );
        $text = get_sub_field( 'text' );
        $background = get_sub_field( 'background' );
        $background_image = get_sub_field( 'background_image' );

        include locate_template('/template-parts/template-page_overview.php');

        break;

      case 'product_line_section' :

        $product_line = get_sub_field( 'product_line' );
        $featured_image = get_sub_field( 'featured_image' );
        $text = get_sub_field('text');
        $slider = get_sub_field('slider');

        include locate_template('/template-parts/template-product_line_section.php');

        break;

      case 'call_to_action' :

        $headline = get_sub_field( 'headline' );
        $subheadline = get_sub_field( 'subheadline' );
        $button = get_sub_field('button');

        include locate_template('/template-parts/template-call_to_action.php');

        break;

      case 'testimonial' :

        $testimonial = get_sub_field('testimonial');

        include locate_template('/template-parts/template-testimonial.php');

        break;

      case 'clients' :

        $headline = get_sub_field('headline');
        $text = get_sub_field('text');
        $client_logos = get_sub_field('client_logos');

        include locate_template('/template-parts/template-clients.php');

        break;

    }

  endwhile;
else :
?>

  <div class="container">
    <?php the_content(); ?>
  </div>

<?php

endif;

?>
