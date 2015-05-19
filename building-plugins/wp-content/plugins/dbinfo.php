<?php

/*
Plugin Name: DBinfo plugin
Plugin URI: http://www.oba7.com
Description: This is a test plugin
Author: Ahmad Hesham
Version: 1.0
Author URI: http://www.ahmadhesham.com
*/

function databaseinfo_dashboard_widget()
{
	global $wpdb;
	global $current_user;

	?>
	<h2>DB info Dashboard widget</h2>
	<p><b>Last Query</b><?php echo $wpdb->last_query; ?></p>
	<p><b>Last Error</b><?php echo $wpdb->imap_last_error; ?></p>
	<p><b>Total Users: </b><?php echo $wpdb->query('SELECT ID FROM wp_users'); ?></p>
	<p><b>Last Post: </b><?php echo $wpdb->get_var('SELECT post_title FROM ' . $wpdb->posts . ' WHERE post_author = ' . $current_user->ID); ?></p>
	<p><b>User Emails: </b><?php $user_emails = $wpdb->get_col('SELECT user_email FROM ' . $wpdb->users); ?>
						 <pre><?php echo var_dump($user_emails); ?></pre></p>
	<p><b>Your Info: </b><?php $my_user_data = $wpdb->get_row('SELECT * FROM ' . $wpdb->users . ' WHERE ID = ' . $current_user->ID,ARRAY_A); ?><pre><?php echo var_dump($my_user_data); ?></pre></p>	
	<p><b>All Post Terms: </b><?php $post_terms = $wpdb->get_results('SELECT * FROM ' . $wpdb->terms); ?>
	<pre><?php echo var_dump($post_terms); ?></pre></p>		 
	<?php
}

function databaseinfo_register_widget()
{
	wp_add_dashboard_widget('databaseinfo_dashboard_widget','Counter Dashboard Widget', 'databaseinfo_dashboard_widget');
}

add_action('wp_dashboard_setup','databaseinfo_register_widget');