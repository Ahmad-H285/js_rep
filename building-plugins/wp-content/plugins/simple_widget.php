<?php

/*
Plugin Name: First Widget
Plugin URI: http://www.oba7.com
Description: A simple OOP widget
Author: Ahmad Hesham
Version: 1.0
Author URI: http://www.ahmadhesham.com
*/

class SimpleWidget extends WP_Widget
{
	function SimpleWidget()
	{
		$widget_options= array(
			'classname' => 'simple-widget',
			'description' => 'Just A Simple Widget');

		parent::WP_Widget('simple_widget', 'Simple Widget', $widget_options);

	}

	function widget($args, $instance)
	{
		extract( $args , EXTR_SKIP );
		$title = ($instance['title']) ? $instance['title'] : 'A Simple Widget';
		$body = ($instance['body']) ? $instance['body'] : 'A Simple Message';
		?>

		<?php echo $before_widget; ?>
		<?php echo $before_title . $title . $after_title; ?>
		<p><?php echo $body; ?></p>

		<?php
	}

	/*function update()
	{

	}
	*/

	function form($instance)
	{
		?>

		<label for="<?php echo $this->get_field_id('title') ;?>">
		Title:
		<input id="<?php echo $this-> get_field_id('title') ;?>"
		name="<?php echo $this-> get_field_name('title'); ?>"
		value="<?php echo esc_attr($instance['title']); ?>"
		</label>

		<label for="<?php echo $this->get_field_id('body') ;?>">
		Body:
		<textarea id="<?php echo $this-> get_field_id('body') ;?>"
		name="<?php echo $this-> get_field_name('body'); ?>"><?php echo esc_attr($instance['body']); ?></textarea>
		
		</label>

		<?php

	}
}

function simple_widget_init()
{
	register_widget("SimpleWidget");
}

add_action('widgets_init','simple_widget_init');
