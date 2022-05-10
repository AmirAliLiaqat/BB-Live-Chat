<?php

/*
Plugin Name:       ByteBunch Live Chat
Plugin URI:          https://bytebunch.com/plugin
Description:        This is wordpress plugin which is created for the wordpress site to live chat with admin and other staff members.
Version:               1.0.0
Requires at least: 5.2
Requires PHP:      8.1.2
Author:               ByteBunch
Author URI:        https://bytebunch.com
License:               GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:       bb_live_chat
Domain Path:       /languages
*/

// If anyone can access this file directory show error.
if ( ! defined( 'ABSPATH' ) ) {
    die;
}

// Define CONSTANT for plugin directory path.
if ( ! defined( 'PLUGIN_DIR_PATH' ) ) {
    define( 'PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );
}

// Define CONSTANT for plugin directory url.
if ( ! defined( 'PLUGIN_DIR_URL' ) ) {
    define( 'PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
}

// Define CONSTANT for plugin directory.
if ( ! defined( 'PLUGIN' ) ) {
    define( 'PLUGIN', plugin_basename( __FILE__ ) );
}