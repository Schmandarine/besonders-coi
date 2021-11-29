<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package besonders-coi
 */

?>
<div class="row">
	<div class="col-12">
		<article id="post-<?php the_ID(); ?>" class="bg-light p-3 py-4 mb-2 d-flex search-card">

			<?php the_post_thumbnail(); ?>

			<div class="entry-summary pl-md-4">
				<span class="small text-uppercase">
				<?php echo get_post_type_object(get_post_type())->label; ?>
				</span>
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<?php the_excerpt(); ?>
				<a href="<?php echo get_permalink(); ?>" class="btn btn-primary">weiterlesen</a>
			</div><!-- .entry-summary -->

		</article><!-- #post-<?php the_ID(); ?> -->
</div>
</div>