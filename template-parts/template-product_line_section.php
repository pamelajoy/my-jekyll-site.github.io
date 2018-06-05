<?php

if($product_line->slug == 'sparkle'){
  $btn_class = 'sparkle-white-btn';
  $text_class = 'white-text';
} elseif($product_line->slug == 'ucreate'){
  $btn_class = 'ucreate-pink-btn';
}

?>

<div class="product-line-grid">
  <div class="featured-image">
      <?php echo wp_get_attachment_image($featured_image, 'custom_large', '', array('class' => 'img-fluid w-100') ); ?>
  </div>
  <div 
    class="intro" 
    <?php echo $product_line->name; if ($product_line->slug == 'sparkle'): $color = get_field('color', $product_line);?>
      style="background: linear-gradient( rgba(255,255,255,0), <?php echo $color; ?> 15%, <?php echo $color; ?> 75%, rgba(255,255,255,0) );"
    <?php endif; ?> 
  >
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-5">
          <?php 
            $logo = get_field( 'logo', $product_line); 
            echo wp_get_attachment_image($logo, 'medium', '', array('class' => 'img-fluid product-logo mb-4 mb-md-0') );
            
          ?>
        </div>
        <div class="offset-md-1 col-md-5">
          <p class="p mb-5"><?php echo $text; ?></p>
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