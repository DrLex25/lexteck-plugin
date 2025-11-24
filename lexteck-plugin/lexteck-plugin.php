<?php
/*
Plugin Name: LexTeck Plugin
Description: Core utilities for API integrations, shortcodes, and admin tools.
Version: 1.0
Author: Dr. Lex
*/

if (!defined('ABSPATH')) exit;

// Load classes
require_once plugin_dir_path(__FILE__) . 'includes/class-lexteck-api.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-lexteck-shortcodes.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-lexteck-admin.php';

// Initialize
add_action('plugins_loaded', function () {
    new LexTeck_API();
    new LexTeck_Shortcodes();
    new LexTeck_Admin();
});
