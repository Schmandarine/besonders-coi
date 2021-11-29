<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'flip-box' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'flip-box-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$image = get_field('img');
$size = 'medium'; // (thumbnail, medium, large, full or custom size)
if( $image ) {
    $img_attach = wp_get_attachment_image( $image, $size );
}

$card_style = get_field('hintergrundfarbe') ?: "bg-primary text-light";
$inhaltselement_icon = get_field('icon') ?: "default";

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <!-- <img src="https://picsum.photos/800/640"> -->


        <div class="card mb-3">
            <input type="checkbox" id="card<?php echo $id ?>" class="more" aria-hidden="true">
            <div class="content">
                <div class="front <?php echo $card_style; ?>">
                    <div class="inner h-100">
                        <label for="card<?php echo $id ?>" class="btn-text text-light lead pb-3 flipbox_label flex-column d-flex justify-content-between align-items-center" aria-hidden="true">
                            <div class="position-relative w-100 h-50 d-flex" style=" top: 10%;">
                                <img src="<?php echo get_template_directory_uri();?>/img/hexagon-shadow.png" class="hexagon-bg-slide card-hexagon-hover" alt="hexagon-element">
                                <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                                    <img src="<?php echo $inhaltselement_icon; ?>" class="hexagon-icon card-hexagon-hover" alt="icon">
                                </div>
                            </div>
                            <div class="flipbox-link-text position-relative text-center p-2"><?php echo get_field('button') ?></div>
                        </label>
                    </div>
                </div>
                <div class="back <?php echo $card_style; ?>">
                    <div class="inner h-100 p-4 align-items-start">
                            <?php echo get_field('back_content') ?>
                            <label for="card<?php echo $id ?>" class="btn btn-light return d-block w-100 mt-3" aria-hidden="true">
                                <span>zurück</span> 
                            </label>
                    </div>
                </div>
            </div>
        </div>

</div>