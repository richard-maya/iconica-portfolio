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
		wp_enqueue_style('iconica', get_template_directory_uri() . '/style.css');
	}

	add_action('wp_enqueue_scripts', 'iconica_scripts');

	function featureText(){
        $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        if (strpos($url,'imagen-corporativa') !== false) {
            echo 'Imagen Corporativa';
        } 
        if (strpos($url,'animacion-2d-3d') !== false) {
            echo 'Animación 2D/3D';
        } 
        if (strpos($url,'diseno-de-apps') !== false) {
            echo 'Diseño de Apps';
        } 
        if (strpos($url,'diseno-web') !== false) {
            echo 'Diseño Web';
        } 
        if (strpos($url,'fotografia') !== false) {
            echo 'Fotografía';
        } 
        if (strpos($url,'videos-corporativos') !== false) {
            echo 'Videos Corporativos';
        } 
    }

    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();   
    }
?>