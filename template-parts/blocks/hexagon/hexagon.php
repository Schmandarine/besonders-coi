<?php

/**
 * Hexagon Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hexagon_item-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hexagon_item';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <a href="<?php the_field("hyperlink"); ?>" class="position-relative d-block">
        <svg class="hexagon-bg-item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 39" class="hexagon-svg">
			<path fill="#fff" d="M17.1 0L0 9.9v19.7l17.1 9.9 17.1-9.9V9.9z"/>
		</svg>
        <div class="hexagon-cta-content text-secondary p-5 position-absolute flex-column text-center justify-content-center d-flex align-items-center"><?php the_field("content"); ?></div> 
    </a>
    
</section>