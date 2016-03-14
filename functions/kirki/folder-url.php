<?php 

if (class_exists('Kirki')){
    
    Kirki::add_section( 'folder_link', array(
        'title'          => __( 'Download folder' ),
        'description'    => __( 'Tilføj henvisning til folder, som kan hentes fra mediebiblioteket' ),
        'panel'          => '', // Not typically needed.
        'priority'       => 160,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ) );
    
    Kirki::add_field( 'folder_url', array(
        'settings' => 'folder_url',
        'label'    => __( 'Fil', 'smamo' ),
        'section'  => 'folder_link',
        'type'     => 'upload',
        'priority' => 10,
        'default'  => '',
    ) );
    
    Kirki::add_field( 'folder_label', array(
        'settings' => 'folder_label',
        'label'    => __( 'Tekst', 'smamo' ),
        'section'  => 'folder_link',
        'type'     => 'text',
        'priority' => 10,
        'default'  => '',
    ) );
}