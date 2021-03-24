<?php 
	// require get_theme_file_path('/includes/search-route.php');

    add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
    function enqueue_parent_styles() {
    	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    } 

    add_action( 'wp_footer', 'enqueue_parent_scripts' );
    function enqueue_parent_scripts() {
    	wp_enqueue_script('parent_scripts', get_stylesheet_directory_uri() . '/js/search-page.js');
    }

?>