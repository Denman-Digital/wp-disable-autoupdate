<?php

/**
 * Plugin Name: Disable Auto-Updates
 * Plugin URI: https://github.com/Denman-Digital/wp-disable-autoupdate
 * Description: Disable all auto-updates for WordPress core, plugins, & themes.
 * Requires PHP: 5.6
 * Version: 1.0
 * Author: Denman Digital
 * Author URI: https://denman.digital
 * License: GPL2
 * License URI: https://github.com/Denman-Digital/wp-disable-autoupdate/blob/main/LICENSE
 */

defined('ABSPATH') || exit;

if (!defined('WP_AUTO_UPDATE_CORE')) {
	define('WP_AUTO_UPDATE_CORE', false);
}

add_filter('automatic_updater_disabled', '__return_true');
add_filter('auto_update_core', '__return_false');
add_filter('auto_update_plugin', '__return_false');
add_filter('auto_update_theme', '__return_false');
