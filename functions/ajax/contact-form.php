<?php 

add_action( 'wp_ajax_ct-form', 'smamo_handle_ct_form' );
add_action( 'wp_ajax_nopriv_ct-form', 'smamo_handle_ct_form' );

function smamo_handle_ct_form(){

    // Forbered response
    $response = array();
    
    // Indstil variabler
    $navn = (isset($_POST['navn'])) ? esc_attr($_POST['navn']) : false;
    $email = (isset($_POST['email'])) ? esc_attr($_POST['email']) : false;
    $telefon = (isset($_POST['telefon'])) ? esc_attr($_POST['telefon']) : false;
    $kommentar = (isset($_POST['kommentar'])) ? esc_attr($_POST['kommentar']) : false;
    
    // valider og send evt. fejl
    if(!$navn){
        $response['error'] = 'Navn mangler';
        wp_die(json_encode($response));
    }
    
    if(!$email){
        $response['error'] = 'Email mangler';
        wp_die(json_encode($response));
    }
    
    if(!$kommentar){
        $response['error'] = 'Kommentar mangler';
        wp_die(json_encode($response));
    }
    
    // opret sikkerhedskopi som post
    $post_vars = array(
        'post_title'     => $navn . ' | ' . $email,
        'post_status'    => 'publish',
        'post_type'      => 'email',
    );  
    
    $new = wp_insert_post($post_vars,true);
    if (is_wp_error($new)){
        $response['error'] = $new->get_error_message();
        wp_die(json_encode($response));
    }
    
    update_post_meta($new,'sender_navn',$navn);
    update_post_meta($new,'sender_email',$email);
    update_post_meta($new,'sender_telefon',$telefon);
    update_post_meta($new,'sender_kommentar',$kommentar);
    
    
    // send email
    $to = (get_theme_mod('info_email') !== '') ? get_theme_mod('info_email') : 'jeppe@smartmonkey.dk';
    
    $subject = 'Ny henvendelse via kontaktformular fra ' . $navn;
    
    $message = '<html><body><p><strong>Der er en ny hendvendelse via kontaktformularen på ' . esc_attr(get_bloginfo('url')) . '</strong></p>';
    $message .= '<p>Modtaget af: <strong>'. $navn .'</strong>';
    if ($telefon) {$message .= '<p>Telefon: <strong>'. $telefon .'</strong>';}
    $message .= '<p>Email: <strong>'. $email .'</strong>';
    $message .= '<p>Kommentar:</p><p>'. apply_filters('the_content', $kommentar ) .'</p><br><br>';
    $message .= '<p><i>Venlig hilsen ' . esc_attr(get_bloginfo('url')) . '</i></p>';
    $message .= '</body></html>';
    
    sendEmail( $navn, $email, $to, $subject, $message );
    
    
    // Aslut med succes
    $response['success'] = '<div><h3>Tak for din henvendelse</h3><p>Din besked er modtaget, og vi vil besvare den hurtigst muligt.</p></div>';
    wp_die(json_encode($response));
}