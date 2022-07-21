<?php
/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @todo Justify why we need this or remove it. AFAIK nothing can be done with textdomains else than loading it.
 *       This, if true, makes this class a total waste of code.
 *
 * @link       https://example.com
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 * @author     Your Name <email@example.com>
 */
class Plugin_Name_I18n {
	/**
	 * Unique identifier for retrieving translated strings.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $domain    Unique identifier for retrieving translated strings.
	 */
	protected $domain;


	/**
	 * Initialize the text domain for i18n.
	 *
	 * @since    1.0.0
	 */
	public function __construct($domain) {
		$this->domain = $domain;
	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			$this->domain,
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
