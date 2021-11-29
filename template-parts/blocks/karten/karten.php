<?php

/**
 * Karten Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'karten-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'karten_block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

if( get_field('thumbnail') ) { 
    $className .= ' karte-mit-thumbnail';
} 
if( get_field('layout') ) { 
    $className .= ' karte-'.get_field('layout');
} 

if( get_field('layout') == "grid" ){
    $img_attr = "src";
}

if( get_field('layout') == "slider" ){
    $img_attr = "data-lazy";
}



if( get_field("columns") ) {
    $block_cols = get_field("columns");
    $cols = 12 / $block_cols;
    $colWidth = " col-lg-$cols col-12 col-md-6";
    /*
    switch ($count_slides) {
        case 1:
            break;
        case 3:
            break;            
    }
    */
} else {
    $colWidth = "";
}

if( get_field('card_buttons') ){
    $card_link = '';
}


?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <div class="container">
            <div class="row" data-slick='<?php the_field("slider_einstellungen"); ?>'>

                <?php

                    // loop through the rows of data
                    while ( have_rows('inhalte_repeater') ) : the_row(); 

                    $inhaltselement_id = get_sub_field('inhaltselement') ?: "grid";

                    if(get_sub_field('custom_icons')){
                        $inhaltselement_icon = get_sub_field('custom_icons');
                    } else {
                        $inhaltselement_icon = get_field("icon", $inhaltselement_id);
                    }
                    
                    
                    $bg_color = get_sub_field('hintergrundfarbe');
                    $inhaltselement_thumbnail = get_the_post_thumbnail_url( $inhaltselement_id, "karten-beitragsbild" ) ?: get_template_directory_uri()."/img/card-default.png";
                    $inhaltselement_thumbnail_alt = get_post_meta($inhaltselement_id, '_wp_attachment_image_alt', true);
                    $inhaltselement_permalink = get_the_permalink( $inhaltselement_id ) ?: "#";
                    $card_button_link = get_sub_field('button_link') ?: "#";
                    
                    
                        if( $inhaltselement_id != 849 && $inhaltselement_id != 6768 ):
                        ?>

                    <div class="<?php echo $colWidth; ?> d-flex">

                    <?php 
                    if( get_field('card_buttons') ){
                        echo '<div class="d-flex h-100 w-100 card-link-wrapper">';
                    } else {
                        echo '<a href="'.$inhaltselement_permalink.'" class="d-flex h-100 w-100 card-link-wrapper">';
                    }
                    ?>
                        
                    
                            <div class="card w-100">
                                
                                <div class="hexagon-bg card-hexagon">
                                    <img
                                    src="<?php echo $inhaltselement_icon['url']; ?>"
                                    alt="<?php echo esc_attr($inhaltselement_icon['alt']); ?>"
                                    class="icon" 
                                    />
                                </div>
                                <?php if( get_field('thumbnail') ) { 
                                        echo '<img '.$img_attr.'="'.$inhaltselement_thumbnail.'" alt="' . get_the_title( $inhaltselement_id ) . '" class="card-img-top" />';
                                    } ?>
                                <div class="card-body flex-column align-items-start d-flex bg-<?php echo $bg_color; ?>">
                                    <?php 
                                        if(get_sub_field('custom_title')){
                                           echo ' <span class="karte-titel lead align-items-end">'.get_sub_field('custom_title').'</span>';
                                        } else {
                                            echo ' <span class="karte-titel lead align-items-end">'.get_the_title( $inhaltselement_id ).'</span>';
                                        }
                                    ?>

                                    <?php 
                                    if( get_field('card_buttons') ){
                                        echo '<a href="'.$card_button_link.'" class="btn btn-light">mehr erfahren</a>';
                                    }
                                    ?>
                                </div>
                                
                            </div>

                        <?php 
                            if( get_field('card_buttons') ){
                                echo '</div>';
                            } else {
                                echo '</a>';
                            }
                        ?>
                                            

                    </div>
                        
                    <?php  
                        elseif( $inhaltselement_id == 849 ): ?>
                            <div class="<?php echo $colWidth; ?> d-flex">
                                <a href="<?php echo get_site_url(); ?>/kontakt" class="hexagon-cta position-relative d-flex w-100 hexagon_item">
                                    <svg class="hexagon-bg-item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 39" class="hexagon-svg">
                                        <path fill="#fff" d="M17.1 0L0 9.9v19.7l17.1 9.9 17.1-9.9V9.9z"/>
                                    </svg>
                                    <div class="hexagon-cta-content text-secondary p-5 position-absolute flex-column text-center justify-content-center d-flex align-items-center">
                                        ihre branche ist nicht dabei?
                                        <span>SPRECHEN SIE UNS AN!</span>
                                    </div>
                                </a>
                            </div>
                    <?php elseif( $inhaltselement_id == 6768 ): ?>
                            <div class="<?php echo $colWidth; ?> d-flex">
                                <a href="<?php echo get_site_url(); ?>/dokumentenmanagement-software-businessflow/#prozessmodule" class="hexagon-cta position-relative d-flex w-100 hexagon_item">
                                    <svg class="hexagon-bg-item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 39" class="hexagon-svg">
                                        <path fill="#fff" d="M17.1 0L0 9.9v19.7l17.1 9.9 17.1-9.9V9.9z"/>
                                    </svg>
                                     <div class="hexagon-cta-content text-secondary p-5 position-absolute flex-column text-center justify-content-center d-flex align-items-center">
                                        alle<br>
                                        <span>Module</span>
                                        im überblick
                                    </div>
                                </a>
                            </div>
                        <?php endif;
                    endwhile;
                    ?>

            </div>
        </div>


    <style type="text/css">
        
        #<?php echo $id; ?> .card {
            word-break: break-all;
            min-height: 13em;
        }
        
    </style>
</section>