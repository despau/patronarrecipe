<?php


// Setup
define('patronarrecipe_DEV_MODE', true);



// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ));
include( get_theme_file_path( '/includes/setup.php' ));
include( get_theme_file_path( '/includes/custom-nav-walker.php' ));
include( get_theme_file_path( '/includes/widgets.php' ));
include( get_theme_file_path( '/includes/theme-customizer.php' ));
include( get_theme_file_path( '/includes/customizer/social.php' ));
include( get_theme_file_path( '/includes/customizer/misc.php' ));
include( get_theme_file_path( '/includes/customizer/enqueue.php' ));
include( get_theme_file_path( '/includes/buddypress/profile-tabs.php' ));
include( get_theme_file_path( '/includes/utility.php' ));
include( get_theme_file_path( '/includes/buddypress/profile-posts.php' ));
include( get_theme_file_path( '/includes/admin/author-fields.php' ));
include( get_theme_file_path( '/includes/avatar.php' ));
include( get_theme_file_path( '/includes/home-query.php' ));


// Hooks
add_action( 'wp_enqueue_scripts', 'patronarrecipe_enqueue' );
add_action( 'after_setup_theme', 'patronarrecipe_setup_theme' );
add_action( 'widgets_init', 'patronarrecipe_widgets' );
add_action( 'customize_register', 'patronarrecipe_customize_register' );
add_action( 'customize_preview_init', 'patronarrecipe_customize_preview_init' );
//bp
add_action( 'bp_setup_nav', 'patronarrecipe_buddypress_profile_tabs' );
//remove sidebar from woocommerce.
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
//remove ec shoppage filtering
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30  );
//wp function to return excerpt without trailing dots. dats all there is to it.
add_filter( 'excerpt_more', '__return_false' );
add_action( 'show_user_profile', 'patronarrecipe_custom_user_profile_fields' );
add_action( 'edit_user_profile', 'patronarrecipe_custom_user_profile_fields' );
add_action( 'personal_options_update', 'patronarrecipe_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'patronarrecipe_save_extra_profile_fields' );
add_action( 'avatar_defaults', 'patronarrecipe_new_avatar' );
add_action( 'pre_get_posts', 'patronarrecipe_modify_homepage_query');


// Shortcodes