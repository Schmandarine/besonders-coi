<?php
///////////////////////////////////////////////////////// Filter Module


add_action('wp_ajax_myfilter', 'posts_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'posts_filter_function');
 
function posts_filter_function(){

	$ajax_get_branchen = $_POST['branchen_filter'];
	$ajax_get_loesungen = $_POST['loesungen_filter'];
	$beitrags_typ = $_POST['beitrags_typ'];

	if( isset( $ajax_get_branchen ) || isset( $ajax_get_loesungen ) ) {


		if( $ajax_get_branchen != 'all') {
			$branchen_query = array(
                'taxonomy' => 'branchen',
                'field' => 'slug',
                'terms' => $ajax_get_branchen,
			);
		} else {
			$branchen_query = null;
		}

		if( $ajax_get_loesungen != 'all') {
			$loesungen_query = array(
                'taxonomy' => 'loesungen',
                'field' => 'slug',
                'terms' => $ajax_get_loesungen,
			);
		} else {
			$loesungen_query = null;
		}


	}

	$args = array(
		'numberposts'	=> -1,
		'post_type'		=> $beitrags_typ,
		'orderby' 		=> 'rand',
        'tax_query' => array( 'relation' => 'AND', $branchen_query, $loesungen_query ),
	);

	$posttype_query = new WP_Query( $args ); ?>
	 
    <?php 

    require get_template_directory() . '/inc/posttype-render.php'; 

     ?>

	<?php die();
}
/////////////////////////////////////// FILTER END