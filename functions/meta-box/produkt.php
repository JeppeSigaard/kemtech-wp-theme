<?php 

$mb[] = array(
    'id' => 'product_details',
    'title' => __( 'Produktdetaljer', 'rwmb' ),
    'post_types' => array('produkt'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Tekniske Data', 'rwmb' ),
            'id'    => "feature_list",
            'clone' => true,
            'sort_clone' => true,
            'type' => 'text',
            'size' => 60,
        ),
        
        array(
            'id' => 'breaker',
            'type' => 'custom_html',
            'std' => '<hr/>',
        ),
        
        array(
            'name'  => __( 'Tilbehør', 'rwmb' ),
            'id'    => "feature_addons",
            'clone' => true,
            'sort_clone' => true,
            'type' => 'text',
            'size' => 60,
        ),
        
    ),
);

$mb[] = array(
    'id' => 'product_params',
    'title' => __( 'Produktparametre', 'rwmb' ),
    'post_types' => array('produkt'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name' => __('Referencetegning','rwmb'),
            'id' => 'product_param_img',
            'type' => 'image_advanced',
            'max_file_uploads' => 1,
        ),
        
        array(
            'id' => 'breaker',
            'type' => 'custom_html',
            'std' => '<hr/>',
        ),
        
        array(
            'name'  => __( 'Parametre', 'rwmb' ),
            'id'    => "product_param",
            'type' => 'text',
            'clone' => true,
            'sort_clone' => true,
            'desc' => '<br/>Tilføj parametre hér og gem produktet (evt. som kladde) for at redigere det enkelte parametre for hver produktvariation',
        ),
    ),
);

$mb[] = array(
    'id' => 'product_downloads',
    'title' => __( 'Downloads', 'rwmb' ),
    'post_types' => array('produkt'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name' => __('Vedhæft datablad','rwmb'),
            'id' => 'download_data',
            'type' => 'file_advanced',
            'max_file_uploads' => 1,
        ),
        
         array(
            'name' => __('Vedhæft godkendelser','rwmb'),
            'id' => 'download_approve',
            'type' => 'file_advanced',
            'max_file_uploads' => 1,
        ),
    ),
);