<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'image', 'quote' ) );
add_theme_support( 'html5' );





function wpt_theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
  wp_enqueue_style( 'style_css', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'swipebox_css', get_template_directory_uri() . '/css/swipebox.css' );
	//wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
  wp_enqueue_style( 'http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );



// Add theme support to bootstrap navigation
function my_theme_setup()
{
    register_nav_menus(array(
        'primary-menu' => __( 'Primary Menu' )
        )
    );
}
add_action('init', 'my_theme_setup');



function wpt_theme_js() {
    
      
    
     wp_enqueue_script( '/easing.js', get_template_directory_uri() . '/js/easing.js', '', '', true );  
     wp_enqueue_script( '/easing.js', get_template_directory_uri() . '/js/easing.js', '', '', true );  
     wp_enqueue_script( '/move-top.js', get_template_directory_uri() . '/js/move-top.js', '', '', true );
    wp_enqueue_script( '/slider.js', get_template_directory_uri() . '/js/jquery.singlePageNav.min.js', '', '', true );	


}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );




?>