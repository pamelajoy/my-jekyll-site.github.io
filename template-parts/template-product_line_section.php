<?php


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
    <div class="container my-5">
      <div class="row">
        <div class="col-5">
          <?php 
            $logo = get_field( 'logo', $product_line); 
            echo wp_get_attachment_image($logo, 'medium', '', array('class' => 'img-fluid product-logo') );
          ?>
        </div>
        <div class="col-7">
          blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah 
        </div>
      </div>
    </div>
  </div>
</div>

<div class="slider container">
  <?php 

    if( $slider ): ?>
        <div class="variable-width">
        <?php foreach( $slider as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            
                <a href="<?php the_permalink(); ?>">
                  <?php echo the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                </a>
            
        <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
</div>
<script>
  $('.variable-width').slick({
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
    initialSlide: 1,
  });
</script>