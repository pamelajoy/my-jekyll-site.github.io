<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content m-0">
		<?php get_template_part( 'template-parts/loop', 'modules' ); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->