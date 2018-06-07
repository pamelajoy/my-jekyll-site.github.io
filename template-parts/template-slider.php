<div class="slider mb-5 pb-5 <?php echo $product_line->slug.'-slider'; ?>">
  <!-- SET DEFAULT PREV AND NEXT BUTTON IMAGES -->
  <?php 

    if( $slider ):
      $arrows = get_field( 'slider_arrows', $product_line);
      $prev = $arrows['previous'];
      $next = $arrows['next'];  
  ?>
    <style>
      <?php echo '.'.$product_line->slug.'-slider'; ?> .slick-prev:before{
        background-image: url(<?php echo wp_get_attachment_image_url($prev, 'thumbnail', '', array('class' => 'previous-arrow d-none') ); ?>);
        background-size: 3rem 3rem;
        background-position: center left;
        background-repeat: no-repeat;
        display: inline-block;
        width: 3rem; 
        height: 3rem;
      }
      @media (min-width: 768px) {
        <?php echo '.'.$product_line->slug.'-slider'; ?> .slick-prev:before{
          background-size: 4rem 4rem;
          width: 4rem; 
          height: 4rem;
        }
      }
      <?php echo '.'.$product_line->slug.'-slider'; ?> .slick-next:after{
        background-image: url(<?php echo wp_get_attachment_image_url($next, 'thumbnail', '', array('class' => 'next-arrow d-none') ); ?>);
        background-size: 3rem 3rem;
        background-position: center right;
        background-repeat: no-repeat;
        display: inline-block;
        width: 3rem; 
        height: 3rem;
      }
      @media (min-width: 768px) {
        <?php echo '.'.$product_line->slug.'-slider'; ?> .slick-next:after{
          background-size: 4rem 4rem;
          width: 4rem; 
          height: 4rem;
        }
      }
    </style>
        <div class="variable-width">
        <?php foreach( $slider as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            
                <a href="<?php the_permalink(); ?>" class="m-5 p-5">
                  <?php echo the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                </a>
            
        <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
</div>