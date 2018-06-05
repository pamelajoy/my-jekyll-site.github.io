<?php

$text = $button['title'];
$url = $button['url'];
$target = $linkArray['target'];
?>

<div class="py-5 light-gray-bg">
	<div class="container text-center my-5">
  	<div class="row">
  		<div class="col-md-8 mx-auto">
  			<h2 class="h2 purple-text pb-3">
  				<?php echo $headline; ?>
				</h2>
				<h4 class="h4">
					<?php echo $subheadline; ?>
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 mx-auto">
				<hr>
			</div>
		</div>
  	
    <?php include locate_template('/template-parts/template-button.php'); ?>
  </div>
</div>