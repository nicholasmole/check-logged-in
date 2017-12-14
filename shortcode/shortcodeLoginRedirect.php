<?php
add_shortcode( 'checkLoginRedirect', 'checkLoginRedirect' );

function checkLoginRedirect($attr){
    $url = ($attr["url"] == NULL) ? "" : $attr["url"];
    wp_redirect( home_url().$url );
    exit();
}

?>