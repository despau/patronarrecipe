<?php


function patronarrecipe_buddypress_profile_tabs(){
    //check if recipe plugin is even activated first
    //also only want this to be compatible with patronarecipe
    if( !patronarrecipe_plugin_activated_check( 'prrecipe/index.php' ) ){
        //if fail, return.
        return;

    }

    global $bp;

    bp_core_new_nav_item([
        'name'                      =>  esc_html__( 'Recipes', 'patronarrecipe' ),
        'slug'                      =>  'recipes',
        'position'                  =>  100,
        'screen_function'           =>  'patronarrecipe_recent_recipes_tab',
        'show_for_displayed_user'   =>  true,
        'item_css_id'               =>  'patronarrecipe_user_recipes',
        'default_subnav_slug'       =>  'recipes'
    ]);

}