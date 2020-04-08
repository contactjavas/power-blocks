<?php
/**
 * Plugin Name: Power Blocks
 * Plugin URI: https://github.com/MapSteps/power-blocks/
 * Description: Powerful Gutenberg blocks to build your website.
 * Author: David Vongries
 * Author URI: https://wp-powerblocks.com/
 * Version: 1.0.0
 * Text Domain: power-blocks
 *
 * @package Power_Blocks
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

// Helper constants.
define( 'POWER_BLOCKS_PLUGIN_DIR', rtrim( plugin_dir_path( __FILE__ ), '/' ) );
define( 'POWER_BLOCKS_PLUGIN_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );
define( 'POWER_BLOCKS_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
define( 'POWER_BLOCKS_PLUGIN_VERSION', '0.0.1' );

require __DIR__ . '/class-helper.php';
require __DIR__ . '/class-setup.php';

new PowerBlocks\Setup( true );
