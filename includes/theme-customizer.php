<?php

function patronarrecipe_customize_register( $wp_customize ){

    // echo '<pre>';
    //     var_dump( $wp_customize );
    // echo '<pre>';

    // $wp_customize->get_section( 'tite_tagline' )->title  =   'General';

    $wp_customize->add_panel( 'patronarrecipe', [
        'title'         =>  __( 'Patronar Recipe', 'patronarrecipe' ),
        'description'   =>  '<p>Patronar Recipe Theme Settings</p>',
        'priority'      =>  160
    ] );

    patronarrecipe_social_customizer_section( $wp_customize );
    patronarrecipe_misc_customizer_section( $wp_customize );
}