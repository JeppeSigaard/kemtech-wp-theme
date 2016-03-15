<?php 

add_filter( 'rwmb_group_add_clone_button_text', 'smamo_clone_text', 10, 2 );
add_filter( 'rwmb_add_clone_button_text', 'smamo_clone_text', 10, 2 );
function smamo_clone_text( $text, $field ){

    switch ($field['id']){
        case 'feature_list' :
            $text = __( '+ Tilføj datalinje', 'rwmb' );
            break;

        case 'feature_addons' :
            $text = __( '+ Tilføj tilbehør', 'rwmb' );
            break;

        case 'product_param':
            $text = __('+ Tilføj parameter', 'rwmb');
            break;

        case 'product_var' : 
            $text = __( '+ Tilføj variation', 'rwmb' );
            break;
    }

    return $text;
}


add_filter('rwmb_media_add_string',function(){ return '+ Tilføj billede'; });