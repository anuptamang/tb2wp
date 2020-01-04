<? php 

	function cptui_register_my_cpts() {

		/**
		 * Post Type: info posts.
		 */

		$labels = [
			"name" => __( "info posts", "Network10" ),
			"singular_name" => __( "info post", "Network10" ),
			"menu_name" => __( "My info posts", "Network10" ),
			"all_items" => __( "All info posts", "Network10" ),
			"add_new" => __( "Add new", "Network10" ),
			"add_new_item" => __( "Add new info post", "Network10" ),
			"edit_item" => __( "Edit info post", "Network10" ),
			"new_item" => __( "New info post", "Network10" ),
			"view_item" => __( "View info post", "Network10" ),
			"view_items" => __( "View info posts", "Network10" ),
			"search_items" => __( "Search info posts", "Network10" ),
			"not_found" => __( "No info posts found", "Network10" ),
			"not_found_in_trash" => __( "No info posts found in trash", "Network10" ),
			"parent" => __( "Parent info post:", "Network10" ),
			"featured_image" => __( "Featured image for this info post", "Network10" ),
			"set_featured_image" => __( "Set featured image for this info post", "Network10" ),
			"remove_featured_image" => __( "Remove featured image for this info post", "Network10" ),
			"use_featured_image" => __( "Use as featured image for this info post", "Network10" ),
			"archives" => __( "info post archives", "Network10" ),
			"insert_into_item" => __( "Insert into info post", "Network10" ),
			"uploaded_to_this_item" => __( "Upload to this info post", "Network10" ),
			"filter_items_list" => __( "Filter info posts list", "Network10" ),
			"items_list_navigation" => __( "info posts list navigation", "Network10" ),
			"items_list" => __( "info posts list", "Network10" ),
			"attributes" => __( "info posts attributes", "Network10" ),
			"name_admin_bar" => __( "info post", "Network10" ),
			"item_published" => __( "info post published", "Network10" ),
			"item_published_privately" => __( "info post published privately.", "Network10" ),
			"item_reverted_to_draft" => __( "info post reverted to draft.", "Network10" ),
			"item_scheduled" => __( "info post scheduled", "Network10" ),
			"item_updated" => __( "info post updated.", "Network10" ),
			"parent_item_colon" => __( "Parent info post:", "Network10" ),
		];

		$args = [
			"label" => __( "info posts", "Network10" ),
			"labels" => $labels,
			"description" => "info post article",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"delete_with_user" => false,
			"show_in_rest" => true,
			"rest_base" => "",
			"rest_controller_class" => "WP_REST_Posts_Controller",
			"has_archive" => false,
			"show_in_menu" => true,
			"show_in_nav_menus" => true,
			"delete_with_user" => false,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => [ "slug" => "info_post", "with_front" => true ],
			"query_var" => true,
			"supports" => [ "title" ],
		];

		register_post_type( "info_post", $args );
	}

add_action( 'init', 'cptui_register_my_cpts' );
