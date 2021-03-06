<?php 

add_action('wp_enqueue_scripts','theme_enqueue_scripts');
function theme_enqueue_scripts(){

    wp_enqueue_style( 'raleway', '//fonts.googleapis.com/css?family=Raleway:900', false, false, 'all' );
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/style/main.css', false, false, 'all' );
    
    wp_enqueue_script('jq','//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js',array(),'1',true);
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/main.min.js' , array('jq'), false, true);
    
}

add_action('admin_enqueue_scripts',function(){
   wp_enqueue_script('smamo_admin_script',get_template_directory_uri() .'/js/admin/script.js',array('jquery'),'1',true);
});