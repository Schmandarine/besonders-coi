<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package besonders-coi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WSKXKC8');</script>
<!-- End Google Tag Manager -->
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSKXKC8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header subpage-header">
		<div class="site-navigation-fixed">
			<div class="site-navigation-wrapper" data-visibility="hidden">
				<div class="site-navigation-container">
					<div class="site-branding">
						<a href="<?php echo get_home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-horizontal.svg" alt="COI Dokumentenmanagement Software">
						</a>
						<?php //the_custom_logo(); ?>
					</div><!-- .site-branding -->
				
				<?php the_site_navigation(); ?>
				</div>
				<div class="site-navigation-sub-wrapper">

				</div>
			</div>
			<div class="svg-slant">
				<svg xmlns="http://www.w3.org/2000/svg" class="slant-shadow" viewBox="0 0 1920 120">
					<path fill="#fff" d="M0 0v44l374 76L1920 1V0z"/>
				</svg>
			</div>
		</div>

		<?php 
		
		if( get_post_type() != 'jobs' && get_post_type() != 'post' || !is_search() ) {

		
			if( get_the_post_thumbnail_url(get_the_ID(),'mobile-hero')): ?>
				<div class="hero-wrapper hero-bg-img">
					<div class="hero-bg-overlay"></div>
					<div class="hero-content site-navigation-container">
						<h1 class="m-0"><?php the_field('site_title', get_the_ID()); ?></h1>
					</div>
					<a href="#primary" class="hero-arrow-down">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 39">
							<path fill="none" stroke="#58595b" stroke-width="2.307" stroke-linecap="round" stroke-linejoin="round" d="M21.3 13.1L9.7 19.8l11.6 6.7"/>
						</svg>
					</a>
				</div>
			<?php elseif( get_field('site_title', get_the_ID()) ): ?>
					<div class="hero-content site-navigation-container">
						<h1 class="m-0"><?php the_field('site_title', get_the_ID()); ?></h1>
					</div>
			<?php else: ?>
					<div class="hero-default-spacer"></div>
			<?php endif; 
			
		} else {
			echo '<div class="hero-default-spacer"></div>';
		}

		
			
		?>

	</header><!-- #masthead -->
