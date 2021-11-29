<?php

$id = 'inx_mail-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'inx_mail';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>


	<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">	
		
        [$include(content)]

	</section>

