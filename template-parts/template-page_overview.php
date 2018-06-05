<?php

?>

<div class="container my-5 py-5" style="background: url(<?php echo wp_get_attachment_image_url($background_image, '', '', ''); ?>); background-size: contain; background-repeat: no-repeat; background-position: center right;">
  <div class="row">
    <div class="col-md-4">
    	<h2 class="h2 purple-text pb-3"><?php echo $headline; ?></h1>
    	<hr align="left">
   	</div>
    <div class="offset-md-1 col-md-6">
    	<p class="p"><?php echo $text; ?></p>
    </div>
  </div>
</div>
