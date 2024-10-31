<?php
/**
 * Enqueue block scripts and styles
 *
 * @package offers-overview-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'enqueue_block_editor_assets', array( 'WDPOOB_Enqueue', 'editor_enqueue' ) );
add_action( 'wp_enqueue_scripts', array( 'WDPOOB_Enqueue', 'enqueue_block' ) );

/**
 * Enqueue class
 */
class WDPOOB_Enqueue {

	/**
	 * Enqueue scripts and styles on editor
	 */
	public static function editor_enqueue() {

		wp_enqueue_script(
			'wdp/offers-overview-block',
			plugins_url( 'build/block.min.js', WDPOOB_MAIN_FILE ),
			array(
				'wp-i18n',
				'wp-blocks',
				'wp-editor',
				'wp-components',
				'wp-element',
			),
			WDPOOB_VERSION,
			true
		);

		wp_enqueue_script(
			'wdp/offers-overview-inner-block',
			plugins_url( 'build/inner-block.min.js', WDPOOB_MAIN_FILE ),
			array(
				'wp-i18n',
				'wp-blocks',
				'wp-editor',
				'wp-components',
				'wp-element',
			),
			WDPOOB_VERSION,
			true
		);

		wp_enqueue_style( 'wdp/offers-overview-block-inspector-styles', plugins_url( 'build/inspector.css', WDPOOB_MAIN_FILE ), array(), WDPOOB_VERSION );
		self::enqueue_block( true );
	}

	/**
	 * Enqueue offers overview block styles on front-end
	 *
	 * @param bool $is_editor Are styles for editor or not.
	 */
	public static function enqueue_block( $is_editor = false ) {

		if ( true === apply_filters( 'wdpoob_use_plugin_styles', true ) ) {

			if ( empty( $is_editor ) ) {
				$is_editor = false;
			}

			wp_enqueue_style(
				'wdp/offers-overview-block',
				plugins_url( 'build/block' . esc_attr( true === $is_editor ? '-editor' : '' ) . '.css', WDPOOB_MAIN_FILE ),
				array(),
				WDPOOB_VERSION
			);
		}
	}
}
