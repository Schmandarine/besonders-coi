<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package besonders-coi
 */

get_header();
?>

	<main id="primary" class="site-main container">
		<div class="row">
			<div class="col">
			<?php
			while ( have_posts() ) :
				the_post(); ?>


				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">

						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php
						the_content();
						?>
					</div><!-- .entry-content -->


				</article>

				<?php 
			endwhile; // End of the loop.
			?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
