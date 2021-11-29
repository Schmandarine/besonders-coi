<?php 

// Custom Post Type Module
function add_cpt_module() {
	$labels = array(
		'name'                => __( 'Module' ),
  );
  $rewrite = array(
		'slug'                  => 'module',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'               => __( 'modules'),
    'labels'              => $labels,
    'rewrite'              => $rewrite,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_rest'		=> true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => false,
		'can_export'          => true,
		'exclude_from_search' => false,
		'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'modules', $args );
}
add_action( 'init', 'add_cpt_module', 0 );


// Custom Post Type Module
function add_cpt_jobs() {
	$labels = array(
		'name'                => __( 'Jobs' ),
  );
  $rewrite = array(
		'slug'                  => 'stellenanzeigen',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'               => __( 'jobs'),
    'labels'              => $labels,
    'rewrite'              => $rewrite,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_rest'		=> true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => false,
		'can_export'          => true,
		'exclude_from_search' => false,
		'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'jobs', $args );
}
add_action( 'init', 'add_cpt_jobs', 0 );





// Custom Post Type Referenzen mit Kategorien und Filterbar im Backend
function add_cpt_references() {
	$labels = array(
		'name'                => __( 'Referenzen' ),
  );
  $rewrite = array(
		'slug'                  => 'referenzen',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'               => __( 'references'),
		'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
    'rewrite'               => $rewrite,
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_rest'		=> true,
		'show_in_admin_bar'   => true,
		'has_archive'         => false,
		'can_export'          => true,
		'exclude_from_search' => true,
		'yarpp_support'       => true,
		'taxonomies'            => array( 'branchen', 'loesungen' ),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'references', $args );
}
add_action( 'init', 'add_cpt_references', 0 );


 
//create a custom taxonomy name it "type" for your posts
function add_cstm_tax_references() {
 
  $labels = array(
    'name' => _x( 'Branchen', 'taxonomy general name' ),
  ); 	
 
  register_taxonomy('branchen',array('references'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'branchen' ),
  ));
}
// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'add_cstm_tax_references', 0 );

//create a custom taxonomy name it "type" for your posts
function add_cstm_tax_loesungen() {
 
    $labels = array(
      'name' => _x( 'Lösungen', 'taxonomy general name' ),
    ); 	
   
    register_taxonomy('loesungen',array('references'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_rest' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'loesungen' ),
    ));
  }
  // Let us create Taxonomy for Custom Post Type
  add_action( 'init', 'add_cstm_tax_loesungen', 0 );


function filter_cpt_by_tax_branchen( $post_type, $which ) {

// Apply this to a specific CPT
if ( 'references' !== $post_type )
    return;

// A list of custom taxonomy slugs to filter by
$taxonomies = array( 'branchen' );

foreach ( $taxonomies as $taxonomy_slug ) {

    // Retrieve taxonomy data
    $taxonomy_obj = get_taxonomy( $taxonomy_slug );
    $taxonomy_name = $taxonomy_obj->labels->name;

    // Retrieve taxonomy terms
    $terms = get_terms( $taxonomy_slug );

    // Display filter HTML
    echo "<select name='{$taxonomy_slug}' id='{$taxonomy_slug}' class='postform'>";
    echo '<option value="">' . sprintf( esc_html__( 'Show All %s', 'text_domain' ), $taxonomy_name ) . '</option>';
    foreach ( $terms as $term ) {
        printf(
            '<option value="%1$s" %2$s>%3$s (%4$s)</option>',
            $term->slug,
            ( ( isset( $_GET[$taxonomy_slug] ) && ( $_GET[$taxonomy_slug] == $term->slug ) ) ? ' selected="selected"' : '' ),
            $term->name,
            $term->count
        );
    }
    echo '</select>';
}

}

add_action( 'restrict_manage_posts', 'filter_cpt_by_tax_branchen' , 99, 2);


function filter_cpt_by_tax_loesungen( $post_type, $which ) {

    // Apply this to a specific CPT
    if ( 'references' !== $post_type )
        return;
    
    // A list of custom taxonomy slugs to filter by
    $taxonomies = array( 'loesungen' );
    
    foreach ( $taxonomies as $taxonomy_slug ) {
    
        // Retrieve taxonomy data
        $taxonomy_obj = get_taxonomy( $taxonomy_slug );
        $taxonomy_name = $taxonomy_obj->labels->name;
    
        // Retrieve taxonomy terms
        $terms = get_terms( $taxonomy_slug );
    
        // Display filter HTML
        echo "<select name='{$taxonomy_slug}' id='{$taxonomy_slug}' class='postform'>";
        echo '<option value="">' . sprintf( esc_html__( 'Show All %s', 'text_domain' ), $taxonomy_name ) . '</option>';
        foreach ( $terms as $term ) {
            printf(
                '<option value="%1$s" %2$s>%3$s (%4$s)</option>',
                $term->slug,
                ( ( isset( $_GET[$taxonomy_slug] ) && ( $_GET[$taxonomy_slug] == $term->slug ) ) ? ' selected="selected"' : '' ),
                $term->name,
                $term->count
            );
        }
        echo '</select>';
    }
    
    }
    
    add_action( 'restrict_manage_posts', 'filter_cpt_by_tax_loesungen' , 99, 2);


    // Register Sidebars
function footer_sidebar() {

	$args = array(
		'id'            => 'footer-sidebar',
		'name'          => __( 'Footer Sidebar', 'text_domain' ),
		'description'   => __( 'Appears in the footer section of the site.', 'text_domain' ),
		'before_title'  => '<span class="footer-widget-title">',
		'after_title'   => '</span>',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'footer_sidebar' );