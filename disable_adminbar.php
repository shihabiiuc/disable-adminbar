<?php
/**
 * Plugin Name:       Disable adminbar for non-admins
 * Description:       This plugin deactivates the admin toolbar for all the users except for the admins.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.0
 * Author:            Shihab
 * Author URI:        https://shihabiiuc.com/author/shihab/
 * License:           GPLv2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       disable-adminbar
 * 
 * @package Shihabiiuc
 */

/**
 * It is a free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 1 of the License, or (at your option) any later version.
 *
 * Disable Adminbar is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * @license GPL-v2-or-later
 */

defined( 'ABSPATH' ) || exit;

add_action('after_setup_theme', 'disable_adminbar');
function disable_adminbar() {
    if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    }
}