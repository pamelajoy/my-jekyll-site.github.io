<?php

?>
<div style="background: linear-gradient(to right, #6ebce7, #a2a5cc, #d78d8e);" class="py-5">
  <div class="container py-5" style="background: url(http://localhost:8888/nunoerin/wp-content/uploads/2018/06/NunoErin_testimonial-bg-52-52.svg); background-size: contain; background-repeat: no-repeat; background-position: center center">
    <div class="row">
      <div class="col-7 mx-auto">
        <?php 
        	if( $testimonial ):
        ?>
          <div class="text-center">
            <?php foreach( $testimonial as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
              
              <h2 class="h2 text-white"><?php the_content(); ?></h2>
              <hr>
              <h3 class="h3"><?php the_title(); ?></h4>
              <h4 class="h4"><?php the_field('company'); ?></h5>
            <?php endforeach; ?>
          </div>
        	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>