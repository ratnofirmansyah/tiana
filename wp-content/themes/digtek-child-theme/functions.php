<?php 
	add_action( 'wp_enqueue_scripts', 'digtek_child_them_enqueue_styles' );
	function digtek_child_them_enqueue_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
    } 
?>