<?php
/**
 * Power Block's helper methods.
 *
 * @package Power_Blocks
 */

namespace PowerBlocks;

/**
 * Power Block's helper methods.
 */
class Helper {
	/**
	 * Check if Gutenberg is active.
	 *
	 * @since 1.0.0
	 *
	 * @return boolean
	 */
	public static function is_gutenberg_active() {
		return function_exists( 'register_block_type' );
	}
}
