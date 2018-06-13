<?php get_header();

$queried_object = get_queried_object();
$term_id = $queried_object->term_id;
$name = $queried_object->name;
$slug = $queried_object->slug;
$description = term_description();
$featured_image= get_field('featured_image', $queried_object);
$headline = get_field('headline', $queried_object);
$text = get_field('text', $queried_object);
$logo_light = get_field('logo_light', $queried_object);
?>
<div style="background: url(<?php echo wp_get_attachment_image_url($featured_image, '', '', ''); ?>); background-size: cover; background-repeat: no-repeat; height: 80vh;">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php echo wp_get_attachment_image($logo_light, 'medium', '', array('class' => 'img-fluid product-logo mb-4 mb-md-0') ); ?>
				<h3 class="h3 text-white"><?php echo $description; ?></h3>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<h2 class="h2 <?php echo $slug.'-font '; echo $slug.'-color-text' ?>"> <?php echo $headline; ?></h2>
		</div>
		<div class="offset-md-5 col-md-5">
			<p class="p"><?php echo $text; ?></p>
		</div>
	</div>
</div>

<?php get_footer();?>