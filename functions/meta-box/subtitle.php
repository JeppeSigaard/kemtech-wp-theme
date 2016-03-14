<?php 

$mb[] = array(
    'id' => 'subtitle',
    'title' => __( 'Undertitel', 'rwmb' ),
    'post_types' => array('post','page'),
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