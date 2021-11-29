<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package besonders-coi
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found container">
			<div class="row">
				<div class="col-12 pb-5">
					<header class="page-header text-center">
						<h1 class="page-title"><?php esc_html_e( 'Entschuldigung.', 'besonders-coi' ); ?></h1>
						<p><?php esc_html_e( 'Die Seite, auf die Sie verlinken möchten, existiert noch nicht.
					Bitte prüfen Sie, ob Sie den Link richtig gesetzt haben.', 'besonders-coi' ); ?></p>
					</header><!-- .page-header -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 pr-5">

					<div class="page-content">
					<?php 
					the_widget( 'WP_Widget_Recent_Posts' );
					?>
					</div><!-- .page-content -->
				</div>
				<div class="col-md-6 pl-5">
					<img src="<?php echo get_template_directory_uri(); ?>/img/404-errorpage.jpg" alt="">
				</div>
			</div>

		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
