<?php
/**
 *
 * @link              http://www.iranimij.com
 * @since             1.0.0
 * @package           post-tracking-code
 *
 * @wordpress-plugin
 * Plugin Name:       Remove Admin Notices
 * Plugin URI:        http://www.iranimij.com
 * Description:       Remove all admin notices just by enabling this plugin.
 * Version:           1.0.1
 * Author:            Iman Heydari
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ran
 * Domain Path:       /languages
 */

add_action( 'admin_init', 'ran_remove_all_admin_notices' );

function ran_remove_all_admin_notices() {
    remove_all_actions( 'admin_notices' );
}