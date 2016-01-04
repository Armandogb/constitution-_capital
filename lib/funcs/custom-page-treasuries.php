<?php

	function add_custom_treasuries_page(){
		$labels = array(
			'name'                  => _x( 'Treasuries Page', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Treasuries Page', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Treasuries Page', 'text_domain' ),
			'name_admin_bar'        => __( 'Treasuries Page', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
			'all_items'             => __( 'All Items', 'text_domain' ),
			'add_new_item'          => __( 'Add New Item', 'text_domain' ),
			'add_new'               => __( 'Add New', 'text_domain' ),
			'new_item'              => __( 'New Item', 'text_domain' ),
			'edit_item'             => __( 'Edit Item', 'text_domain' ),
			'update_item'           => __( 'Update Item', 'text_domain' ),
			'view_item'             => __( 'View Item', 'text_domain' ),
			'search_items'          => __( 'Search Item', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Treasuries Page', 'text_domain' ),
			'description'           => __( 'Treasuries Page Description', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array('title', 'editor','thumbnail'),
			'taxonomies'            => array( 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 2,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'menu_icon'             => 'dashicons-welcome-widgets-menus',
			'capability_type'       => 'page',
		);
		register_post_type( 'treasuries_page', $args );
	}
	function register_treasuries_page(){
		add_custom_treasuries_page();
	}
	add_action( 'init', 'register_treasuries_page', 0 );

	



?>