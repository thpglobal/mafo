<?php
/**
 * Functions and definitions - add logo and search from thptheme
 *
 */

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo',['height'=>125] );
add_theme_support( 'post-thumbnails' );

// Add search to main navigation
function add_search_form($items, $args) {
          if( $args->theme_location == 'menu-1' ){
          $items = '<li class="menu-item">'
			  . '<a href="javascript:thpsearch();">'
			  . '<span class="dashicons dashicons-search"></span></a>'
 			. '</li>'.$items;
          }
        return $items;
}
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );

/** 
 * Include primary navigation menu
 */
function untheme_nav_init() {
	register_nav_menus( array(
		'menu-1' => 'Primary Menu',
	) );
}
add_action( 'init', 'untheme_nav_init' );

/**
 * Register widget area.
 *
 */
function untheme_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'untheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function untheme_scripts() {
	wp_enqueue_style( 'untheme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'untheme-custom-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_script( 'untheme-scripts', get_template_directory_uri() . '/assets/js/scripts.js' );
}
add_action( 'wp_enqueue_scripts', 'untheme_scripts' );

function untheme_create_post_custom_post() {
	register_post_type('custom_post', 
		array(
		'labels' => array(
			'name' => __('Custom Post', 'untheme'),
		),
		'public'       => true,
		'hierarchical' => true,
		'supports'     => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
		), 
		'taxonomies'   => array(
				'post_tag',
				'category',
		) 
	));
}
add_action('init', 'untheme_create_post_custom_post'); // Add our work type
