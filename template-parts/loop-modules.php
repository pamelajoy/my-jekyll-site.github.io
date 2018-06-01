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
        $slider = get_sub_field('slider');

        include locate_template('/template-parts/template-product_line_section.php');

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
