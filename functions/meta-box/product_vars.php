<?php 


add_filter( 'rwmb_meta_boxes', 'smamo_add_product_vars');
function smamo_add_product_vars($mb){
    
    $post_id = (isset($_GET['post'])) ? wp_strip_all_tags($_GET['post']) : false;
    $fields_array = array();

    $fields_array[] = array(
        'name' => __('Bestillingsnummer','rwmb'),
        'id' => 'order_number',
        'type' => 'text',
    );

    if($post_id){
        $post_params = get_post_meta($post_id,'product_param',true);
        if(!empty($post_params)){
            foreach($post_params as $p){

                $fields_array[] = array(
                    'name'  => $p,
                    'id'    => sanitize_title('param-'.$post_id . $p),
                    'type' => 'text',
                );

            }
        }
    }

    $mb[] = array(
        'id' => 'product_vars',
        'title' => __( 'Produktvariationer', 'rwmb' ),
        'post_types' => array('produkt'),
        'context' => 'normal',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(

            array(
                'id'    => "product_var",
                'type' => 'group',
                'clone' => true,
                'sort_clone' => true,
                'fields' => $fields_array,    
            ),
        ),
    );

    
    return $mb;
}