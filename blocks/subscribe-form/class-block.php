<?php
/**
 * Subscribe form block.
 *
 * @package Power_Blocks
 */

namespace PowerBlocks\Blocks\SubscribeForm;

/**
 * Setup subscribe form block.
 */
class Block {
	/**
	 * Block's attributes.
	 *
	 * @var array
	 */
	private $attributes = array();

	/**
	 * Setup action & filter hooks.
	 */
	public function __construct() {
		$this->attributes = require __DIR__ . '/attributes.php';
		add_action( 'init', array( $this, 'register_block_type' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'localize_script' ), 15 );
	}

	/**
	 * Localize necessary javascript object.
	 */
	public function localize_script() {
		wp_localize_script(
			'powerblocks-editor',
			'powerblocksSubscribeForm',
			array(
				'attributes' => $this->attributes,
			)
		);
	}

	/**
	 * Register block type.
	 */
	public function register_block_type() {
		register_block_type(
			'powerblocks/subscribe-form',
			array(
				'attributes' => $this->attributes,
				// 'render_callback' => array( $this, 'render_output' ),
			)
		);
	}

	/**
	 * Render block's output.
	 *
	 * @param array  $attributes The block attributes.
	 * @param string $content The block content.
	 *
	 * @return string The output.
	 */
	public function render_output( $attributes, $content ) {
		ob_start();
		require __DIR__ . '/template.php';
		$output = ob_get_clean();

		return $output;
	}
}
