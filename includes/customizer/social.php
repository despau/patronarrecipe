<?php

function patronarrecipe_social_customizer_section( $wp_customize ){


    // Settings

    $wp_customize->add_setting( 'patronarrecipe_facebook_handle', [
        'default'       =>  ''
    ] );

    $wp_customize->add_setting( 'patronarrecipe_twitter_handle', [
        'default'       =>  ''
    ] );

    $wp_customize->add_setting( 'patronarrecipe_instagram_handle', [
        'default'       =>  ''
    ] );

    $wp_customize->add_setting( 'patronarrecipe_email_handle', [
        'default'       =>  ''
    ] );

    $wp_customize->add_setting( 'patronarrecipe_phone_number_handle', [
        'default'       =>  ''
    ] );



    // Section

    $wp_customize->add_section( 'patronarrecipe_social_section', [
        'title'       =>  __( 'Patronarrecipe Social Settings', 'patronarrecipe' ),
        'priority'       =>  30
    ] );



    // Controllers

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'patronarrecipe_facebook_input',
        array(
            'label'          => __( 'Facebook Handle', 'patronarrecipe' ),
            'section'        => 'patronarrecipe_social_section',
            'settings'       => 'patronarrecipe_facebook_handle'
        )
        ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'patronarrecipe_twitter_input',
        array(
            'label'          => __( 'Twitter Handle', 'patronarrecipe' ),
            'section'        => 'patronarrecipe_social_section',
            'settings'       => 'patronarrecipe_facebook_handle'
        )
        ));


    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'patronarrecipe_instagram_input',
        array(
            'label'          => __( 'Instagram Handle', 'patronarrecipe' ),
            'section'        => 'patronarrecipe_social_section',
            'settings'       => 'patronarrecipe_instagram_handle'
        )
        ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'patronarrecipe_email_input',
        array(
            'label'          => __( 'Email Handle', 'patronarrecipe' ),
            'section'        => 'patronarrecipe_social_section',
            'settings'       => 'patronarrecipe_email_handle'
        )
        ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'patronarrecipe_email_input',
        array(
            'label'          => __( 'Email Handle', 'patronarrecipe' ),
            'section'        => 'patronarrecipe_social_section',
            'settings'       => 'patronarrecipe_email_handle'
        )
        ));


}