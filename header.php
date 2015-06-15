<html>
<head>
	<title>The Haven @ Iringa</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class( $class ); ?>>
	<div id="cover"></div>
	<div id="wrapper">
		<!-- include header image -->
		<?php 
		$header_image = get_header_image();
		if ( ! empty( $header_image ) ) { ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" />
		</a>
		<?php }
		?>
<div id="header">
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>