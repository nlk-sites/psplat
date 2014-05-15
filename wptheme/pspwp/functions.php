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

error_reporting(0);

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
	/*
	register_sidebar( array(
		'name'          => __( 'Search Widget', 'pspwp' ),
		'id'            => 'search-widget',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	*/
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
		'name'          => __( 'Footer | Logo', 'pspwp' ),
		'id'            => 'footersection1',
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

	register_sidebar( array(
		'name'          => __( 'Siderbar | Contact', 'pspwp' ),
		'id'            => 'sidebar_contact',
		'before_widget' => '<div class="eachWidget">',
		'after_widget'  => '<hr class="lightbar_hr"><br><br><div class="clearfix"></div></div>',
		'before_title'  => '<div class="featured_heading"><div class="featured_contact">',
		'after_title'   => '</div></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Siderbar | Left', 'pspwp' ),
		'id'            => 'sidebar_left',
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
	$theme = wp_get_theme();
	$vers = '1.0.' . filemtime( get_stylesheet_directory() . '/style.css'); //$theme->Version;
	$versjs = '1.0.' . filemtime( get_template_directory_uri() . '/js/custom.css'); //$theme->Version;


	// Styles
	wp_enqueue_style( 'pspwp-style', get_bloginfo( 'stylesheet_url' ), array(), $vers );
	wp_enqueue_style( 'all_css', get_template_directory_uri() . '/css/all_css.css', array(), $vers );
	wp_enqueue_style( 'jquery-ui-1.8.19.custom', get_template_directory_uri() . '/css/jquery_custom_light/jquery-ui-1.8.19.custom.css', array('pspwp-style') );
	wp_enqueue_style( 'jquery.ui.tabs', get_template_directory_uri() . '/css/jquery_custom_light/jquery.ui.tabs.css', array('pspwp-style'), $vers );
	wp_enqueue_style( 'bxslider.css', get_template_directory_uri() . '/bxslider/jquery.bxslider.css', array('pspwp-style'), $vers );


	// Scripts
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr-2.0.6.min.js', array('jquery'), '2.0.6', false );
	wp_enqueue_script( 'pspwp-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'pspwp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20130115', true );
	wp_enqueue_script( 'jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js', array('jquery'), '1.10.4');
	wp_enqueue_script( 'jquery.ui.tabs', get_template_directory_uri() . '/js/libs/ui/jquery.ui.tabs.js', array('jquery'), $vers, true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), $vers, true );
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js', array('jquery'), $vers, true );
	wp_enqueue_script( 'pspwp-custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), $versjs, true );
	wp_enqueue_script( 'pspwp-custom-head', get_template_directory_uri() . '/js/custom-head.js', array( 'jquery' ), $versjs, false );
	wp_enqueue_script( 'bxslider', get_bloginfo('template_url') . '/bxslider/jquery.bxslider.min.js', array( 'jquery' ), $vers, true);
	

	/*
	wp_enqueue_style( 'pspwp-style-sub', get_template_directory_uri() . '/css/style.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-search', get_template_directory_uri() . '/css/search.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-home', get_template_directory_uri() . '/css/home.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-nav', get_template_directory_uri() . '/css/nav.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-forms', get_template_directory_uri() . '/css/forms.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-slider', get_template_directory_uri() . '/css/slider.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-login', get_template_directory_uri() . '/css/login.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-structure', get_template_directory_uri() . '/css/structure.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-featured', get_template_directory_uri() . '/css/featured.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-listings', get_template_directory_uri() . '/css/listings.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-featured-listings', get_template_directory_uri() . '/css/featured_listings.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-account', get_template_directory_uri() . '/css/account.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-blog', get_template_directory_uri() . '/css/blog.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-contact', get_template_directory_uri() . '/css/contact.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-compare', get_template_directory_uri() . '/css/compare.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-mls_details', get_template_directory_uri() . '/css/mls_details.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-mls_results', get_template_directory_uri() . '/css/mls_results.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-pagination', get_template_directory_uri() . '/css/pagination.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'pspwp-style-side-panel', get_template_directory_uri() . '/css/side-panel.min.css', array('pspwp-style'), $theme->Version );
	wp_enqueue_style( 'jquery-ui-1.8.19.custom', get_template_directory_uri() . '/css/jquery_custom_light/jquery-ui-1.8.19.custom.css', array('pspwp-style') );
	wp_enqueue_style( 'jquery.ui.tabs', get_template_directory_uri() . '/css/jquery_custom_light/jquery.ui.tabs.css', array('pspwp-style') );
	wp_enqueue_style( 'video-js.min', get_template_directory_uri() . '/video-js/video-js.min.css', array('pspwp-style') );
	wp_enqueue_style( 'jquery.fancybox.css', get_template_directory_uri() . '/fancy/jquery.fancybox.css', array('pspwp-style'), $theme->Version, 'screen' );
	wp_enqueue_style( 'jquery.fancybox-buttons.css', get_template_directory_uri() . '/fancy/helpers/jquery.fancybox-buttons.css', array('pspwp-style'), $theme->Version, 'screen' );
	wp_enqueue_style( 'jquery.fancybox-thumbs.css', get_template_directory_uri() . '/fancy/helpers/jquery.fancybox-thumbs.css', array('pspwp-style'), $theme->Version, 'screen' );

	wp_enqueue_script( 'jquery-ui-1.8.17.custom.min', get_template_directory_uri() . '/js/libs/jquery-ui-1.8.17.custom.min.js', array('jquery'), $theme->Version, true );
	wp_enqueue_script( 'jquery.tools.min', get_template_directory_uri() . '/js/libs/jquery.tools.min.js', array('jquery'), $theme->Version, true );
	wp_enqueue_script( 'slides.jquery', get_template_directory_uri() . '/js/slides.jquery.js', array('jquery'), $theme->Version, true );
	wp_enqueue_script( 'mustache', get_template_directory_uri() . '/js/mustache.js', array('jquery'), $theme->Version, true );
	wp_enqueue_script( 'video.min', get_template_directory_uri() . '/video-js/video.min.js', array('jquery'), $theme->Version, true );
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), $theme->Version, true );
	wp_enqueue_script( 'cycle.min', get_template_directory_uri() . '/js/cycle.min.js', array('jquery'), $theme->Version, true );
	wp_enqueue_script( 'side-panel', get_template_directory_uri() . '/js/side-panel.js', array('jquery'), $theme->Version, true );
	wp_enqueue_script( 'galleria-1.2.8.min', get_template_directory_uri() . '/js/galleria-1.2.8.min.js', array('jquery'), $theme->Version, true );
	wp_enqueue_script( 'jquery.fancybox.pack', get_template_directory_uri() . '/fancy/jquery.fancybox.pack.js', array('jquery'), $theme->Version, true );
	wp_enqueue_script( 'jquery.fancybox-buttons', get_template_directory_uri() . '/fancy/helpers/jquery.fancybox-buttons.js', array('jquery'), $theme->Version, true );
	wp_enqueue_script( 'jquery.fancybox-media', get_template_directory_uri() . '/fancy/helpers/jquery.fancybox-media.js', array('jquery'), $theme->Version, true );
	wp_enqueue_script( 'jquery.fancybox-thumbs', get_template_directory_uri() . '/fancy/helpers/jquery.fancybox-thumbs.js', array('jquery'), $theme->Version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'pspwp-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
	
	*/

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
	if ( !is_front_page() )
		$classes[] = 'not-home';
	// return the $classes array
	return $classes;
}

// IDX forms stuff
function idx_show_price_options( $default = 'price', $this = NULL ) { ?>
	<option value=""><?=$default ?></option>
	<option value="200000" <?php if ( $this == 200000 ) { echo 'selected="selected"'; } ?> >200K</option>
	<option value="225000" <?php if ( $this == 225000 ) { echo 'selected="selected"'; } ?> >225K</option>
	<option value="250000" <?php if ( $this == 250000 ) { echo 'selected="selected"'; } ?> >250K</option>
	<option value="275000" <?php if ( $this == 275000 ) { echo 'selected="selected"'; } ?> >275K</option>
	<option value="300000" <?php if ( $this == 300000 ) { echo 'selected="selected"'; } ?> >300K</option>
	<option value="325000" <?php if ( $this == 325000 ) { echo 'selected="selected"'; } ?> >325K</option>
	<option value="350000" <?php if ( $this == 350000 ) { echo 'selected="selected"'; } ?> >350K</option>
	<option value="375000" <?php if ( $this == 375000 ) { echo 'selected="selected"'; } ?> >375K</option>
	<option value="400000" <?php if ( $this == 400000 ) { echo 'selected="selected"'; } ?> >400K</option>
	<option value="425000" <?php if ( $this == 425000 ) { echo 'selected="selected"'; } ?> >425K</option>
	<option value="450000" <?php if ( $this == 450000 ) { echo 'selected="selected"'; } ?> >450K</option>
	<option value="475000" <?php if ( $this == 475000 ) { echo 'selected="selected"'; } ?> >475K</option>
	<option value="500000" <?php if ( $this == 500000 ) { echo 'selected="selected"'; } ?> >500K</option>
	<option value="550000" <?php if ( $this == 550000 ) { echo 'selected="selected"'; } ?> >550K</option>
	<option value="600000" <?php if ( $this == 600000 ) { echo 'selected="selected"'; } ?> >600K</option>
	<option value="650000" <?php if ( $this == 650000 ) { echo 'selected="selected"'; } ?> >650K</option>
	<option value="700000" <?php if ( $this == 700000 ) { echo 'selected="selected"'; } ?> >700K</option>
	<option value="750000" <?php if ( $this == 750000 ) { echo 'selected="selected"'; } ?> >750K</option>
	<option value="800000" <?php if ( $this == 800000 ) { echo 'selected="selected"'; } ?> >800K</option>
	<option value="850000" <?php if ( $this == 850000 ) { echo 'selected="selected"'; } ?> >850K</option>
	<option value="900000" <?php if ( $this == 900000 ) { echo 'selected="selected"'; } ?> >900K</option>
	<option value="950000" <?php if ( $this == 950000 ) { echo 'selected="selected"'; } ?> >950K</option>
	<option value="1000000" <?php if ( $this == 1000000 ) { echo 'selected="selected"'; } ?> >1M</option>
	<option value="1250000" <?php if ( $this == 1250000 ) { echo 'selected="selected"'; } ?> >1.25M</option>
	<option value="1500000" <?php if ( $this == 1500000 ) { echo 'selected="selected"'; } ?> >1.5M</option>
	<option value="1750000" <?php if ( $this == 1750000 ) { echo 'selected="selected"'; } ?> >1.75M</option>
	<option value="2000000" <?php if ( $this == 2000000 ) { echo 'selected="selected"'; } ?> >2M</option>
	<option value="2250000" <?php if ( $this == 2250000 ) { echo 'selected="selected"'; } ?> >2.25M</option>
	<option value="2500000" <?php if ( $this == 2500000 ) { echo 'selected="selected"'; } ?> >2.5M</option>
	<option value="2750000" <?php if ( $this == 2750000 ) { echo 'selected="selected"'; } ?> >2.75M</option>
	<option value="3000000" <?php if ( $this == 3000000 ) { echo 'selected="selected"'; } ?> >3M</option>
	<option value="3250000" <?php if ( $this == 3250000 ) { echo 'selected="selected"'; } ?> >3.25M</option>
	<option value="3500000" <?php if ( $this == 3500000 ) { echo 'selected="selected"'; } ?> >3.5M</option>
	<option value="3750000" <?php if ( $this == 3750000 ) { echo 'selected="selected"'; } ?> >3.75M</option>
	<option value="4000000" <?php if ( $this == 4000000 ) { echo 'selected="selected"'; } ?> >4M</option>
	<option value="4250000" <?php if ( $this == 4250000 ) { echo 'selected="selected"'; } ?> >4.25M</option>
	<option value="4500000" <?php if ( $this == 4500000 ) { echo 'selected="selected"'; } ?> >4.5M</option>
	<option value="4750000" <?php if ( $this == 4750000 ) { echo 'selected="selected"'; } ?> >4.75M</option>
	<option value="5000000" <?php if ( $this == 5000000 ) { echo 'selected="selected"'; } ?> >5M</option>
	<option value="6000000" <?php if ( $this == 6000000 ) { echo 'selected="selected"'; } ?> >6M</option>
	<option value="7000000" <?php if ( $this == 7000000 ) { echo 'selected="selected"'; } ?> >7M</option>
	<option value="8000000" <?php if ( $this == 8000000 ) { echo 'selected="selected"'; } ?> >8M</option>
	<option value="9000000" <?php if ( $this == 9000000 ) { echo 'selected="selected"'; } ?> >9M</option>
	<option value="10000000" <?php if ( $this == 10000000 ) { echo 'selected="selected"'; } ?> >10M</option>
<?php
}


function curl_schools( $zip, $state ) {
    if (!function_exists('curl_init')){
		return false;
    }
    define( 'APIKEY', 'mbmi6wmtl8monyzfhcai0wxx' ); // greatschools api key
    $url = "http://api.greatschools.org/schools/nearby?key=" . APIKEY . "&zip=" . $zip . "&state=" . $state . "";
    $ch = curl_init( $url );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
	return $result;
}


//[idx-sidebar-form]
function idx_sidebar_render( $atts ){
	return '<script id="divLocal8cb9a_" type="text/javascript" src="http://widgets.diversesolutions.com/Scripts/Dynamic/widgetTLM.js?curDivID=divLocal8cb9a_&curWidth=240&curHeight=200&type=quicksearch&targetDomain=ead8tKOmNFVti8YtUKx7Ip9JBZtQ4nX1YcYX9ZpN9yM=&aid=85189&ssid=11&productType=1&location=1&fields=013&widgetType=1&muteStyles=false&currentURL=http://www.psplatinum.com/search/"></script><div id="div_divLocal8cb9a_" class="showme"><div id="QuickSearch_divLocal8cb9a_" class="QuickSearch_div"><div id="QuickSearch_divLocal8cb9a__QuickSearch" class="quicksearch_vert_div"><div class="full"><input id="search-locations" placeholder="Enter Location, Address, MLS #" class="search-locations" aria-haspopup="true" style="width: 222px; font-family: arial, sans-serif; font-size: 12px; padding: 4px 0px; border: 1px solid gray;"></div><div class="half"><label for="quicksearch_beds_list" class="quicksearch_label">BEDS</label><select id="quicksearch_beds_list" type="list" class="quicksearch_list"><option value="1">1+</option><option value="2">2+</option><option value="3">3+</option><option value="4">4+</option><option value="5">5+</option><option value="6">6+</option></select></div><div class="half"><label for="quicksearch_baths_list" class="quicksearch_label">BATHS</label><select id="quicksearch_baths_list" type="list" class="quicksearch_list"><option value="1">1+</option><option value="2">2+</option><option value="3">3+</option><option value="4">4+</option><option value="5">5+</option><option value="6">6+</option></select></div><div class="full"><label for="quicksearch_minprice_list" class="quicksearch_label" colspan="3">PRICE</label><select id="quicksearch_minprice_list" type="list" class="quicksearch_list"><option value="0">No Min</option><option value="100000">$100,000</option><option value="200000">$200,000</option><option value="300000">$300,000</option><option value="400000">$400,000</option><option value="500000">$500,000</option><option value="600000">$600,000</option><option value="700000">$700,000</option><option value="800000">$800,000</option><option value="900000">$900,000</option><option value="1000000">$1,000,000</option><option value="2000000">$2,000,000</option><option value="3000000">$3,000,000</option><option value="4000000">$4,000,000</option><option value="5000000">$5,000,000</option><option value="10000000">$10,000,000</option><option value="20000000">$20,000,000</option><option value="50000000">$50,000,000</option></select>&nbsp; -&nbsp; <select id="quicksearch_maxprice_list" type="list" class="quicksearch_list"><option value="0">No Max</option><option value="100000">$100,000</option><option value="200000">$200,000</option><option value="300000">$300,000</option><option value="400000">$400,000</option><option value="500000">$500,000</option><option value="600000">$600,000</option><option value="700000">$700,000</option><option value="800000">$800,000</option><option value="900000">$900,000</option><option value="1000000">$1,000,000</option><option value="2000000">$2,000,000</option><option value="3000000">$3,000,000</option><option value="4000000">$4,000,000</option><option value="5000000">$5,000,000</option><option value="10000000">$10,000,000</option><option value="20000000">$20,000,000</option><option value="50000000">$50,000,000</option></select></div><div class="full center"><input type="button" id="quicksearch_button" value="Search for Properties" class="quicksearch_button sbr-sbmt"></div></div></div></div>';
}
add_shortcode( 'idx-sidebar-form', 'idx_sidebar_render' );

// [get_blog_info dir="url"]
function shortcode_get_site_dir( $atts ) {

	extract( shortcode_atts( array(
		'dir' => 'url',
	), $atts ) );

	$url = get_bloginfo( $dir );

	return $url;

}
add_shortcode( 'get_blog_info', 'shortcode_get_site_dir' );


if( !function_exists( 'get_the_post_thumbnail_by_blog' ) ) {
	function get_the_post_thumbnail_by_blog($blog_id=NULL,$post_id=NULL,$size='post-thumbnail',$attrs=NULL) {
		global $current_blog;
		$sameblog = false;

		if( empty( $blog_id ) || $blog_id == $current_blog->ID ) {
			$blog_id = $current_blog->ID;
			$sameblog = true;
		}
		if( empty( $post_id ) ) {
			global $post;
			$post_id = $post->ID;
		}
		if( $sameblog )
			return get_the_post_thumbnail( $post_id, $size, $attrs );

		if( !has_post_thumbnail_by_blog($blog_id,$post_id) )
			return false;

		global $wpdb;
		$oldblog = $wpdb->set_blog_id( $blog_id );

		$blogdetails = get_blog_details( $blog_id );
		$thumbcode = str_replace( $current_blog->domain . $current_blog->path, $blogdetails->domain . $blogdetails->path, get_the_post_thumbnail( $post_id, $size, $attrs ) );

		$wpdb->set_blog_id( $oldblog );
		return $thumbcode;
	}

	function has_post_thumbnail_by_blog($blog_id=NULL,$post_id=NULL) {
		if( empty( $blog_id ) ) {
			global $current_blog;
			$blog_id = $current_blog;
		}
		if( empty( $post_id ) ) {
			global $post;
			$post_id = $post->ID;
		}

		global $wpdb;
		$oldblog = $wpdb->set_blog_id( $blog_id );

		$thumbid = has_post_thumbnail( $post_id );
		$wpdb->set_blog_id( $oldblog );
		return ($thumbid !== false) ? true : false;
	}

	function the_post_thumbnail_by_blog($blog_id=NULL,$post_id=NULL,$size='post-thumbnail',$attrs=NULL) {
		echo get_the_post_thumbnail_by_blog($blog_id,$post_id,$size,$attrs);
	}
}