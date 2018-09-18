<?php
/*
Implement
--------
This function is run if code is checked on page.

*/
//CHECK IF LOGGED IN

include_once(ABSPATH . 'wp-includes/pluggable.php');

//Says to run function in header of wordpress page if User is not logged in & not on admin page
//if ( ! is_admin() && !is_user_logged_in()  ) { add_action('wp_head', 'ciuli_your_function'); }
if ( ! is_admin() && !is_user_logged_in()  ) { add_action('wp_head', 'ciuli_your_function'); }

//Function to check if checked / redirected due to set url 
function ciuli_your_function(){

    global $post;

    $key = '_ciuli_this_page';

    if ( ! $content = get_post_meta( $post->ID, $key, TRUE ) )
    $content = '';

    $contentCheck = 1;
    if ($content == ''){
        $contentCheck = '';
        }
    else if ($content == 'yes') 
    {
        $contentCheck = 'checked';
    }
    
    if($contentCheck == 'checked'){
        //get set url and redirect
        wp_redirect( get_ciuli_url() );
        exit;
    }else{
        //do something else...
    }
}


