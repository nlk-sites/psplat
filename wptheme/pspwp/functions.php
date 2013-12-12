<?php
/**
 * PSPWP functions and definitions
 *
 * @package PSPWP
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'pspwp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function pspwp_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on PSPWP, use a find and replace
	 * to change 'pspwp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'pspwp', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'pspwp' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'pspwp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	add_image_size( 'agent-thumb', 222, 119 );
	add_image_size( 'agent-detail', 242, 241 );
	add_image_size( 'profile-thumb', 700, 275 );
	add_image_size( 'slider-image', 960, 343 );
}
endif; // pspwp_setup
add_action( 'after_setup_theme', 'pspwp_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function pspwp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'pspwp' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Search Widget', 'pspwp' ),
		'id'            => 'search-widget',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Homepage | Buys Of the Week', 'pspwp' ),
		'id'            => 'buys_of_the_week',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Homepage | Featured Listing', 'pspwp' ),
		'id'            => 'featured-listing',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Homepage | Recently Reduced', 'pspwp' ),
		'id'            => 'recently-reduced',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Homepage | Recently Sold', 'pspwp' ),
		'id'            => 'recently-sold',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Homepage | Just Listed', 'pspwp' ),
		'id'            => 'just-listed',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer | Section 1', 'pspwp' ),
		'id'            => 'footersection1',
		'before_widget' => '<div class="f_pod">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer | Section 2', 'pspwp' ),
		'id'            => 'footersection2',
		'before_widget' => '<div class="f_pod">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );				
	
	register_sidebar( array(
		'name'          => __( 'Footer | Section 3', 'pspwp' ),
		'id'            => 'footersection3',
		'before_widget' => '<div class="f_pod">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer | Copyright', 'pspwp' ),
		'id'            => 'copyrightsection',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Siderbar | Right', 'pspwp' ),
		'id'            => 'sidebar_right',
		'before_widget' => '<div class="eachWidget">',
		'after_widget'  => '<hr class="lightbar_hr"><br><br><div class="clearfix"></div></div>',
		'before_title'  => '<div class="featured_heading"><div class="featured_contact">',
		'after_title'   => '</div></div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Siderbar | Community Detail', 'pspwp' ),
		'id'            => 'sidebar_community',
		'before_widget' => '<div class="eachWidget">',
		'after_widget'  => '<hr class="lightbar_hr"><br><br><div class="clearfix"></div></div>',
		'before_title'  => '<div class="featured_heading"><div class="featured_contact">',
		'after_title'   => '</div></div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Agent | Sidebar', 'pspwp' ),
		'id'            => 'agent-widgets',
		'before_widget' => '<div class="eachWidget">',
		'after_widget'  => '<hr class="lightbar_hr"><br><br><div class="clearfix"></div></div>',
		'before_title'  => '<div class="featured_heading"><div class="featured_contact">',
		'after_title'   => '</div></div>',
	) );
	
	
}
add_action( 'widgets_init', 'pspwp_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function pspwp_scripts() {
	wp_enqueue_style( 'pspwp-style', get_stylesheet_uri() );

	wp_enqueue_script( 'pspwp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'pspwp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'pspwp-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'pspwp_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
require get_template_directory() . '/inc/wp_custom_navwalker.php';


add_filter('widget_text', 'do_shortcode');

add_shortcode('template-url', 'template_url');

function template_url()
{
	return get_bloginfo('template_url');
}

add_shortcode('blog-url', 'blog_url');

function blog_url()
{
	return get_bloginfo('url');
}

// Add specific CSS class for search widgets
add_filter('body_class','idx_not_home');
function idx_not_home($classes) {
	// add 'class-name' to the $classes array
	$classes[] = 'not-home';
	// return the $classes array
	return $classes;
}