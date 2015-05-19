<?php

/*
Plugin Name: Top Posts plugin
Plugin URI: http://www.oba7.com
Description: This is a test plugin
Author: Ahmad Hesham
Version: 1.0
Author URI: http://www.ahmadhesham.com
*/

function top_posts_widget()
{

	$top_posts_query = new WP_Query(array('posts_per_page'=>5,
											'orderby'=>'comment_count',
											'order'=>'DESC',
											'post__in'=>get_option('sticky_posts')));

	?>

	<h3>Posts on this page: </h3>

	<?php 
	if($top_posts_query->have_posts())
	{
		while($top_posts_query->have_posts())
		{
			$top_posts_query->the_post();

			?>

			<div class="tpp_posts">

				<a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>" id="<?php echo the_id(); ?>" class="comment_link"><?php echo the_title(); ?></a>
				(<?php echo comments_number(); ?>)
			</div>
			<?php
		}
	}
	?>

	<?php
}

function tpp_posts_comment_return()
{
	$post_id = isset($_POST['post_id']) ? $_POST['post_id'] : 0;

	if($post_id > 0)
	{
		$post = get_post($post_id);
		?>

		<div id="post">
			<?php echo $post->post_content; ?>
		</div>

		<?php
	} 

	die();
}

add_action('wp_ajax_nopriv_tpp_comments','tpp_posts_comment_return');

function tpp_posts_get_scripts()
{
	wp_enqueue_script("tpp_posts",path_join(WP_PLUGIN_URL, basename(dirname(__FILE__)) . "/top_posts.js"),array("jquery"));
}

add_action('wp_print_scripts','tpp_posts_get_scripts');


function top_posts_widget_init()
{
	register_sidebar_widget('Top Posts','top_posts_widget');
}

add_action('widgets_init','top_posts_widget_init');