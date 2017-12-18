<?php

function get_content($key){
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
    return $content; 
}
function get_content_check($key){
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
    return $contentCheck; 
}
function get_ciuli_url(){
    if (get_option( 'wpse_check_if_user_logged_in' ) == ''):
        return home_url();
    else:   
        return home_url().get_option( 'wpse_check_if_user_logged_in' ); 
    endif;
}
?>