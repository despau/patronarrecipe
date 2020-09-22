<?php

function patronarrecipe_misc_customizer_section( $wp_customize ){

    // Settings

    $wp_customize->add_setting( 'patronarrecipe_show_search', [
        'default'       =>  'yes',
        'transport'     =>  'postMessage'
    ] );

    $wp_customize->add_setting( 'patronarrecipe_show_cart', [
        'default'       =>  'yes',
        'transport'     =>  'postMessage'
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


    $wp_customize->add_setting( 'patronarrecipe_read_more_color', [
        'default'       =>  '#1ABC9C'
    ] );

    $wp_customize->add_setting( 'patronarrecipe_report_file', [
        'default'       =>  ''
    ] );





    // Section

    $wp_customize->add_section( 'patronarrecipe_misc_section', [
        'title'       =>  __( 'Patronarrecipe Misc Settings', 'patronarrecipe' ),
        'priority'       =>  30,
        'panel'          =>  'patronarrecipe'
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
        )
    );


    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'patronarrecipe_show_cart_input',
        array(
            'label'          => __( 'Show Cart Button in Header', 'patronarrecipe' ),
            'section'        => 'patronarrecipe_misc_section',
            'settings'       => 'patronarrecipe_show_cart',
            'type'           => 'checkbox',
            'choices'        => [
                'yes'       => 'Yes'
            ]
            )
        )
    );


    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'patronarrecipe_footer_copyright_text_input',
        array(
            'label'          => __( 'Copy Right Text', 'patronarrecipe' ),
            'section'        => 'patronarrecipe_misc_section',
            'settings'       => 'patronarrecipe_footer_copyright_text'
            )
        )
    );


    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'patronarrecipe_tos_page_input',
        array(
            'label'          => __( 'Footer TOS Page', 'patronarrecipe' ),
            'section'        => 'patronarrecipe_misc_section',
            'settings'       => 'patronarrecipe_tos_page',
            'type'           => 'dropdown-pages'
            )
        )
    );


    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'patronarrecipe_privacy_page_input',
        array(
            'label'          => __( 'Footer Privacy Page', 'patronarrecipe' ),
            'section'        => 'patronarrecipe_misc_section',
            'settings'       => 'patronarrecipe_privacy_page',
            'type'           => 'dropdown-pages'
            )
        )
    );


    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'patronarrecipe_read_more_color_input',
        array(
            'label'          => __( 'Read More Link', 'patronarrecipe' ),
            'section'        => 'patronarrecipe_misc_section',
            'settings'       => 'patronarrecipe_read_more_color'
            )
        )
    );


    $wp_customize->add_control( new WP_Customize_Upload_Control(
        $wp_customize,
        'patronarrecipe_report_file_input',
        array(
            'label'          => __( 'File Report', 'patronarrecipe' ),
            'section'        => 'patronarrecipe_misc_section',
            'settings'       => 'patronarrecipe_report_file'
            )
        )
    );


}