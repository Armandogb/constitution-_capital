<?php

	function add_custom_contact_us_page(){
		$labels = array(
			'name'                  => _x( 'Contact Us Page', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Contact Us Page', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Contact Us Page', 'text_domain' ),
			'name_admin_bar'        => __( 'Contact Us Page', 'text_domain' ),
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
			'label'                 => __( 'Contact Us Page', 'text_domain' ),
			'description'           => __( 'Contact Us Page Description', 'text_domain' ),
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
		register_post_type( 'contact_us_page', $args );
	}
	function register_contact_us_page(){
		add_custom_contact_us_page();
	}
	add_action( 'init', 'register_contact_us_page', 0 );

		function contact_page_add_meta_box() {
		add_meta_box( 
			'content-metabox', 
			'Contact Us Content', 
			'contact_page_content_metabox_callback', 
			'contact_us_page'
		);

		add_meta_box( 
			'info-metabox', 
			'Contact Us Info', 
			'contact_page_info_metabox_callback', 
			'contact_us_page'
		);
			
	}
	add_action( 'add_meta_boxes', 'contact_page_add_meta_box' );

	function contact_page_content_metabox_callback($post){
		wp_nonce_field( 'myplugin_save_meta_box_data', 'myplugin_meta_box_nonce' );

		?>
			<p><label for="main_title">Enter main header</label></p>
			<p><textarea rows="6" cols="80" type="text" name="main_title"><?php echo get_post_meta($post->ID, 'main_title', true); ?></textarea></p>
		<?php
	}
	
	function contact_page_content_save($post_id){

		if( ! isset( $_POST['myplugin_meta_box_nonce'] ) ) {
			return;
		}

		if( isset( $_POST['main_title'] ) ) {
			update_post_meta( $post_id, 'main_title', $_POST['main_title'] );
		}
	}

	add_action( 'save_post', 'contact_page_content_save' );

		function contact_page_info_metabox_callback($post){
		wp_nonce_field( 'myplugin_save_meta_box_data', 'myplugin_meta_box_nonce' );

		?>
			<p><label for="address">Enter address</label></p>
			<p><textarea rows="1" cols="40" type="text" name="address"><?php echo get_post_meta($post->ID, 'address', true); ?></textarea></p>

			<p><label for="city_state_zip">Enter city,state,zipcode</label></p>
			<p><textarea rows="1" cols="40" type="text" name="city_state_zip"><?php echo get_post_meta($post->ID, 'city_state_zip', true); ?></textarea></p>

			<p><label for="phone_number">Enter phone number</label></p>
			<p><textarea rows="1" cols="40" type="text" name="phone_number"><?php echo get_post_meta($post->ID, 'phone_number', true); ?></textarea></p>

			<p><label for="email">Enter email</label></p>
			<p><textarea rows="1" cols="40" type="text" name="email"><?php echo get_post_meta($post->ID, 'email', true); ?></textarea></p>
		<?php
	}
	
	function contact_page_info_save($post_id){

		if( ! isset( $_POST['myplugin_meta_box_nonce'] ) ) {
			return;
		}

		if( isset( $_POST['address'] ) ) {
			update_post_meta( $post_id, 'address', $_POST['address'] );
		}

		if( isset( $_POST['city_state_zip'] ) ) {
			update_post_meta( $post_id, 'city_state_zip', $_POST['city_state_zip'] );
		}

		if( isset( $_POST['phone_number'] ) ) {
			update_post_meta( $post_id, 'phone_number', $_POST['phone_number'] );
		}

		if( isset( $_POST['email'] ) ) {
			update_post_meta( $post_id, 'email', $_POST['email'] );
		}
	}

	add_action( 'save_post', 'contact_page_info_save' );


?>