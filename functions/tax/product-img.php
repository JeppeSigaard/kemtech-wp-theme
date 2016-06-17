<?php 
    
$prod_tax_img =  new Tax_Meta_Class(array(
    'id' => 'tax_img',          
    'title' => 'Produktkategoriens billede',       
    'pages' => array('kategori'),        
    'context' => 'normal',
    'fields' => array(),
    'local_images' => false,
    'use_with_theme' => false
));

$prod_tax_img->addImage('kategori_img',array('name'=> __('Billede','tax-meta')));
$prod_tax_img->Finish();