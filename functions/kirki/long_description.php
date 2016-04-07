<?php 

if (class_exists('Kirki')){
    
    Kirki::add_field( 'long_description', array(
        'settings' => 'long_description',
        'label'    => __( 'Lang beskrivelse', 'smamo' ),
        'section'  => 'title_tagline',
        'type'     => 'textarea',
        'priority' => 10,
        'default'  => '',
    ) );
    
}