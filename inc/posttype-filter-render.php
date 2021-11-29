<div class="container">
    <div class="row">
        <div class="col-12">


            <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" class="filter_form filter-module d-flex align-items-center mb-4 flex-md-row flex-column justify-content-center">
                  <?php 

                    $all_taxonomies = get_object_taxonomies( $beitrags_typ, 'objects');
                    $tax_object_slugs = array();

                    foreach ( $all_taxonomies as $tax_object ) {

                        array_push($tax_object_slugs, $tax_object->name);

                    }   


                    get_cpt_tax($beitrags_typ, $tax_object_slugs);

                  ?>

              <input type="hidden" name="beitrags_typ" value="<?php echo $beitrags_typ; ?>">
              <input type="hidden" name="action" value="myfilter">
              
            </form>

        </div>
    </div>
</div>
