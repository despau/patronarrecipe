<?php


function patronarrecipe_setup_theme() {

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'tite-tag' );
    add_theme_support( 'custom-logo' );

    register_nav_menu( 'primary', __( 'Primary Menu', 'patronarrecipe' ) );
    register_nav_menu( 'secondary', __( 'Secondary Menu', 'patronarrecipe' ) );

    // Register AdSense Plugin
    if (function_exists('quads_register_ad')){
        quads_register_ad( array(
            'location'          => 'patronarrecipe_header',
            'description'       => 'Header position'
        ) );
    }

}