<?php

/*
Plugin Name: map-it shortcode
Plugin URI: http://www.oba7.com
Description: This is a test plugin
Author: Ahmad Hesham
Version: 1.0
Author URI: http://www.ahmadhesham.com
*/

function smtp_map_it($atts, $content=null)
{
	shortcode_atts(  array('title' => 'Your Map', 'address'=>''), $atts);
	$base_map_url= "https://maps.googleapis.com/maps/api/staticmap?sensor=false&zoom=14&size=256x256&format=png&center=";
	
	return '
	<h2>' .$atts['title']. '</h2>
	<img width="256" height="256" src="' . $base_map_url . urlencode($atts['address']) . '" />';

	
}

add_shortcode('map-it','smtp_map_it');