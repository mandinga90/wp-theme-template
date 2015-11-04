<?php

/** Tell WordPress to run theme_setup() when the 'after_setup_theme' hook is run. */
add_action('after_setup_theme','my_theme_setup');

/*
* @uses add_theme_support() To add support for post thumbnails and automatic feed links.
* @uses register_nav_menus() To add support for navigation menus.
*/
function my_theme_setup() {

	// register header menu as navigation menu
	/*
	add_action( 'init', register_nav_menu('header-menu',__( 'Header Menu' )));
	*/
	// allow custom background color/img
	$defaults = array(
		'default-color'          => 'fff',
		'default-image'          => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $defaults );

	// set custom header
	/*
	$args = array(
		'width'         => 874,
		'height'        => 120,
		/*'default-image' => get_template_directory_uri() . '/images/custom-header.jpg' */
	/*);
	add_theme_support( 'custom-header', $args );*/

}


?>
