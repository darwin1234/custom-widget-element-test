<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.facebook.com/dar.wins.104/
 * @since      1.0.0
 *
 * @package    Custom_Element_Widget_Test
 * @subpackage Custom_Element_Widget_Test/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Custom_Element_Widget_Test
 * @subpackage Custom_Element_Widget_Test/includes
 * @author     Darwin <darwinsese@gmail.com>
 */
class Custom_Element_Widget_Test_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'custom element widget test',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
