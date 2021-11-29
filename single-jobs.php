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

	<main id="primary" class="site-jobs">
		<div class="container">
			<div class="row">
			<?php
		while ( have_posts() ) :
			the_post();
			echo '<h1>';
			the_title();
			echo '</h1>';
			the_content();

		endwhile; // End of the loop.
		?></div>
		</div>


	</main><!-- #main -->

<?php
get_footer();
