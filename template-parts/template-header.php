<?php

?>

<div style="height:90vh">
	<div id="header" style="background: url(<?php echo wp_get_attachment_image_url($image, '', '', ''); ?>); background-size: cover; background-repeat: no-repeat; height: 90vh;">
		<div class="container" style="height:100%;">
			<div class="row no-gutters" style="height:100%;">
				<div class="col-md-8 d-flex align-items-end mb-5 pb-5" style="height:100%;">
					<div class="mb-5 pb-5 w-100">
						<?php echo wp_get_attachment_image($text_overlay, 'full', '', array('class' => 'img-fluid w-100')); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>