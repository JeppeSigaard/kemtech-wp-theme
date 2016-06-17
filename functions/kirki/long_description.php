<?php 

if (class_exists('Kirki')){
    
    Kirki::add_field( 'smamo_config', array(
        'settings' => 'long_description',
        'label'    => __( 'Lang beskrivelse', 'smamo' ),
        'section'  => 'title_tagline',
        'type'     => 'textarea',
        'priority' => 10,
        'default'  => '',
    ) );
    
}