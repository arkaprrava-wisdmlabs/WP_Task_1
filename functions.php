<?php

add_theme_support( 'custom-logo');
add_theme_support( 'title-tag' );

function laslesvpn_enqueue_styles() {

    wp_enqueue_style( 'nav-css', get_template_directory_uri() . '/assets/css/nav.css' );

}
add_action( 'wp_enqueue_scripts', 'laslesvpn_enqueue_styles' );
?>