<?php
/**
 * Registers the recipe post type and its taxonomies.
 *
 * @package kjr-recipe
 */

/**
 *  Register the recipe post type.
 */
function kjr_register_recipe_post_type() {
	register_post_type(
		'recipe',
		array(
			'labels'          => array(
				'name'          => __( 'Recipes', 'kjr-recipe' ),
				'singular_name' => __( 'Recipe', 'kjr-recipe' ),
				'add_new'       => __( 'Add New', 'kjr-recipe' ),
				'add_new_item'  => __( 'Add New Recipe', 'kjr-recipe' ),
				'view_item'     => __( 'View Recipe', 'kjr-recipe' ),
				'edit_item'     => __( 'Edit Recipe', 'kjr-recipe' ),
				'all_items'     => __( 'All Recipes', 'kjr-recipe' ),
			),
			'public'          => true,
			'has_archive'     => true,
			'query_var'       => true,
			'rewrite'         => array( 'slug' => 'recipes/%cuisine%/' ),
			'show_in_rest'    => true,
			'capability_type' => 'post',
			'hierarchical'    => false,
			'menu_position'   => 5,
			// 'rest_controller_class' => 'WP_REST_Posts_Controller',
			'supports'        => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon'       => 'dashicons-carrot',
		)
	);

	register_taxonomy(
		'cuisine',
		'recipe',
		array(
			'labels'             => array(
				'name'          => 'Cuisines',
				'singular_name' => 'Cuisine',
				'add_new_item'  => 'Add New Cuisine',
				'view_item'     => 'View Cuisine',
				'all_items'     => 'All Cuisines',
			),
			'rewrite'            => array( 'slug' => 'cuisine' ),
			'hierarchical'       => true,
			'show_in_rest'       => true,
			'show_in_quick_edit' => true,
			'show_admin_column'  => true,
			'show_ui'            => true,
			'description'        => 'The cuisine of the recipe (i.e. "American", "Thai", "Italian").',
		)
	);

	register_taxonomy(
		'recipe_tag',
		'recipe',
		array(
			'labels'            => array(
				'name'          => 'Tags',
				'singular_name' => 'Tag',
				'add_new_item'  => 'Add New Tag',
				'view_item'     => 'View Tag',
				'all_items'     => 'All Tags',
			),
			'rewrite'           => array( 'slug' => 'tag' ),
			'hierarchical'      => false,
			'show_in_rest'      => true,
			'show_admin_column' => true,
			'show_ui'           => true,
			'description'       => 'The tags of the recipe (i.e. "gluten-free", "dairy-free", "vegan", "homemade").',
		)
	);
}
