<?php

function patronarrecipe_customize_register( $wp_customize ){
    patronarrecipe_social_customizer_section( $wp_customize );
    patronarrecipe_misc_customizer_section( $wp_customize );
}