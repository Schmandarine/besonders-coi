<?php

/**
 * Blog Beitrage Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blog_posts-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blog_posts_block ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}




if( get_field('layout') ) { 
    $className .= ' blog_posts_block-'.get_field('layout');
} 


$colWidth = " col-lg-6 col-12 col-md-6";
$posts_tos_show = get_field('select_posts'); 

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <div class="container">
            <div class="row slick_init" data-slick='<?php the_field("slider_einstellungen"); ?>'>

                <?php
                    // loop through the rows of data
                    if( $posts_tos_show == 'Manuell')  :

                        while ( have_rows('inhalte_repeater') ) : the_row(); 

                        $inhaltselement_id = get_sub_field('inhaltselement');
                        $bg_color = get_sub_field('hintergrundfarbe') ?: 'primary';
                        $inhaltselement_thumbnail = get_the_post_thumbnail_url( $inhaltselement_id, "karten-beitragsbild" ) ?: get_template_directory_uri()."/img/card-default.png";
                        $inhaltselement_permalink = get_the_permalink( $inhaltselement_id ) ?: "#";
                        
                        ?>


                        <div class="pb-3">
                            <div class="d-flex h-100 w-100 card-link-wrapper">
                                <div class="card w-100">
                                
                                    <div class="hexagon-bg card-hexagon">
                                        <?php 
                                        if( get_field( 'icon', $inhaltselement_id) ) : ?>
                                            <img
                                            src="<?php echo $inhaltselement_icon['url']; ?>"
                                            alt="<?php echo esc_attr($inhaltselement_icon['alt']); ?>"
                                            class="icon" 
                                            />
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri()."/img/defaulty-icon.png"; ?>" alt="COI Logo Icon" class="icon" >
                                        <?php endif; ?>
                                    </div>
                                    <img data-lazy="<?php echo $inhaltselement_thumbnail; ?>" alt="<?php echo $inhaltselement_icon['alt']; ?>" class="card-img-top" />      
                                    <div class="card-body d-flex flex-column align-items-start bg-<?php echo $bg_color; ?>">
                                        <div class="d-flex pb-1 small">
                                            <?php 
                                            echo get_the_date('', $inhaltselement_id ); 
                                            echo " <div class=\"px-1\">|</div> "; 

                                            if( get_post_type($inhaltselement_id) == 'post' ){

                                                echo "<div class=\"posted-in\">";
                                                $post_categories = wp_get_post_categories( $inhaltselement_id );
                                                $cats = array();
                                                    
                                                foreach($post_categories as $c){
                                                    $cat = get_category( $c );
                                                    array_push($cats, $cat->name );
                                                }
                                                echo implode(", ", array_values($cats));
                                                echo "</div>";
                                                
                                            } elseif( get_post_type($inhaltselement_id) == 'jobs' ){
                                                echo esc_html__( 'Stellenanzeigen', 'besonders-coi' );
                                            }


                                            ?>
                                        </div>
                                        <span class="karte-titel lead pb-3"><?php echo get_the_title( $inhaltselement_id ); ?></span>
                                        <a href="<?php echo $inhaltselement_permalink; ?>" class="btn btn-light d-block mt-auto">mehr erfahren</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                            
                    <?php  
                        endwhile;

                    else:
                        
                        $fresh_posts_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 5 ) );

                        while( $fresh_posts_query->have_posts() ) : $fresh_posts_query->the_post();

                        $inhaltselement_id = get_the_ID();
                        $inhaltselement_icon = get_field("icon", $inhaltselement_id) ?: get_template_directory_uri()."/img/defaulty-icon.png";
                        $bg_color = get_sub_field('hintergrundfarbe') ?: 'primary';
                        $inhaltselement_thumbnail = get_the_post_thumbnail_url( $inhaltselement_id, "karten-beitragsbild" ) ?: get_template_directory_uri()."/img/card-default.png";
                        $inhaltselement_permalink = get_the_permalink( $inhaltselement_id ) ?: "#";

                        ?>

                        <div class="pb-3">
                            <div class="d-flex h-100 w-100 card-link-wrapper">
                                <div class="card w-100">
                                
                                    <div class="hexagon-bg card-hexagon">
                                    <?php 
                                        if( get_field( 'icon', $inhaltselement_id) ) : ?>
                                            <img
                                            src="<?php echo $inhaltselement_icon['url']; ?>"
                                            alt="<?php echo esc_attr($inhaltselement_icon['alt']); ?>"
                                            class="icon" 
                                            />
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri()."/img/defaulty-icon.png"; ?>" alt="COI Logo Icon" class="icon" >
                                        <?php endif; ?>
                                    </div>
                                    <img data-lazy="<?php echo $inhaltselement_thumbnail; ?>" alt="<?php echo $inhaltselement_icon['alt']; ?>" class="card-img-top" />      
                                    <div class="card-body d-flex flex-column align-items-start bg-<?php echo $bg_color; ?>">
                                        <div class="d-flex pb-1 small">
                                            <?php 
                                            echo get_the_date(); 
                                            echo " <div class=\"px-1\">|</div> "; 

                                            if( get_post_type($inhaltselement_id) == 'post' ){

                                                echo "<div class=\"posted-in\">";
                                                $post_categories = wp_get_post_categories( $inhaltselement_id );
                                                $cats = array();
                                                    
                                                foreach($post_categories as $c){
                                                    $cat = get_category( $c );
                                                    array_push($cats, $cat->name );
                                                }
                                                echo implode(", ", array_values($cats));
                                                echo "</div>";
                                                
                                            } elseif( get_post_type($inhaltselement_id) == 'jobs' ){
                                                echo esc_html__( 'Stellenanzeigen', 'besonders-coi' );
                                            }


                                            ?>
                                        </div>
                                        <span class="karte-titel lead pb-3"><?php echo get_the_title( $inhaltselement_id ); ?></span>
                                        <a href="<?php echo $inhaltselement_permalink; ?>" class="btn btn-light d-block mt-auto">mehr erfahren</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                            
                        <?php  
                        endwhile;
                    
                    endif;
                        ?>


            </div>
            <div class="row" style="margin-top: -50px; position:relative;z-index:30">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <div class="prev-slick slick-arrow-custom">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 39">
                            <path fill="#58595b" d="M17.1 0L0 9.9v19.7l17.1 9.9 17.1-9.9V9.9z"/>
                            <path fill="none" stroke="#fff" stroke-width="2.307" stroke-linecap="round" stroke-linejoin="round" d="M21.3 13.1L9.7 19.8l11.6 6.7"/>
                        </svg>
                    </div>
                    <div class="next-slick slick-arrow-custom">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 39">
                            <path fill="#58595b" d="M17.1 0L0 9.9v19.7l17.1 9.9 17.1-9.9V9.9z"/>
                            <path fill="none" stroke="#fff" stroke-width="2.307" stroke-linecap="round" stroke-linejoin="round" d="M21.3 13.1L9.7 19.8l11.6 6.7"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>


    <style type="text/css">

        #<?php echo $id; ?> .card {
            min-height: 13em;
        }
        .card-img-top {
            height: auto;
            
        }
    </style>
</section>