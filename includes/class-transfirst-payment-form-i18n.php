<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.spenserhale.com
 * @since      1.0.0
 *
 * @package    Transfirst_Payment_Form
 * @subpackage Transfirst_Payment_Form/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Transfirst_Payment_Form
 * @subpackage Transfirst_Payment_Form/includes
 * @author     Spenser Hale <spenserhale@outlook.com>
 */
class Transfirst_Payment_Form_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'transfirst-payment-form',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
