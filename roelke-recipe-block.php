<?php
/**
 * Plugin Name:       Recipe Block Plugin
 * Plugin URI:        https://github.com/kjroelke/recipe-plugin
 * Description:       Creates a block that allows you to add a recipe to your WordPress site that gives users control of how to edit the serving sizes.
 * Version:           0.1.0
 * Requires at least: 6.0
 * Requires PHP:      8.0
 * Author:            K.J. Roelke
 * Author URI:        https://kjroelke.info/
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       kjr-recipe
 *
 * @package kjr-recipe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once __DIR__ . '/includes/activate.php';
require_once __DIR__ . '/includes/recipe-post-type.php';
/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function kjr_recipe_plugin_init() {
	register_block_type( __DIR__ . '/build' );
	kjr_register_recipe_post_type();
}
add_action( 'init', 'kjr_recipe_plugin_init' );

register_activation_hook( __FILE__, 'kjr_recipe_plugin_activate' );
