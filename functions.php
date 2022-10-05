<?php
require_once (get_theme_file_path('/inc/tgm.php')) ;
require_once(get_theme_file_path('/inc/customizer.php'));
function resto_bootsraping(){
    load_theme_textdomain('resto');
    add_theme_support('title-tag');
    add_theme_support('html5',array('search-form','comment-list'));

}

add_action('after_theme_setup','resto_bootsraping');

function register_resto_other(){
  add_theme_support("post-thumbnails");
  add_theme_support("custom-logo");
  add_image_size('slider-size',550,600,true);
}
add_action( 'init', 'register_resto_other' );

function myphpinformation_scripts() {    
    if( !is_admin() ) {
      wp_deregister_script( 'jquery' );
      wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',false );
      wp_enqueue_script( 'jquery' );
    }
  }

  add_action( 'wp_enqueue_scripts', 'myphpinformation_scripts' );

function resto_assets_scripts(){
//External CSS
wp_enqueue_style('main-bootsrip-css', get_theme_file_uri('/assets/vendor/bootstrap/bootstrap.min.css'),null,time());
wp_enqueue_style('select2-css', get_theme_file_uri('/assets/vendor/select2/select2.min.css'),null,time());
wp_enqueue_style('owlcarousel-css',get_theme_file_uri('/assets/vendor/owlcarousel/owl.carousel.min.css'),null,time());
wp_enqueue_style('cdn1-css','https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css',null,time());
wp_enqueue_style('cdn2-css','https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css',null,time());
wp_enqueue_style('cdn3-css','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css',null,time());

// Fonts 
wp_enqueue_style('google-font','https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700',null,time());
wp_enqueue_style('font-cdn','https://cdn.linearicons.com/free/1.0.0/icon-font.min.css',null,time());
wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.8.1/css/all.css',null,time());

// main css
wp_enqueue_style('main-css',get_theme_file_uri('/assets/css/style.min.css'),null,time());

// theme css
wp_enqueue_style( 'style', get_stylesheet_uri() );
//script files
wp_enqueue_script('modernizr','https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js',null,time());
// external JS
wp_enqueue_script('external-js-1','https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js',array('jquery'),time(),true);
// internal JS
wp_enqueue_script('poper-js',get_theme_file_uri('/assets/vendor/bootstrap/popper.min.js'),array('jquery'),time(),true);
wp_enqueue_script('bootstrap-js',get_theme_file_uri('/assets/vendor/bootstrap/bootstrap.min.js'),array('jquery'),time(),true);
wp_enqueue_script('select2-js',get_theme_file_uri('/assets/vendor/select2/select2.min.js'),array('jquery'),time(),true);
wp_enqueue_script('owlcarousel-js',get_theme_file_uri('/assets/vendor/owlcarousel/owl.carousel.min.js'),array('jquery'),time(),true);
wp_enqueue_script('owlcarousel-js','https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js',array('jquery'),time(),true);
wp_enqueue_script('stellar-js',get_theme_file_uri('assets/vendor/stellar/jquery.stellar.js'),array('jquery'),time(),true);
wp_enqueue_script('tempusdominus-js','https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js',array('jquery'),time(),true);

//Main JS
wp_enqueue_script('main-js',get_theme_file_uri('/assets/js/app.min.js'),array('jquery'),time(),true);
}

add_action('wp_enqueue_scripts','resto_assets_scripts');