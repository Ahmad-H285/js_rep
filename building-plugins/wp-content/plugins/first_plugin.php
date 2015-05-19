<?php

/*
Plugin Name: Test plugin
Plugin URI: http://www.oba7.com
Description: This is a test plugin
Author: Ahmad Hesham
Version: 1.0
Author URI: http://www.ahmadhesham.com
*/

// global $wp_version;

// if(!version_compare($wp_version, "3.0",">="))
// {
// 	die("This plugin requires version 3.0 or higher");
// }

function my_plugin_activate()
{
	error_log("Plugin Activated");
}

register_activation_hook(__FILE__, "my_plugin_activate");