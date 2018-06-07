<?php get_header();

$queried_object = get_queried_object();
$term_id = $queried_object->term_id;
$name = $queried_object->name;
$slug = $queried_object->slug;
$description = term_description();
$headline = get_field('headline', $queried_object);
$text = get_field('text', $queried_object);
$logo_light = get_field('logo_light', $queried_object);
?>
<div style="background-color: blue;">
<?php echo wp_get_attachment_image($logo_light, 'medium', '', array('class' => 'img-fluid product-logo mb-4 mb-md-0') ); ?>
<h3 class="h3 text-white"><?php echo $description; ?></h3>
</div>
<h2 class="h2 <?php echo $slug.'-font '; echo $slug.'-color-text' ?>"> <?php echo $headline; ?></h2>
<p class="p"><?php echo $text; ?></p>