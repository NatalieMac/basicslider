<?php /* Functions for Basic Slider */


// Load scripts and styles
function basic_load_scripts_and_styles() {
  // Styles
  wp_register_style( 'googleFont', 'http://fonts.googleapis.com/css?family=Coda|Open+Sans' );
  wp_enqueue_style( 'custom', get_stylesheet_uri(), array('googleFont'), '1' );
  wp_enqueue_style( 'elastislide', get_stylesheet_directory_uri() . '/css/elastislide.css' );

  // Scripts
  wp_register_script( 'basicSlider', get_stylesheet_directory_uri() . '/js/bjqs-1.3.min.js', array('jquery') );
  wp_register_script( 'elastislide', get_stylesheet_directory_uri() . '/js/jquery.elastislide.js', array('jquery', 'modernizer') );
  wp_register_script( 'modernizer', get_stylesheet_directory_uri() . '/js/modernizr.custom.17475.js' );
  wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery', 'basicSlider', 'elastislide'), '20130306-1' );
}
add_action('wp_enqueue_scripts', 'basic_load_scripts_and_styles');

// Add support for post thumbs
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1024, 680, true );