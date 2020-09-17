<?php


function patronarrecipe_widgets() {

    $args = [
        'name'          =>  __( 'My First Theme Sidebar', 'patronarrecipe' ),
        'id'            =>  'patronarrecipe_sidebar',
        'description'   =>  __( 'Sidebar for PatronarRecipe website', 'patronarrecipe' ),
        'before_widget' =>  '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4>',
        'after_title'   =>  '</h4>'
    ];

    register_sidebar( $args );

}