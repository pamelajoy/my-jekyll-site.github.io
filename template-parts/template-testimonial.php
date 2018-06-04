<?php

?>

<?php 
	if( $testimonial ):
?>
  <div>
    <?php foreach( $testimonial as $post): // variable must be called $post (IMPORTANT) ?>
      <?php setup_postdata($post); ?>
      
      <?php 
      	the_content();
      	the_title();
      	the_field('company');
      ?>
    <?php endforeach; ?>
  </div>
	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>