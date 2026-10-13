<?php
/**
 * Restoria theme setup.
 *
 * @package Restoria
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'RESTORIA_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function restoria_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'restoria' ),
			'footer'  => esc_html__( 'Footer', 'restoria' ),
		)
	);

	load_theme_textdomain( 'restoria', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'restoria_setup' );

/**
 * Footer widget area.
 */
function restoria_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'restoria' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Widgets shown in the footer area.', 'restoria' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'restoria_widgets_init' );

/**
 * Enqueue front-end assets.
 */
function restoria_enqueue_assets() {
	wp_enqueue_style( 'restoria-style', get_stylesheet_uri(), array(), RESTORIA_VERSION );
	wp_enqueue_script( 'restoria-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), RESTORIA_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'restoria_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function restoria_enqueue_editor_assets() {
	wp_enqueue_style( 'restoria-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), RESTORIA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'restoria_enqueue_editor_assets' );

/**
 * Register the Restoria pattern category.
 */
function restoria_register_pattern_category() {
	register_block_pattern_category(
		'restoria',
		array( 'label' => esc_html__( 'Restoria', 'restoria' ) )
	);
}
add_action( 'init', 'restoria_register_pattern_category' );

/**
 * Custom block styles.
 */
function restoria_register_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'terracotta-outline', 'label' => esc_html__( 'Terracotta Outline', 'restoria' ) ) );
	register_block_style( 'core/group', array( 'name' => 'dish-card', 'label' => esc_html__( 'Dish Card', 'restoria' ) ) );
	register_block_style( 'core/image', array( 'name' => 'soft-frame', 'label' => esc_html__( 'Soft Frame', 'restoria' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'terracotta-rule', 'label' => esc_html__( 'Terracotta Rule', 'restoria' ) ) );
}
add_action( 'init', 'restoria_register_block_styles' );

/**
 * Custom excerpt length.
 */
function restoria_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'restoria_excerpt_length' );

/**
 * Simple inline SVG icon helper.
 *
 * @param string $name Icon name.
 * @return string SVG markup.
 */
function restoria_icon( $name ) {
	$icons = array(
		'phone'   => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.13.96.36 1.9.7 2.8a2 2 0 0 1-.45 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.25a2 2 0 0 1 2.1-.45c.9.34 1.84.57 2.8.7A2 2 0 0 1 22 16.9z"/>',
		'mail'    => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 6L2 7"/>',
		'pin'     => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
		'clock'   => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
		'shield'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/>',
		'star'    => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
		'check'   => '<path d="M20 6L9 17l-5-5"/>',
		'flame'   => '<path d="M12 22c4.4 0 8-3.6 8-8 0-3.5-2.5-6.5-5-8.5C14 4 13 2.5 13 1c-3 2-5 4.5-5.5 7C5.7 9 4 11.4 4 14c0 4.4 3.6 8 8 8z"/>',
		'utensils' => '<path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/><path d="M7 2v20"/><path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3zm0 0v7"/>',
		'wine'    => '<path d="M8 22h8"/><path d="M12 15v7"/><path d="M12 15a5 5 0 0 0 5-5V3H7v7a5 5 0 0 0 5 5z"/>',
		'leaf'    => '<path d="M11 20A7 7 0 0 1 4 13c0-4 3-8 8-10 5-2 8-1 8-1s1 3-1 8c-2 5-6 8-8 10z"/><path d="M4 21c4-6 8-9 12-11"/>',
		'users'   => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
		'calendar' => '<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>',
	);
	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}
	return '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[ $name ] . '</svg>';
}
