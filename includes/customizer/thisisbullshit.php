<?php

patronarrecipe_misc_customizer_section( $wp_customize ){

    // Settings

    $wp_customize->add_setting( 'patronarrecipe_show_search', [
        'default'       =>  'yes',
    ] );

    $wp_customize->add_setting( 'patronarrecipe_show_cart', [
        'default'       =>  'yes'
    ] );

    $wp_customize->add_setting( 'patronarrecipe_footer_copyright_text', [
        'default'       =>  'Copyrights &copy; 2019 All Rights Reserved by PatronRecipe'
    ] );

    $wp_customize->add_setting( 'patronarrecipe_tos_page', [
        'default'       =>  0
    ] );

    $wp_customize->add_setting( 'patronarrecipe_privacy_page', [
        'default'       =>  0
    ] );




    // Section

    $wp_customize->add_section( 'patronarrecipe_misc_section', [
        'title'       =>  __( 'Patronarrecipe Misc Settings', 'patronarrecipe' ),
        'priority'       =>  30
    ] );




    // Controllers

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'patronarrecipe_show_search_input',
        array(
            'label'          => __( 'Show Search Button in Header', 'patronarrecipe' ),
            'section'        => 'patronarrecipe_misc_section',
            'settings'       => 'patronarrecipe_show_search',
            'type'           => 'checkbox',
            'choices'        => [
                'yes'       => 'Yes'
            ]
            )
        ));

}