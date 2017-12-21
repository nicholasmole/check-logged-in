<?php

add_shortcode( 'headerLoginStatus', 'headerLoginStatus' );

include_once(ABSPATH . 'wp-includes/pluggable.php');

function headerLoginStatus(){
        $user_info = get_userdata(get_current_user_id());
        $first_name = $user_info->first_name;
        $last_name = $user_info->last_name;
    if ( !is_admin() && is_user_logged_in()  ) {
    ?>
    <div class="contain-header-login-status" >
   

    <div class="ciuli-date"><?php echo current_time(__('M jS,Y')); ?></div>
    <div class="ciuli-first-last"><span style="font-size: 14px;">User:</span> <?php echo $first_name.' '.$last_name?> </div>
    
    <div class="ciuli-logout"><a class="ab-item" href="<?php echo wp_logout_url(get_permalink());?>">LogOut</a></div>
    </div>
    <?php
    }
}
?>
