<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package torque
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php tq_theme_prefix_post_thumbnail(); ?>

	<div class="entry-content">
		<?php get_template_part( 'template-parts/loop', 'modules' ); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
