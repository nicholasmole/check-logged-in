<?php

//CHECK IF LOGGED IN

include_once(ABSPATH . 'wp-includes/pluggable.php');

if ( ! is_admin() && !is_user_logged_in()  ) { add_action('wp_head', 'ciuli_your_function'); }

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
        wp_redirect( get_ciuli_url() );
        exit;
    }else{
        //do something else...
    }
}


?>