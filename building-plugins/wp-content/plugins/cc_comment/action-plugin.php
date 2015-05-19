<?php

/*
Plugin Name: Action plugin
Plugin URI: http://www.oba7.com
Description: This is a test plugin
Author: Ahmad Hesham
Version: 1.0
Author URI: http://www.ahmadhesham.com
*/

function cc_comment()
{
	global $_REQUEST;

	$to= "ahmadhesham285@gmail.com";
	$subject="New comment has been posted on your blog" . $_REQUEST['subject'];
	$message="Message from" . $_REQUEST['name'] . "at email" . $_REQUEST['email'];
	": \n" . $_REQUEST['comments'];

	wp_mail($to,$subject,$message);

}

add_action("comment_post","cc_comment");

function cccomment_init()
{
	register_setting('cccomment_options','cccomment_cc_email');
}

add_action('admin_init','cccomment_init');

function cc_comment_option_page()
{


	?>
	<div class="wrap">
	<?php screen_icon(); ?>
	<h2>CC Comments Options</h2>
	<p>Welcome to cc comments. Here you can edit your emal(s) to CC your emails to.</p>	
	<form method="post" action="options.php" id="cc-comments-email-options-form">

	<?php settings_fields('cccomm_options'); ?>

		<h3><label for="cccomment_cc_email">Email to send CC to</label>
		<input type="text" id="cccomment_cc_email" name="cccomment_cc_email"
		value="<?php echo esc_attr(get_option('cccomm_cc_email')); ?>" /></h3>
		<p><input type="submit" name="submit" value="Save Email" /></p>
		
	</form>
	</div>

	<?php

}

function cccomm_setting_field()
{	
	?>
	<input type="text" name="cccomm_cc_email" id="cccomm_cc_email"
	 value="<?php echo get_option('cccomm_cc_email'); ?>" />
	 <div id="emailInfo" align="left"></div>

	 <?php

}

function cccomm_setting_section()
{
	?>
	<p>Settings for the CC Comments plugin</p>
	<?php
}

function cccomm_plugin_menu()
{
	//add_menu_page('CC Comments','CC Comments','manage_options','cc-comments-plugin','cc_comment_option_page','/wordpress/wp-content/plugins/cc-comments/new_post.png',20);
	
	add_settings_section('cccomm','CC Comments','cccomm_setting_section','general');
	add_settings_field('cccomm_cc_email','CC Comments', 'cccomm_setting_field','general');
}

add_action('admin_menu','cccomm_plugin_menu');

function cccomm_email_check()
{
	$email = isset($_POST['cccomm_cc_email']) ? $_POST['cccomm_cc_email'] : null;
	$msg = 'invalid';

	if(is_email($email))
	{
		$msg = 'valid';
	}

	echo $msg;
	die();

}

add_action('wp_ajax_cccomm_email_check','cccomm_email_check');
add_action('admin_print_scripts-options-general.php','cccomm_email_check_script');

function cccomm_email_check_script()
{
	wp_enqueue_script("cc-comment",path_join(WP_PLUGIN_URL, basename(dirname(__FILE__)) . "/cc_comment.js"), array('jquery'));
}

function cccomm_uninstall()
{
	delete_option('cccomm_cc_email');
}

register_uninstall_hook(__FILE__,'cccomm_uninstall');


