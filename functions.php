<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once 'vendor/autoload.php';
}

if ( ! function_exists( 'shopeo_child_theme_setup' ) ) {
	function shopeo_child_theme_setup() {
		load_child_theme_textdomain( 'shopeo-child-theme-scaffold', get_stylesheet_directory() . '/languages' );
	}
}

add_action( 'after_setup_theme', 'shopeo_child_theme_setup' );

if ( ! function_exists( 'shopeo_child_enqueue_scripts' ) ) {
	function shopeo_child_enqueue_scripts() {
		$theme_version = wp_get_theme()->get( 'Version' );
		//style
		wp_enqueue_style( 'shopeo-child-style', get_stylesheet_uri(), array(), $theme_version );
		wp_style_add_data( 'shopeo-child-style', 'rtl', 'replace' );

		//scripts
		wp_enqueue_script( 'shopeo-child-script', get_stylesheet_directory_uri() . '/assets/js/app.js', array( 'jquery' ), $theme_version );
		wp_script_add_data( 'shopeo-child-script', 'async', true );
	}
}

add_action( 'wp_enqueue_scripts', 'shopeo_child_enqueue_scripts', 20 );