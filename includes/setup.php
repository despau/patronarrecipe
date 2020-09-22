<?php


function patronarrecipe_setup_theme() {

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'tite-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', [ 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ] );
    add_theme_support( 'starter-content', [
        'widgets'                   =>  [
            // Place three core-defined widgets in the sidebar area.
            'patronarrecipe_sidebar'            =>  [
                'text_business_info', 'search', 'text_about',
            ]
        ],

        // Create the custom image attachments used as post thumbnails for pages.
        'attachments'               =>  [
            'image-about'           =>  [
                'post_title'        =>  __( 'About', 'patronarrecipe' ),
                'file'              =>  'assets/images/about/1.jpg', // URL relative to the template directory.
            ],
        ],

        // Specify the core-defined pages to create and add custom thumbnails to some of them.
        'posts'                     =>  [
            'home'                  =>  array(
                'thumbnail'         => '{{image-about}}', //the curly brackets tell wp to look for an image with that id
            ),
            'about'                 =>  array(
                'thumbnail'         => '{{image-about}}',
            ),
            'contact'               => array(
                'thumbnail'         => '{{image-about}}',
            ),
            'blog'                  => array(
                'thumbnail'         => '{{image-about}}',
            ),
            'homepage-section'      => array(
                'thumbnail'         => '{{image-about}}',
            ),
        ],

        // Default to a static front page and assign the front and posts pages.
        'options'                   =>  [
            'show_on_front'         => 'page',
            'page_on_front'         => '{{home}}',
            'page_for_posts'        => '{{blog}}',
        ],

        // Set the front page section theme mods to the IDs of the core-registered pages.
        'theme_mods'                =>  [
            'patronarrecipe_facebook_handle'    =>  'patronarrecipe',
            'patronarrecipe_twitter_handle'     =>  'patronarrecipe',
            'patronarrecipe_instagram_handle'   =>  'patronarrecipe',
            'patronarrecipe_email'              =>  'patronarrecipe',
            'patronarrecipe_phone_number'       =>  'patronarrecipe',
            'patronarrecipe_header_show_search' =>  'yes',
            'patronarrecipe_header_show_cart'   =>  'yes',
        ],

        // Set up nav menus for each of the two areas registered in the theme.
        'nav_menus'                 =>  [
            // Assign a menu to the "top" location.
            'primary'               =>  array(
                'name'              =>  __( 'Primary Menu', 'patronarrecipe' ),
                'items'             =>  array(
                    'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),

            // Assign a menu to the "social" location.
            'secondary'             =>  array(
                'name'              =>  __( 'Secondary Menu', 'patronarrecipe' ),
                'items'             =>  array(
                    'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),
        ],
    ]);

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