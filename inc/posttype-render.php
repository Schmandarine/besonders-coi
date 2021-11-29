

    <div class="container">
        <div class="row">
            

    <?php
        if( $posttype_query->have_posts() ) : ?>

            <?php 
            while( $posttype_query->have_posts() ) 
                {
                $posttype_query->the_post();
                get_template_part( 'template-parts/content', get_post_type() );
                }
            wp_reset_postdata(); ?>


        <?php else : 
        echo '<div class="col p-5 h-100 bg-light text-primary">Es wurden leider keine Einträge gefunden. Bitte versuchen Sie es erneut!</div>';
        endif; ?>


        </div>
    </div>
