<?php

/*
Plugin Name: filters plugin
Plugin URI: http://www.oba7.com
Description: This is a test plugin
Author: Ahmad Hesham
Version: 1.0
Author URI: http://www.ahmadhesham.com
*/

function content_network($content)
{
	if(is_feed())
	{
		return $content . 'Created by Ahmad Hesham '. 
		date('Y') . 'all rights reserved';
	}

	return $content;
}

add_filter('the_content', 'content_network');