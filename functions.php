<?php

function fsd_theme_enqueue_styles()  {
 wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );
 $dependencies = array('bootstrap');
 wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
 wp_enqueue_style( 'style', get_stylesheet_uri() );

}

function fsd_theme_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', $dependencies, '4.5.0', true );
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
}

	add_action( 'wp_enqueue_scripts', 'fsd_theme_enqueue_styles' );
	add_action( 'wp_enqueue_scripts', 'fsd_theme_enqueue_scripts' );

	//Creating a walker menu in order to integrate WordPress dynamic menus with template file

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'fsd-theme' ),
) );

/**
 * Custom logo definition
 */
function theme_logo_setup() {

add_theme_support( 'custom-logo', array(
	'height'      => 33,
	'width'       => 100,
	'flex-width' => true,
) );

}
add_action( 'after_setup_theme', 'theme_logo_setup' );
function theme_logo_setup_the_custom_logo() {

	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}
add_theme_support( 'post-thumbnails', array( 'post', 'cars' ) );

// Register Custom Post Types
add_action('init', 'register_custom_posts_init');

function register_custom_posts_init() {
	// Register Cars
	$products_labels = array(
		'name'               => 'Cars',
		'singular_name'      => 'Car',
		'menu_name'          => 'Cars'
	);
	$products_args = array(
		'labels'             => $products_labels,
		'public'             => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom_fields' ),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('cars', $products_args);

}
	?>