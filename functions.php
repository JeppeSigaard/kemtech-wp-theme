<?php 

// Hent hjælpefunktioner
require_once get_template_directory() . '/functions/functions.part.php';
require_once get_template_directory() . '/functions/functions.getsvg.php';
require_once get_template_directory() . '/functions/functions.thesubtitle.php';
require_once get_template_directory() . '/functions/functions.mailchimp.api.php';

function sendEmail( $from_name, $from, $to, $subject, $message ){
    $header = "From: ".$from_name." <".$from.">\r\n"; 
    $header.= "MIME-Version: 1.0\r\n"; 
    $header.= "Content-Type: text/html; charset=utf-8\r\n"; 
    $header.= "X-Priority: 1\r\n"; 
    $email = wp_mail($to, $subject, $message, $header);
    return $email;
}

// Hent functions parts 
get_functions_part(array('scripts','no-emojis','images','menus','no-empty-kategori'));

// Kirki
get_functions_part(array('config','site-info','folder-url','front-banner','long_description','mailchimp'),'kirki');

// Ajax
get_functions_part(array('fetch-products','contact-form'),'ajax');

// post types
get_functions_part(array('product','email'),'post-types');

// meta-box
get_functions_part(array('init','filters','product_vars'),'meta-box');

// taxonomies
get_functions_part(array('product-cat','product-img'),'tax');