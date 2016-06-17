<?php 

if (class_exists('Kirki')){
    
    Kirki::add_section( 'mailchimp', array(
        'title'          => __( 'Mailchimp' ),
        'description'    => __( 'Tilføj API tilgang til mailchimp' ),
        'panel'          => '', // Not typically needed.
        'priority'       => 160,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ) );
    
    Kirki::add_field( 'smamo_config', array(
        'settings' => 'mailchimp_api',
        'label'    => __( 'API nøgle', 'smamo' ),
        'section'  => 'mailchimp',
        'type'     => 'text',
        'priority' => 10,
        'default'  => '',
    ) );
    
    Kirki::add_field( 'smamo_config', array(
        'settings' => 'list_ID',
        'label'    => __( 'Liste ID', 'smamo' ),
        'section'  => 'mailchimp',
        'type'     => 'text',
        'priority' => 10,
        'default'  => '',
    ) );
    
}