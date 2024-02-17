<?php
/**
 * Handles Plugin Activation
 *
 * @package kjr-recipe
 */

/**
 * Registers the recipe post type on plugin activation.
 */
function kjr_recipe_plugin_activate() {
	if ( version_compare( get_bloginfo( 'version' ), '6.0', '<' ) ) {
		wp_die(
			'WordPress must be running at least 6.0 for this plugin to work.',
			'Plugin Activation Error',
			array(
				'response'  => 200,
				'back_link' => true,
			)
		);
	}
	// flush_rewrite_rules();
}
