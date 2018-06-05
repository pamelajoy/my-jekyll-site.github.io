<?php


// check if the repeater field has rows of data
if( have_rows('client_logos') ):
?>
<div class="container">
  <div class="row">
<?php  // loop through the rows of data
    while ( have_rows('client_logos') ) : the_row();

        // display a sub field value
        $logo = get_sub_field('image');
?>
        <div class="col-4 col-md"><?php echo wp_get_attachment_image($logo, 'medium', '', array('class' => 'img-fluid product-logo mb-4 mb-md-0') ); ?>
        </div>
<?php
    endwhile;

else :

    // no rows found
?>
</div>
</div>
<?php
endif;
?>