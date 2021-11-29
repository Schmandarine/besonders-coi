<?php

/**
 * Hexagon Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hexagon_logos-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hexagon_logos';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


?>


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">



            <div class="hexagon-slider slider-wrapper" data-slick='<?php the_field("data_slick"); ?>'>

            <?php while( have_rows("hexagon_slider") ): 
                the_row(); 
                $inhaltselement_icon = get_sub_field("hexagon_content") ?: get_template_directory_uri()."/img/defaulty-icon.png"; ?>

                <div class="slider-item">
                    <?php if( get_sub_field("hexagon_link") ) {
                            echo '<a class="position-relative w-100 h-100 d-flex" target="_blank" href="'.get_sub_field("hexagon_link").'"> ';
                                echo '<img src="'.get_template_directory_uri().'/img/hexagon-shadow.png" class="hexagon-bg-slide" alt="hexagon-element">';
                                echo '<div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center"><img data-lazy="'.$inhaltselement_icon.'" class="hexagon-icon" alt="hexagon-element"></div>';
                            echo '</a>';
                        } else {
                            echo '<div class="position-relative w-100 h-100 d-flex">';
                                echo '<img src="'.get_template_directory_uri().'/img/hexagon-shadow.png" class="hexagon-bg-slide" alt="hexagon-element">';
                                echo '<div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center"><img data-lazy="'.$inhaltselement_icon.'" class="hexagon-icon" alt="hexagon-element"></div>';
                            echo '</div>';
                        } ?>
                </div>
            <?php endwhile; ?>


            </div>



    <style type="text/css">
        #<?php echo $id; ?> .card {
            word-break: break-all;
            min-height: 13em;
        }
        
    </style>
</section>