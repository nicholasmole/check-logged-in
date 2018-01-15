<?php

/*
Check Login Redirect Shortcode:
If you wanted to add a Shortcode version of redirect function.
This short code can take in the attribute to redirect the user
to a specified url 

*/

add_shortcode( 'checkLoginRedirect', 'checkLoginRedirect' );

include_once(ABSPATH . 'wp-includes/pluggable.php');

function checkLoginRedirect($attr){
    if ( !is_admin() && is_user_logged_in()  ) {
        $url = ($attr["url"] == NULL) ? "" : $attr["url"];
        wp_redirect( home_url().$url );
        exit();
    }
}

?>