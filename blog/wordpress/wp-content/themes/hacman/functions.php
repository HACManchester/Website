<?php
register_nav_menu( 'top_menu', 'Top Menu' );
register_sidebar( array(
	'name' => __( 'Primary Widget Area', 'hacman' ),
	'id' => 'primary-widget-area',
	'description' => __( 'The primary widget area', 'hacman' ),
	'before_widget' => '',
	'after_widget' => '<hr/>',
	'before_title' => '<h1>',
	'after_title' => '</h1>',
) );
register_sidebar( array(
	'name' => __( 'Contact Widget Area', 'hacman' ),
	'id' => 'secondary-widget-area',
	'description' => __( 'The contact us widget area', 'hacman' ),
	'before_widget' => '<li id="%1$s" class="contact widget-container %2$s"><div style="height: 1px;">&nbsp;</div>',
	'after_widget' => '</li>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
) );
if ( ! isset( $content_width ) ) $content_width = 630;
?>

