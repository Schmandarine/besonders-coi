<?php
/**
 * Template part for displaying Referenzen Card
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bs_brombach_funcs
 */

                $postly_id = get_the_ID();
                $inhaltselement_thumbnail = get_the_post_thumbnail_url( $postly_id, "karten-beitragsbild" ) ?: get_template_directory_uri()."/img/card-default.png";           
                ?>

<div class="col-md-4 col-sm-6 mb-3">
    <a href="<?php the_permalink(); ?>" class="d-flex h-100 w-100 card-link-wrapper">
        <div class="card">
            <?php 
            echo '<img src="'.$inhaltselement_thumbnail.'" alt="referenz-thumbnail" class="card-img-top" />';
            ?>
            <div class="card-body bg-gray-sec-1 mt-1">
                <div class="lead text-light pb-3">
                <?php the_title(); ?>
                </div>
                <?php the_excerpt(); ?>
            </div>
        </div>
    </a>
</div>
