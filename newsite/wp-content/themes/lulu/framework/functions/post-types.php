<?php
	add_action('init', 'create_post_types');
	function create_post_types() {
	
	register_post_type(
			'slider',
			array(
				'labels' => array(
					'name' => __( 'Lulu Slider' ),
					'singular_name' => __( 'Slider' ),
					'add_new' => __( 'Add New Slider Item' ),
					'add_new_item' => __( 'Add New Slider Item' ),
					'edit' => __( 'Edit' ),
					'edit_item' => __( 'Edit Slider' ),
					'new_item' => __( 'New Slider Item' ),
					'view' => __( 'View Slider' ),
					'view_item' => __( 'View Slider' ),
					'search_items' => __( 'Search Slider Items' ),
					'not_found' => __( 'No Slides found' ),
					'not_found_in_trash' => __( 'No Slides found in the Trash' ),
				),
				'public' => true,
				'show_ui' => true,
				'menu_position' => 5,
				'menu_icon' => get_stylesheet_directory_uri() . '/admin/images/news.png',
				'query_var' => true,
				'taxonomies' => array('category', 'post_tag'),
				'supports' => array( 'title','thumbnail', 'custom-fields', 'editor', 'comments'),
				'rewrite' => array( 'slug' => 'slides', 'with_front' => false ),
				'capability_type' => 'post',
				'can_export' => true
			)
		);
		
		register_post_type(
			'info',
			array(
				'labels' => array(
					'name' => __( 'Lulu Info' ),
					'singular_name' => __( 'Info' ),
					'add_new' => __( 'Add New Info Item' ),
					'add_new_item' => __( 'Add New Info Item' ),
					'edit' => __( 'Edit' ),
					'edit_item' => __( 'Edit Info' ),
					'new_item' => __( 'New Info Item' ),
					'view' => __( 'View Info Slider' ),
					'view_item' => __( 'View Info Slider' ),
					'search_items' => __( 'Search Info Slider Items' ),
					'not_found' => __( 'No Info Slides found' ),
					'not_found_in_trash' => __( 'No Info Slides found in the Trash' ),
				),
				'public' => true,
				'show_ui' => true,
				'menu_position' => 5,
				'menu_icon' => get_stylesheet_directory_uri() . '/admin/images/info.png',
				'query_var' => true,
				'taxonomies' => array('', ''),
				'supports' => array( 'title','thumbnail', 'custom-fields', 'editor', 'comments'),
				'rewrite' => array( 'slug' => 'info', 'with_front' => false ),
				'capability_type' => 'post',
				'can_export' => true
			)
		);
		
		register_post_type(
			'logos',
			array(
				'labels' => array(
					'name' => __( 'Lulu Logos' ),
					'singular_name' => __( 'Logos' ),
					'add_new' => __( 'Add New Item' ),
					'add_new_item' => __( 'Add New Logo' ),
					'edit' => __( 'Edit' ),
					'edit_item' => __( 'Edit Logo' ),
					'new_item' => __( 'New Logo Item' ),
					'view' => __( 'View Logo' ),
					'view_item' => __( 'View Logo' ),
					'search_items' => __( 'Search Logo Items' ),
					'not_found' => __( 'No Logo Items found' ),
					'not_found_in_trash' => __( 'No Logo items found in the Trash' ),
				),
				'public' => true,
				'show_ui' => true,
				'menu_position' => 5,
				'menu_icon' => get_stylesheet_directory_uri() . '/admin/images/bolt.png',
				'query_var' => true,
				'taxonomies' => array('', ''),
				'supports' => array( 'title','thumbnail', 'custom-fields', 'editor', 'comments'),
				'rewrite' => array( 'slug' => 'logos', 'with_front' => false ),
				'capability_type' => 'post',
				'can_export' => true
			)
		);
		
		register_post_type(
			'gallery',
			array(
				'labels' => array(
					'name' => __( 'Lulu Gallery' ),
					'singular_name' => __( 'Gallery' ),
					'add_new' => __( 'Add New Gallery Item' ),
					'add_new_item' => __( 'Add New Gallery Item' ),
					'edit' => __( 'Edit' ),
					'edit_item' => __( 'Edit Gallery' ),
					'new_item' => __( 'New Gallery Item' ),
					'view' => __( 'View Gallery' ),
					'view_item' => __( 'View Gallery' ),
					'search_items' => __( 'Search Gallery Items' ),
					'not_found' => __( 'No Logo Items found' ),
					'not_found_in_trash' => __( 'No Logo items found in the Trash' ),
				),
				'public' => true,
				'show_ui' => true,
				'menu_position' => 5,
				'menu_icon' => get_stylesheet_directory_uri() . '/admin/images/page.png',
				'query_var' => true,
				'taxonomies' => array('category', 'post_tag'),
				'supports' => array( 'title','thumbnail', 'custom-fields', 'editor' ),
				'rewrite' => array( 'slug' => 'gallery', 'with_front' => false ),
				'capability_type' => 'post',
				'can_export' => true
			)
		);

	}
?>