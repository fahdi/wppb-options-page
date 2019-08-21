<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.fahdmurtaza.com
 * @since      1.0.0
 *
 * @package    Options_Page_Example
 * @subpackage Options_Page_Example/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Options_Page_Example
 * @subpackage Options_Page_Example/includes
 * @author     Fahad Murtaza <info@fahdmurtaza.com>
 */
class Options_Page_Example_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'options-page-example',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
