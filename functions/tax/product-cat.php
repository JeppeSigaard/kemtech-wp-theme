<?php 
add_action( 'init', 'smamo_register_product_cat', 0 );

function smamo_register_product_cat() {
	$labels = array(
		'name'              => _x( 'Produktkategorier', 'taxonomy general name' ),
		'singular_name'     => _x( 'Produktkategori', 'taxonomy singular name' ),
		'search_items'      => __( 'Søg i Produktkategorier' ),
		'all_items'         => __( 'Alle Produktkategorier' ),
		'parent_item'       => __( 'Forælder' ),
		'parent_item_colon' => __( 'Forælder:' ),
		'edit_item'         => __( 'Rediger kategori' ),
		'update_item'       => __( 'Opdater kategori' ),
		'add_new_item'      => __( 'Tilføj nykategori' ),
		'new_item_name'     => __( 'Nykategori' ),
		'menu_name'         => __( 'Produktkategorier' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'kategori' ),
	);

	register_taxonomy( 'kategori', array( 'produkt' ), $args );

}