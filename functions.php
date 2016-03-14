<?php 

// Hent hjælpefunktioner
require_once get_template_directory() . '/functions/functions.part.php';
require_once get_template_directory() . '/functions/functions.getsvg.php';
require_once get_template_directory() . '/functions/functions.thesubtitle.php';

// Hent functions parts 
get_functions_part(array('scripts','no-emojis','images','menus'));

// Kirki
get_functions_part(array('site-info','folder-url','front-banner'),'kirki');

// Ajax
get_functions_part(array('fetch-products'),'ajax');

// post types
get_functions_part(array('product'),'post-types');

// meta-box
get_functions_part(array('init'),'meta-box');

// taxonomies
get_functions_part(array('product-cat'),'tax');