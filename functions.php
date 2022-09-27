<?php
function resto_bootsraping(){
    load_theme_textdomain('resto');
    add_theme_support('title-tag');
    add_theme_support('html5',array('search-form','comment-list'));

}

add_action('after_theme_setup','resto_bootsraping');

function resto_assets_scripts(){
//External CSS
wp_enqueue_style('main-bootsrip-css', get_theme_file_uri('assets/vendor/bootstrap/bootstrap.min.css'));
wp_enqueue_style('select2-css', get_theme_file_uri('assets/vendor/select2/select2.min.css'));
wp_enqueue_style('owlcarousel-css',get_theme_file_uri('assets/vendor/owlcarousel/owl.carousel.min.css'));
wp_enqueue_style('cdn1-css','https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css');
wp_enqueue_style('cdn2-css','https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css');
wp_enqueue_style('cdn3-css','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css');

// Fonts 
wp_enqueue_style('google-font','https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700');
wp_enqueue_style('font-cdn','https://cdn.linearicons.com/free/1.0.0/icon-font.min.css');
wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.8.1/css/all.css');
// main css
wp_enqueue_style('main-css',get_theme_file_uri('assets/css/style.min.css'));



}

add_action('wp_enqueue-scripts','resto_assets_scripts');