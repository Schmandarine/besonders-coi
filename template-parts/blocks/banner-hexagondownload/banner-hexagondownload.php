<?php

/**
 * Banner Hexagondownload Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'banner-hexagondownload-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'banner-hexagondownload my-4';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

if(get_field("layout") == 'links') {
    $layout = 'flex-row-reverse';
} else {
    $layout = '';
}



$text = get_field("text");
$bild = get_field("bild");
$datei = get_field("datei");
?>


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <div class="bg-primary text-light">
        <div class="container">
            <div class="row py-4 align-items-center <?php echo $layout; ?>">
                <div class="col-8">

                    <div class="h2 mb-0  py-5">
                        <?php echo $text; ?>
                    </div>
                

                </div>
                <div class="col-4">

                    <?php if( get_field('bild') ): ?>
                        <img src="<?php the_field('bild'); ?>" alt="download-media-link" class="thumbnail-downloadbanner" />
                    <?php endif; ?>
                    <?php if( $datei ): ?>

                    <a class="hexagon-download" href="<?php echo $datei['url']; ?>" target="_blank">
                        <img alt="download button" class="download-hexagonimg" src="<?php echo get_template_directory_uri() . '/img/hexagon-download.png' ?>">
                    </a>
                    <?php endif;
                    ?>

                </div>
            </div>
        </div>
    </div>
    
</section>
