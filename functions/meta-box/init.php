<?php 


add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes($mb){

    // Your boxes or requires here
    require 'subtitle.php';
    require 'featured_article.php';
    
return $mb;

}




?>