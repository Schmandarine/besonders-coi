



<?php

/**
 * Section Spacer Block Interface .
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */



/* // Create id attribute allowing for custom "anchor" value.
$id = 'section-spacer-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'section-spacer';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
} */

?>


    <div class="section-spacer container">
        <div class="spacer-line"></div>
        <div class="spacer-hexagon"></div>
        <div class="spacer-line"></div>
    </div>



