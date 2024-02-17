<?php
/**
 * Plugin Name:       Recipe Block Plugin
 * Plugin URI:        https://github.com/kjroelke/recipe-plugin
 * Description:       Creates a block that allows you to add a recipe to your WordPress site that gives users control of how to edit the serving sizes.
 * Version:           1.0.0
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

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function kjr_recipe_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'kjr_recipe_block_init' );