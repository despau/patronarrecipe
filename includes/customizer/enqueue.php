<?php

function patronarrecipe_customize_preview_init(){
    wp_enqueue_script(
        'patronarrecipe_theme_customizer',
        get_theme_file_uri( '/assets/js/theme-customize.js' ),
        [ 'jquery', 'customizer-preview' ],
        false,
        true
    );
}