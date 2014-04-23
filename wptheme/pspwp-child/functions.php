<?php
/**
 * PSPWP Child functions and definitions
 *
 * @package PSPWP Child
 */

function pspwp_agent_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Homepage | Left Column', 'pspwp-child' ),
		'id'            => 'homepageleft',
		'before_widget' => '<div class="welcome_box">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="welcome_title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage | Middle Column', 'pspwp-child' ),
		'id'            => 'homepagemiddle',
		'before_widget' => '<div class="welcome_box">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="welcome_title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage | Right Column', 'pspwp-child' ),
		'id'            => 'homepageright',
		'before_widget' => '<div class="welcome_box">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="welcome_title">',
		'after_title'   => '</div>',
	) );

}
add_action( 'widgets_init', 'pspwp_agent_widgets_init' );

function pspwp_child_scripts() {

	wp_enqueue_style( 'pspwp-child-css', get_stylesheet_directory_uri() . '/style.css', array() );

}
add_action( 'wp_enqueue_scripts', 'pspwp_child_scripts' );
