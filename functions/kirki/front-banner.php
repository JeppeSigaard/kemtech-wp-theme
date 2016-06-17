<?php

if (class_exists('Kirki')){
    
    Kirki::add_section( 'front_banner', array(
        'title'          => __( 'Forsidebanner' ),
        'description'    => __( 'Vælg billede til forsidens banner' ),
        'panel'          => '', // Not typically needed.
        'priority'       => 160,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ) );
    
    Kirki::add_field( 'smamo_config', array(
        'settings' => 'front_banner_img',
        'label'    => __( 'Billede', 'smamo' ),
        'section'  => 'front_banner',
        'type'     => 'image',
        'priority' => 10,
        'default'  => '',
    ) );
}