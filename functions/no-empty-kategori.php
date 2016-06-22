<?php 
add_filter( 'wp_get_nav_menu_items', 'gowp_nav_remove_empty_terms', 10, 3 );
function gowp_nav_remove_empty_terms ( $items, $menu, $args ) {
    if(!is_admin()){
        global $wpdb;
        $empty = $wpdb->get_col( "SELECT term_taxonomy_id FROM $wpdb->term_taxonomy WHERE count = 0" );
        foreach ( $items as $key => $item ) {
            if ( ( 'taxonomy' == $item->type ) && ( in_array( $item->object_id, $empty ) ) ) {
                unset( $items[$key] );
            }
        }
    }
    return $items;
}
