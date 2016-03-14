<?php 

$mb[] = array(
    'id' => 'featured_article',
    'title' => __( 'Vis på forsiden', 'rwmb' ),
    'post_types' => array('page'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name' => __( 'Vis denne side på forsiden', 'rwmb' ),
            'id'   => "show_on_front",
            'type' => 'checkbox',
            'std' => '0',
        ),
    ),
);