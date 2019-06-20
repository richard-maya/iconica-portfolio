<?php
	if(!isset($content_width)){
		$content_width = 660;
	}

	function iconicawp_setup(){
		add_theme_support('post-thumbnails');
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
	}

	add_action('after_setup_theme', 'iconicawp_setup');

	function iconica_scripts(){
		// wp_enqueue_style('iconica', get_template_directory_uri() . '/style.css');
		wp_enqueue_script('iconica', get_template_directory_uri() . '/assets/app.js');
	}

	add_action('wp_enqueue_scripts', 'iconica_scripts');
?>