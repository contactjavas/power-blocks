<?php
/**
 * Blocks Initializer
 *
 * Enqueue CSS/JS of all the blocks.
 *
 * @since   1.0.0
 * @package CGB
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

/**
 * Enqueue Gutenberg block assets for both frontend + backend.
 *
 * Assets enqueued:
 * 1. blocks.style.build.css - Frontend + Backend.
 * 2. blocks.build.js - Backend.
 * 3. blocks.editor.build.css - Backend.
 *
 * @uses {wp-blocks} for block type registration & related functions.
 * @uses {wp-element} for WP Element abstraction — structure of blocks.
 * @uses {wp-i18n} to internationalize the block's text.
 * @uses {wp-editor} for WP editor styles.
 * @since 1.0.0
 */
function powerblocks_cgb_block_assets() {
	// Register block styles for both frontend + backend.
	wp_register_style(
		'powerblocks-styles',
		plugins_url( 'dist/blocks.style.build.css', dirname( __FILE__ ) ),
		is_admin() ? array( 'wp-editor' ) : null,
		filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.style.build.css' )
	);

	// Register block editor script for backend.
	wp_register_script(
		'powerblocks-editor',
		plugins_url( '/dist/blocks.build.js', dirname( __FILE__ ) ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ),
		filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.build.js' ),
		true
	);

	// Register block editor styles for backend.
	wp_register_style(
		'powerblocks-editor',
		plugins_url( 'dist/blocks.editor.build.css', dirname( __FILE__ ) ),
		array( 'wp-edit-blocks' ),
		filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.editor.build.css' )
	);

	// WP Localized globals. Use dynamic PHP stuff in JavaScript via `powerBlocks` object.
	wp_localize_script(
		'powerblocks-editor',
		'powerBlocks',
		array(
			'pluginDir' => POWER_BLOCKS_PLUGIN_DIR,
			'pluginUrl' => POWER_BLOCKS_PLUGIN_URL,
		)
	);

	/**
	 * Register Gutenberg block on server-side.
	 *
	 * Register the block on server-side to ensure that the block
	 * scripts and styles for both frontend and backend are
	 * enqueued when the editor loads.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/blocks/writing-your-first-block-type#enqueuing-block-scripts
	 * @since 1.16.0
	 */
	register_block_type(
		'cgb/block-power-blocks',
		array(
			// Enqueue blocks.style.build.css on both frontend & backend.
			'style'         => 'powerblocks-styles',
			// Enqueue blocks.build.js in the editor only.
			'editor_script' => 'powerblocks-editor',
			// Enqueue blocks.editor.build.css in the editor only.
			'editor_style'  => 'powerblocks-editor',
		)
	);
}

// Hook: Block assets.
add_action( 'init', 'powerblocks_cgb_block_assets' );
