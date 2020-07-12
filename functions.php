<?php

function fsd_theme_enqueue_styles()  {
 wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );
 $dependencies = array('bootstrap');
 wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
}

function fsd_theme_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', $dependencies, '4.5.0', true );
}

	add_action( 'wp_enqueue_scripts', 'fsd_theme_enqueue_styles' );
	add_action( 'wp_enqueue_scripts', 'fsd_theme_enqueue_scripts' );

	?>