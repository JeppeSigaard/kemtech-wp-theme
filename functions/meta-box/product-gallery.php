<?php 


$mb[] = array(
    'id' => 'product_gallery',
    'title' => __( 'Flere billeder', 'rwmb' ),
    'post_types' => array('produkt'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'id'    => "item_gallery_active",
            'type' => 'checkbox',
            'name' => __('Aktiver galleri','rwmb'),
            'std' => 0,
        ),
        array(
            'id'    => "gallery_items",
            'type' => 'image_advanced',
            'max_file_uploads' => 5,
        ),
    ),
);
