<?php

/*
Plugin Name: Browser Detector 
Plugin URI: http://www.oba7.com
Description: This is a test plugin
Author: Ahmad Hesham
Version: 1.0
Author URI: http://www.ahmadhesham.com
*/

function bdetector_activate()
{
	global $wpdb;

	$table_name = $wpdb-> prefix . 'bdetector';

	if($wpdb->get_var('SHOW TABLES LIKE ' . $table_name) != $table_name )
	{
		$sql = 'CREATE TABLE ' . $table_name . '(id INTEGER(10) UNSIGNED AUTO_INCREMENT,hit_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,user_agent VARCHAR(255),PRIMARY KEY (id) )';

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);

		add_option('bdetector_database_option','1.0');
	}
}

register_activation_hook(__FILE__, 'bdetector_activate');

function bdetector_insert_useragent()
{
	global $wpdb;

	$table_name = $wpdb -> prefix . "bdetector";

	$wpdb -> insert($table_name, array('user_agent'=>$_SERVER['HTTP_USER_AGENT']),array('%s')); 
}

add_action('wp_footer','bdetector_insert_useragent');