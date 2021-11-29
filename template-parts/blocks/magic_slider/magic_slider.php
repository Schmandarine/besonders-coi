<?php

/**
 * Magic Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'magic_slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'magic_slider_block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$string;

    if( have_rows('scroll_slides') ):
    while( have_rows('scroll_slides') ): the_row(); 

    // vars
    
	$text = get_sub_field('textbox') ? : '';
	$image1 = get_sub_field('bg-img');
		//<?php echo $description 
    $string .= '
	<section class="panel-magic">
        <div class="inside-magic pt-5 position-relative h-100 d-flex align-items-center justify-content-center bg-img" style=" background-image: url('.$image1['url'].')" >
            <div class="dark-bg-overlay"></div>
            <div class="container" style="z-index:3">
                <span>'.$text.'</span>
            </div>
        </div>
	</section>	';
    endwhile;
    endif; 

/*
$string = '
	<section class="panel">
    <div class="jumbotron jumbotron-fluid bg-primary inside">
    <div class="container">
      <span class="display-4">This is a modified jumbotron that occupies the entire horizontal space of its parent</span>
    </div>
  </div>
	</section>
	<section class="panel">
        <div class="inside bg-img" style=" background-image: url(https://picsum.photos/1920/1080)" >
            <h1>second</h1>
        </div>
	</section>	
	<section class="panel">
        <div class="inside bg-img" style=" background-image: url(https://picsum.photos/1920/1080)">
            <h1>third</h1>
        </div>
	</section>';
    
    */

    $slides = substr_count( $string, 'class="panel' );
    $duration = $slides / 2.5 * 100;
    $container_width = $slides * 100;
    $panel_width = 100 / $slides;
    ?>



<!-- Desktop start -->
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> sm-slide-wrapper desktop" >

	<div id="pinContainer">
		<div id="slideContainer">
			<?php echo $string; ?>
		</div>
	</div>

    <style type="text/css">

        #slideContainer {width: <?php echo $container_width ?>%;}   
        .panel-magic {width: <?php echo $panel_width ?>%!important;}

        
    </style>

</div>
<!-- Desktop end -->
