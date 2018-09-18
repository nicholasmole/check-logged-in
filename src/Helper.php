<?php
/*
Helper
-----
Functions that are called throughout the
Check Logged In Plugin
*/
//get the url - redirect needs home_url
function get_ciuli_url(){
    if (get_option( 'wpse_check_if_user_logged_in' ) == ''):
        return home_url();
    else:   
        return home_url().get_option( 'wpse_check_if_user_logged_in' ); 
    endif;
}
//Get the check_if_value - options should return none home_url
function get_ciuli_value(){
    if (get_option( 'wpse_check_if_user_logged_in' ) == ''):
        return home_url();
    else:   
        return get_option( 'wpse_check_if_user_logged_in' ); 
    endif;
}
//set the url
function change_url_value($new_value){
    if($new_value != ''){
        update_option( 'wpse_check_if_user_logged_in', $new_value);
    }
}
