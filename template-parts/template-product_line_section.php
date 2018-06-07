<?php

$btn_class = '';
$text_class = '';
$logo_option = '';
$gradient_style = '';
if($gradient){
  $btn_class = $product_line->slug.'-white-btn';
  $text_class = 'text-white';
  $logo_option = 'logo-light';
  //define gradient
  $this_color = get_field('color', $product_line);
  $gradient_style = 'style="background: linear-gradient( rgba(255,255,255,0),'.$this_color.' 15%,'.$this_color.' 75%, rgba(255,255,255,0) );"';
} else{
  $btn_class = $product_line->slug.'-color-btn';
  $text_class = 'text-dark';
  $logo_option = 'logo-dark';
}

?>
<!-- if gradient light logo, white text, white button -->
<div class="product-line-grid">
  <div class="featured-image">
      <?php echo wp_get_attachment_image($featured_image, 'custom_large', '', array('class' => 'img-fluid w-100') ); ?>
  </div>
  <div class="intro" <?php echo $gradient_style; ?> >
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-5">
          <?php 
            $logo = get_field( $logo_option, $product_line); 
            echo wp_get_attachment_image($logo, 'medium', '', array('class' => 'img-fluid product-logo mb-4 mb-md-0') );
            
          ?>
        </div>
        <div class="offset-md-1 col-md-5">
          <p class="p mb-5 <?php echo $text_class; ?>"><?php echo $text; ?></p>
          <?php
            $text = 'View '.$product_line->name.' products';
            $url = $product_line->permalink;
            include locate_template('/template-parts/template-button.php');
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include locate_template('/template-parts/template-slider.php'); ?>