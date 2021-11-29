<?php

/**
 * Karten Headline Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'karten_headline-' . $block['id'];
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

$inhaltselement_icon = get_field('icon') ?: "default";
$headline = get_field('headline') ?: "default";
$bg_color = get_field('hintergrundfarbe') ?: "danger";

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

        <div class="d-flex">

            <div class="card bg-<?php echo $bg_color; ?> my-2 w-100">
                <!--<a href="#" class="d-flex h-100">-->
                <div class="hexagon hexagon-bg card-hexagon">
                    <img src="<?php echo $inhaltselement_icon; ?>" alt="<?php echo $headline; ?>" class="icon" />
                </div>
                <div class="card-body d-flex align-items-end p-3">
                    <div class="lead pt-5"><?php echo $headline; ?></div>
                </div>
                <!--</a>-->
            </div>

         </div>

</section>