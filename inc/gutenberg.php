<?php

add_action('acf/init', 'register_acf_gutenberg');
function register_acf_gutenberg() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {

		acf_register_block_type(array(
			'name'              => 'karten',
			'title'             => __('Karten'),
			'description'       => __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/karten/karten.php',
			//'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/karten/karten.js',
			//'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/karten/karten.css',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'edit',
			'supports' => array( 'mode' => false ,'align' => false )
        ));

		acf_register_block_type(array(
			'name'              => 'section-spacer',
			'title'             => __('Section Spacer'),
			'description'       => __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/section-spacer.php',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'edit',
			'supports' => array( 'mode' => false ,'align' => false )
        ));

		acf_register_block_type(array(
			'name'              => 'banner-hexagondownload',
			'title'             => __('Banner Hexagon-Download'),
			'description'       => __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/banner-hexagondownload/banner-hexagondownload.php',
			//'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/karten/karten.js',
			//'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/karten/karten.css',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'edit',
			'supports' => array( 'mode' => false ,'align' => false )
        ));
		
		acf_register_block_type(array(
			'name'              => 'blog_posts',
			'title'             => __('Blogbeiträge'),
			'description'       => __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/blog_posts/blog_posts.php',
			//'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/blog_posts/blog_posts.js',
			//'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/blog_posts/blog_posts.css',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'edit',
			'supports' => array( 'mode' => false ,'align' => false )
        ));

		acf_register_block_type(array(
			'name'              => 'karten_headline',
			'title'             => __('Karten Überschrift'),
			'description'       => __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/karten_headline/karten_headline.php',
			//'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/karten_headline/karten_headline.js',
			//'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/karten_headline/karten_headline.css',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'view',
			'supports' => array( 'mode' => true ,'align' => false )
		));

		acf_register_block_type(array(
			'name'              => 'hexagon_slider',
			'title'             => __('Hexagon Slider'),
			'description'       => __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/hexagon_slider/hexagon_slider.php',
			//'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/hexagon_slider/hexagon_slider.js',
			//'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/hexagon_slider/hexagon_slider.css',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'edit',
			'supports' => array( 'mode' => false ,'align' => false )
		));
		
		acf_register_block_type(array(
			'name'              => 'magic_slider',
			'title'             => __('Magic Slider'),
			'description'       => __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/magic_slider/magic_slider.php',
			//'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/magic_slider/magic_slider.js',
			//'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/magic_slider/magic_slider.css',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'edit',
			'supports' => array( 'mode' => false ,'align' => false )
		));

		acf_register_block_type(array(
			'name'              => 'hexagon',
			'title'             => __('Hexagon'),
			'description'       => __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/hexagon/hexagon.php',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'view',
			'supports' => array( 'mode' => true ,'align' => false )
		));

		acf_register_block_type(array(
			'name'              => 'button-ci',
			'title'             => __('button-ci'),
			'description'       => __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/button-ci/button-ci.php',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'view',
			'supports' => array( 'mode' => true ,'align' => false )
		));

		acf_register_block(array(
			'name'				=> 'posts_filter',
			'title'				=> __('Posts Filterfunktion'),
			'description'		=> __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/posts_filter/posts_filter.php',
			//'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/posts_filter/posts_filter.js',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'edit',
			'supports' => array( 'mode' => false ,'align' => false )
		));

		acf_register_block(array(
			'name'				=> 'accordeon',
			'title'				=> __('Akkordeon'),
			'description'		=> __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/accordeon/accordeon.php',
			//'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/accordeon/accordeon.css',
			//'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/accordeon/accordeon.js',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'view',
			'supports' => array( 'mode' => true ,'align' => false )
		));

		acf_register_block(array(
			'name'				=> 'flip_box',
			'title'				=> __('Flip Box'),
			'description'		=> __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/flip_box/flip_box.php',
			//'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/flip_box/flip_box.css',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'edit',
			'supports' => array( 'mode' => false ,'align' => false )
		));

		acf_register_block_type(array(
			'name'              => 'inx_mail',
			'title'             => __('INX-Mail Module'),
			'description'       => __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/inx_mail/inx_mail.php',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'edit',
			'supports' => array( 'mode' => false ,'align' => false )
		));
		
		acf_register_block_type(array(
			'name'              => 'ablaufdiagramm',
			'title'             => __('Ablaufdiagramm'),
			'description'       => __(''),
			'render_template'   => get_template_directory() . '/template-parts/blocks/ablaufdiagramm/ablaufdiagramm.php',
			//'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/ablaufdiagramm/ablaufdiagramm.css',
			//'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/ablaufdiagramm/ablaufdiagramm.js',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'mode'				=> 'edit',
			'supports' => array( 'mode' => false ,'align' => false )
        ));

	}
}