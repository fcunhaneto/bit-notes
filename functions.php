<?php
/**
 * Generate News.
 *
 * @package generate-news
 */

// Set our theme version.
const VERSION = '1.0.0';

if ( ! function_exists( 'bit_notes_setup' ) ) {
	add_action('after_setup_theme', 'bit_notes_setup');

	function bit_notes_setup () {
		add_theme_support( "title-tag" );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'status' ) );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );

		add_theme_support(
			'custom-logo',
			array(
				'height' => 70,
				'width' => 350,
				'flex-height' => true,
				'flex-width' => true,
			)
		);
	}
}

add_action( 'wp_enqueue_scripts', 'bit_notes_enqueue_styles' );

function bit_notes_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

