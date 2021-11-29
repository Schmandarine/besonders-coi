<?php

$id = 'posts-filter-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'posts_filter_wrapper ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$beitrags_typ = get_field('beitragstyp');
$filter_funktion = get_field('filterfunktion');
$posttype_query = new WP_Query( array( 'post_type' => $beitrags_typ, 'posts_per_page' => -1 ) );
?>

<section class="<?php echo $className; ?> position-relative mb-5" id="<?php echo $id; ?>">



  <?php 
  
  if( $filter_funktion ) {
    require get_template_directory() . '/inc/posttype-filter-render.php';
  } ?>

  <div class="posttype_filter_ajax_return">
    <?php require get_template_directory() . '/inc/posttype-render.php'; ?>
  </div>
  <div class="loader"></div>


  <style>
      .loader {
        display:none;
        position: absolute;
        top: 100px;
        left: 47%;
        border: 10px solid #f3f3f3;
        border-top: 10px solid silver;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    
  </style>
</section>