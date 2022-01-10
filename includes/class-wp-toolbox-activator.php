<?php

/**
 * Fired during plugin activation
 *
 * @link       tylerkanz.com
 * @since      1.0.0
 *
 * @package    Wp_Toolbox
 * @subpackage Wp_Toolbox/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wp_Toolbox
 * @subpackage Wp_Toolbox/includes
 * @author     Tyler Kanz <tylerkanz@gmail.com>
 */
class Wp_Toolbox_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		include('database/db-auto-table.php');
	}

}
