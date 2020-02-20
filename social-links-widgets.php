<?php
/**
 * Plugin Name: Social Links Widget
 * Plugin URI: https://talib.netlify.com
 * Description: simple social links widgets
 * Version: 1.0.0
 * Author: TALIB
 * Author URI: https://talib.netlify.com
 * License: GPLv2 or laler.
 * Domain Path: languages/
 * Text Domain: social-links-widget
 */

// Define Constant
defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human!');
define('VERSION', time());
define('PLUGIN', plugin_basename(__FILE__));
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PUBLIC_DIR', plugin_dir_url(__FILE__) . 'assets/public');
define('ADMIN_DIR', plugin_dir_url(__FILE__) . 'assets/admin');

require_once plugin_dir_path(__FILE__) . '/includes/social-links-widget-scripts.php';
require_once plugin_dir_path(__FILE__) . '/includes/social-links-widget-content.php';
require_once plugin_dir_path(__FILE__) . '/includes/social-links-widget-class.php';
