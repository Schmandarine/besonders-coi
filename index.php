<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package besonders-coi
 */

get_header();
?>

	<main id="primary" class="site-main container">
		<div class="row">
			<div class="col-lg-8">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>

				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				echo '<div class="bg-light p-3 mb-3">';
				get_template_part( 'template-parts/content', get_post_type() );
				echo '</div>';

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

			</div>
			<div class="col-lg-4">
				<div class="singe_post_sidebar bg-light p-3 d-none d-lg-block">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>

	</main><!-- #main -->
<style>
	.post-thumbnail img {
    max-width: 40%;
    height: auto;
    float: left;
    padding: 1em 1em 0.5em 0;
}
</style>
<?php
get_footer();
