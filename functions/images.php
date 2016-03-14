<?php 

add_action('init',function(){

    add_theme_support('post-thumbnails');
    add_image_size('hero-banner',1600,800,true);
    add_image_size('case-links',800,500,true);
    add_image_size('tiny',100,100,true);
    
});
