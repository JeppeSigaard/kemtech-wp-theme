<?php 

add_action( 'init', 'smamo_add_products' );

function smamo_add_products() {
	register_post_type( 'produkt', array(
		
        'menu_icon' 		 => 'dashicons-cart',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'produkt' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail','editor'),
        'labels'             => array(
            
            'name'               => _x( 'Produkter', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Produkt', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Produkter', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Produkter', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'produkt', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny produkt', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se produkt', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find produkt', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt produkt.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}