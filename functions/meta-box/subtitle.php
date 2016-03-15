<?php 

$mb[] = array(
    'id' => 'subtitle',
    'title' => __( 'Undertitel', 'rwmb' ),
    'post_types' => array('post','page','produkt'),
    'context' => 'side',
    'priority' => 'high',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Undertitel', 'rwmb' ),
            'id'    => "subtitle",
            'type' => 'text',
        ),
    ),
);