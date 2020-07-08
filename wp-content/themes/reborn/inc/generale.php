<?php
/**
 * Reborn functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Reborn
 */


if ( ! function_exists( 'reborn_setup' ) ) :
	
	function reborn_setup() {
		
		load_theme_textdomain( 'reborn', get_template_directory() . '/languages' );

        add_theme_support( 'automatic-feed-links' );
        
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

	}
endif;
add_action( 'after_setup_theme', 'reborn_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function reborn_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'reborn_content_width', 640 );
}
add_action( 'after_setup_theme', 'reborn_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function reborn_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'reborn' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'reborn' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'reborn_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function reborn_scripts() {
	//css
	wp_register_style('style', get_template_directory_uri() . '/asset/css/style.css', array(), '1.0', 'all');
	wp_enqueue_style('style'); // Enqueue it!
	
	wp_register_style('flexslider', get_template_directory_uri() . '/asset/css/flexslider.css', array(), '1.0', 'all');
    wp_enqueue_style('flexslider'); // Enqueue it!

	//js 
	wp_deregister_script( 'jquery' );
	wp_enqueue_script('jquery',get_template_directory_uri().'/js/vendor/jquery-1.9.1.min.js',array(),'1.9.1',true);

	wp_enqueue_script( 'reborn-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
	wp_enqueue_script('reborn-main');

	wp_enqueue_script( 'reborn-accordion', get_template_directory_uri() . '/js/accordion.js', array(), '20151215', true );
	wp_enqueue_script('reborn-accordion');

	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '1', true );
	wp_enqueue_script('flexslider');
}


add_action( 'wp_enqueue_scripts', 'reborn_scripts' );

//Masquer la version de WordPress
function cs_remove_version() {
	return '';
	}
	add_filter('the_generator', 'cs_remove_version');