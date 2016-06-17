<?php 

$mb[] = array(
    'id' => 'sender_info',
    'title' => __( 'Oplysninger', 'rwmb' ),
    'post_types' => array('email'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Navn', 'rwmb' ),
            'id'    => "sender_navn",
            'type' => 'text',
        ),
        
         array(
            'name'  => __( 'Email', 'rwmb' ),
            'id'    => "sender_email",
            'type' => 'text',
        ),
        
         array(
            'name'  => __( 'Telefonnummer', 'rwmb' ),
            'id'    => "sender_telefon",
            'type' => 'text',
        ),
        
         array(
            'name'  => __( 'Besked', 'rwmb' ),
            'id'    => "sender_kommentar",
            'type' => 'textarea',
            'rows' => 10,
        ),
    ),
);