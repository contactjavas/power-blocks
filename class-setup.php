<?php
/**
 * Setup Power Blocks.
 *
 * @package Power_Blocks
 */

namespace PowerBlocks;

/**
 * Setup Power Blocks.
 */
class Setup {
	/**
	 * Run setup on plugins loaded.
	 *
	 * @param bool $run_setup Whether or not to run setup.
	 */
	public function __construct( $run_setup = false ) {
		if ( ! $run_setup ) {
			return;
		}
		add_action( 'plugins_loaded', array( $this, 'setup' ) );
	}

	/**
	 * Setup action & filter hooks.
	 */
	public function setup() {
		add_action( 'init', array( $this, 'setup_text_domain' ) );
		add_filter( 'block_categories', array( $this, 'register_block_category' ), 10, 2 );

		$this->register_block_types();

		add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_editor_assets' ) );
		add_action( 'enqueue_block_assets', array( $this, 'enqueue_editor_frontend_assets' ) );
	}

	/**
	 * Setup textdomain.
	 */
	public function setup_text_domain() {
		load_plugin_textdomain( 'power-blocks', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
	}

	/**
	 * Register block types.
	 */
	public function register_block_types() {
		$scan = glob( __DIR__ . '/blocks/*/class-block.php' );

		foreach ( $scan as $path ) {
			$explode    = explode( '/', $path );
			$block_name = $explode[ count( $explode ) - 2 ];

			require_once $path;

			$class_name = '\PowerBlocks\\Blocks\\' . $block_name . '\\Block';

			new $class_name();
		}
	}

	/**
	 * Register Gutenberg block category.
	 *
	 * @since 1.0.0
	 *
	 * @param array  $categories Block categories.
	 * @param object $post Post object.
	 *
	 * @return array The modified block categories.
	 */
	public function register_block_category( $categories, $post ) {
		return array_merge(
			$categories,
			array(
				array(
					'slug'  => 'powerblocks',
					'title' => __( 'Power Blocks', 'power-blocks' ),
				),
			)
		);
	}

	/**
	 * Enqueue block's assets for editor only.
	 *
	 * @return void
	 */
	public function enqueue_editor_assets() {
		// Styles.
		wp_enqueue_style(
			'powerblocks-editor',
			POWER_BLOCKS_PLUGIN_URL . '/assets/css/editor.css',
			array( 'wp-edit-blocks' ),
			POWER_BLOCKS_PLUGIN_VERSION
		);

		// Scripts.
		wp_enqueue_script(
			'powerblocks-editor',
			POWER_BLOCKS_PLUGIN_URL . '/assets/js/editor.js',
			array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-components', 'wp-editor', 'wp-api-fetch' ),
			POWER_BLOCKS_PLUGIN_VERSION,
			true
		);
	}

	/**
	 * Enqueue block's assets for both editor and frontend.
	 *
	 * @return void
	 */
	public function enqueue_editor_frontend_assets() {
		// Styles.
		wp_enqueue_style(
			'powerblocks-editor-frontend',
			POWER_BLOCKS_PLUGIN_URL . '/assets/css/editor-frontend.css',
			array( 'wp-edit-blocks' ),
			POWER_BLOCKS_PLUGIN_VERSION
		);

		// Scripts.
		wp_enqueue_script(
			'powerblocks-editor-frontend',
			POWER_BLOCKS_PLUGIN_URL . '/assets/js/editor-frontend.js',
			array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-components', 'wp-editor', 'wp-api-fetch' ),
			POWER_BLOCKS_PLUGIN_VERSION,
			true
		);

		wp_localize_script(
			'powerblocks-editor-frontend',
			'powerblocks',
			array(
				'homeUrl'       => home_url(),
				'pluginUrl'     => POWER_BLOCKS_PLUGIN_URL,
				'pluginVersion' => POWER_BLOCKS_PLUGIN_URL,
			)
		);
	}
}
