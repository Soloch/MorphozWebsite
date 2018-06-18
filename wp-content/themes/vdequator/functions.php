<?php add_action( 'wp_enqueue_scripts', 'vdequator_theme_css',999);
	function vdequator_theme_css() {
	wp_enqueue_style( 'vdequator-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'vdequator-child-style', get_stylesheet_uri(), array( 'vdequator-parent-style' ) );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'custom-style-css', get_stylesheet_directory_uri()."/css/custom.css" );
	wp_dequeue_style( 'custom-css', get_template_directory_uri() .'/css/custom.css');	
}
?>