<?php
  $this_color = get_field('color', $product_line);
  $gradient_style = 'style="background: linear-gradient( rgba(255,255,255,0),'.$this_color.' 50%, rgba(255,255,255,0) );"';
?>
<!-- if gradient light logo, white text, white button -->
<div class="feature-product-line">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <?php 
          $logo = get_field( 'logo_dark', $product_line); 
          echo wp_get_attachment_image($logo, 'medium', '', array('class' => 'img-fluid product-logo mb-4 mb-md-0') );
          
        ?>
        <hr align="left">
        <h4 class="h4 my-3 <?php echo $product_line->slug.'-color-text'; ?>"><?php echo $headline; ?></h4>
        <p class="p mb-5 <?php echo $text_class; ?>"><?php echo $text; ?></p>
                <?php
          $btn_class = $product_line->slug.'-color-btn';
          $text = 'View '.$product_line->name;
          $url = $product_line->permalink;
          include locate_template('/template-parts/template-button.php');
        ?>
      </div>
      <div class="offset-md-1 col-md-5">
        <?php 
      if( $featured_product ):
        foreach( $featured_product as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            
                <a href="<?php the_permalink(); ?>" class="m-5 p-5">
                  <?php echo the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                </a>
            
        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>

      </div>
    </div>
  </div>
</div>
<div class="feature-product-line-row py-5" <?php echo $gradient_style; ?>>
  <div class="container py-5">
    <div class="py-5 row">
      <?php 
      if( $secondary_featured_products ):
        foreach( $secondary_featured_products as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
              <div class="col-md-4 text-center">
                <?php echo the_post_thumbnail('thumbnail', array('class' => 'img-fluid mb-5')); ?><br>
                <h4 class="h4"><?php the_title(); ?></h4><br>
                <?php
                  $btn_class = $product_line->slug.'-color-btn';
                  $text = 'View';
                  $url = get_the_permalink();
                  include locate_template('/template-parts/template-button.php');
                ?>
              </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
    </div>
  </div>
</div>