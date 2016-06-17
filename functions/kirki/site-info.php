<?php 

if (class_exists('Kirki')){
    
    Kirki::add_section( 'site_info', array(
        'title'          => __( 'Information' ),
        'description'    => __( 'Tilføj generel info, som bruges på hele hjemmesiden' ),
        'panel'          => '', // Not typically needed.
        'priority'       => 160,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ) );
    
    Kirki::add_field( 'smamo_config', array(
        'settings' => 'info_logo',
        'label'    => __( 'Logo', 'smamo' ),
        'section'  => 'site_info',
        'type'     => 'image',
        'priority' => 10,
        'default'  => '',
    ) );
    
    Kirki::add_field( 'smamo_config', array(
        'settings' => 'info_name',
        'label'    => __( 'Navn', 'smamo' ),
        'section'  => 'site_info',
        'type'     => 'text',
        'priority' => 10,
        'default'  => '',
    ) );
    
    Kirki::add_field( 'smamo_config', array(
        'settings' => 'info_address',
        'label'    => __( 'Adresse', 'smamo' ),
        'section'  => 'site_info',
        'type'     => 'text',
        'priority' => 10,
        'default'  => '',
    ) );
    
    Kirki::add_field( 'smamo_config', array(
        'settings' => 'info_post',
        'label'    => __( 'Postnummer', 'smamo' ),
        'section'  => 'site_info',
        'type'     => 'text',
        'priority' => 10,
        'default'  => '',
    ) );
    
    Kirki::add_field( 'smamo_config', array(
        'settings' => 'info_by',
        'label'    => __( 'By', 'smamo' ),
        'section'  => 'site_info',
        'type'     => 'text',
        'priority' => 10,
        'default'  => '',
    ) );
    
    Kirki::add_field( 'smamo_config', array(
        'settings' => 'info_email',
        'label'    => __( 'Email', 'smamo' ),
        'section'  => 'site_info',
        'type'     => 'text',
        'priority' => 10,
        'default'  => '',
    ) );
    
    Kirki::add_field( 'smamo_config', array(
        'settings' => 'info_telefon',
        'label'    => __( 'Telefon', 'smamo' ),
        'section'  => 'site_info',
        'type'     => 'text',
        'priority' => 10,
        'default'  => '',
    ) );
    
}