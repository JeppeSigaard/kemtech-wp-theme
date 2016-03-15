<?php 

add_action( 'wp_ajax_fetch-products', 'smamo_prod_fetch' );
add_action( 'wp_ajax_nopriv_fetch-products', 'smamo_prod_fetch' );

function smamo_prod_fetch(){
    $response = array();
    
    $products = new WP_Query(array(
        'post_type' => 'produkt',
        'posts_per_page' => -1,
    ));
    
    while($products->have_posts()) { 
        $products->the_post();
        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'tiny' );
        $response['titles'][get_the_ID()] = get_the_title();
        $response['data'][get_the_ID()] = array(
            
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'subtitle' => get_the_subtitle(),
            'desc' => wp_trim_words(get_the_content(),$num_words = 20),
            'permalink' => get_the_permalink(),
            'img' =>  (isset($image_url[0])) ? $image_url[0] : false,
        );
    }

    wp_die(json_encode($response));
}

