<?php


// check if the repeater field has rows of data
if( have_rows('client_logos') ):
?>
	<div class="container my-5">
	  <div class="row">
	  	<div class="col-md-6 mx-auto">
		  	<h2 class="h2 purple-text pb-3 text-center">
					<?php echo $headline; ?>
				</h2>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 mx-auto">
				<p class="p text-center">
					<?php echo $text; ?>
				</p>
			</div>
		</div>
		<div class="row my-5">
			<div class="col-md-8 mx-auto">
				<div class="row">
					<?php  // loop through the rows of data
					    while ( have_rows('client_logos') ) : the_row();

					        // display a sub field value
					        $logo = get_sub_field('image');
					?>
					        <div class="col-4 col-md-3 p-3 my-3"><?php echo wp_get_attachment_image($logo, 'medium', '', array('class' => 'img-fluid client-logo mb-4 mb-md-0') ); ?>
					        </div>
					<?php
					    endwhile;

					else :

					    // no rows found
					?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>