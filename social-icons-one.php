<?php
/*
  Plugin Name: Scroll To Top One
  Plugin URI: http://admin-builder.com
  Description: Add a custom/dinamic scroll to top button to your site
  Version: 1.0
  Author: rootabout
  Author URI: http://admin-builder.com
  License: GPLv2 or later
  Text Domain: Scroll To Top One
 */

 require_once 'abExport.php';

if (!function_exists('stto_register_style')) {
    function stto_register_style()
    {
        wp_enqueue_style('style-name', plugin_dir_url(__FILE__).'/style.css');
    }
    add_action('wp_enqueue_scripts', 'stto_register_style');
}
