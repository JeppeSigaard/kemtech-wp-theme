<?php 

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes($mb){
    require 'subtitle.php';
    require 'featured_article.php';
    require 'produkt.php';
return $mb;

}

