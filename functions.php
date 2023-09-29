<?php




// Basic setup function.
function techexplor_basic_setup() {

//Adding Language support
Load_theme_textdomain('techblog-pro' , get_template_directory() . '/languages');

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 */
	add_editor_style( 'custom-editor-style.css' );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Adds title.
	add_theme_support( 'title-tag' );
	
	// Adds custom-header.
	add_theme_support( "custom-header");


	// Yoast SEO breadcrumbs
	add_theme_support( 'yoast-seo-breadcrumbs' );

	//This theme supports all available post formats by default.
	add_theme_support( 'post-formats', array(
		 'audio', 'image', 'video'
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primarymenu', __( 'Main Menu', 'techblog-pro' ) );
	register_nav_menu( 'bottommenu', __( 'Bottom Menu', 'techblog-pro' ) );


}
add_action( 'after_setup_theme', 'techexplor_basic_setup' );



	/*
	 * This theme uses a custom background.
	 */
	$defaults = array(
		'default-color'          => '#ddd',
		'wp-head-callback'       => '_custom_background_cb',
	);
	add_theme_support( 'custom-background', $defaults );


	
/*  Add responsive container to embeds
/* ------------------------------------ */ 
function alx_embed_html( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}
 
add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'alx_embed_html' ); // Jetpack
	
	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true );
	
	


function techexplor_scripts_styles() {

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	// main stylesheet
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	// load css files
	wp_enqueue_style( 'stellarnav', get_template_directory_uri() . '/css/stellarnav.min.css', array(), '1.7' );
	wp_enqueue_style( 'others', get_template_directory_uri() . '/css/others.css', array(), '1.0' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.0' );
	
	
	// main jquery file
	wp_enqueue_script('jquery');	
	// load js files
	wp_enqueue_script( 'stellarnav-script', get_template_directory_uri() . '/js/stellarnav.js', array( 'jquery' ), '3.4' );
	wp_enqueue_style( 'techexplor-ie', get_template_directory_uri() . '/css/ie.css', array( 'main-style' ), '1.0' );
	wp_style_add_data( 'techexplor-ie', 'conditional', 'lt IE 9' );
	
}
add_action( 'wp_enqueue_scripts', 'techexplor_scripts_styles' );



//To add sidebars
function techexplor_sideber(){

register_sidebar(array(
	'name' => __('Blog page sidebar', 'techblog-pro'),
	'description' => __('You can add Blog page sidebar from here', 'techblog-pro'),
	'id' => 'blogsideber',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	'before_widget' => '<div class="single_sidebar">',
	'after_widget' => '</div>'
));


}
add_action('widgets_init' , 'techexplor_sideber');


// to add login and logout menu option
add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2);

function add_login_logout_link($items, $args) { 

	if ( $args->theme_location == 'primarymenu' ) {	

        ob_start();

        wp_loginout('index.php');

        $loginoutlink = ob_get_contents();

        ob_end_clean(); 

        $items .= '<li>'. $loginoutlink .'</li>';
    }

    return $items;

}


// give Website security
include_once('inc/functions/security.php');

// load Author info area
include_once('inc/functions/author-info.php');

// load Dashboard area
include_once('inc/functions/custom-dashboard.php');


// tmg plugin suggestion support


require_once(dirname( __FILE__ ).'/inc/incplugins/class-tgm-plugin-activation.php');
require_once(dirname( __FILE__ ).'/inc/incplugins/techblog-pro-tgm.php');


