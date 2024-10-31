<?php
/**
 * Plugin Name: Offers Overview Block
 * Plugin URI: http://wedoplugins.com/plugins/offers-overview-block/
 * Description: This plugin adds an offers overview Block to new WordPress Blocks editor.
 * Author: We Do Plugins
 * Author URI: http://wedoplugins.com/
 * Version: 1.1.3
 * License: GPLv3
 * Text Domain: offers-overview-block
 *
 * @package offers-overview-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'WDPOOB_MAIN_FILE', __FILE__ );
define( 'WDPOOB_VERSION', '1.1.3' );

/**
 * Require plugin classes
 */
require_once dirname( WDPOOB_MAIN_FILE ) . '/classes/class-wdpoob-enqueue.php';
require_once dirname( WDPOOB_MAIN_FILE ) . '/classes/class-wdpoob-blockssummarypage.php';
