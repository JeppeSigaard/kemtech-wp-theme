<?php 

add_action( 'wp_ajax_newsletter-subscribe', 'smamo_mailchimp' );
add_action( 'wp_ajax_nopriv_newsletter-subscribe', 'smamo_mailchimp' );

function smamo_mailchimp(){
    $response = array();
    
    $post_vars = array(
        'name' => (isset($_POST['name'])) ? wp_strip_all_tags($_POST['name']) : false,
        'email' => (isset($_POST['email'])) ? wp_strip_all_tags($_POST['email']) : false,
    );
    
    
    // Navn skal udfyldes
    if(!$post_vars['name']){
        $response['error'] = 'Indtast et navn';
        wp_die(json_encode($response));
    }
    
     // Email skal udfyldes
    if(!$post_vars['email']){
        $response['error'] = 'Indtast en email';
        wp_die(json_encode($response));
    }
    
    
    // Opret subscriber
    if(class_exists('MailChimp')){
        
        $api_key = get_theme_mod('mailchimp_api');
        $list_ID = get_theme_mod('list_ID');
        if (!$api_key || !$list_ID){
            $response['error'] = 'Mangler liste ID eller api-nøgle';
            wp_die(json_encode($response));
        }
        
        $response['mc-creds'] = array(
            'key' => $api_key,
            'list' => $list_ID,
        );
        
        $MailChimp = new MailChimp($api_key);
        $result = $MailChimp->call('lists/subscribe', array(
            'id'                => $list_ID,
            'email'             => array('email'=>$post_vars['email']),
            'merge_vars'        => array('NAME'=>$post_vars['name']),
            'double_optin'      => false,
            'update_existing'   => true,
            'replace_interests' => false,
            'send_welcome'      => false,
        ));

        $response['mailchimp'] = $result;   
    }
    
    wp_die(json_encode($response));
}