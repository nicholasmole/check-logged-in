<?php

add_shortcode( 'headerLoginStatus', 'headerLoginStatus' );

function headerLoginStatus(){
        $user_info = get_userdata(get_current_user_id());
        $first_name = $user_info->first_name;
        $last_name = $user_info->last_name;
    ?>
    <div class="contain-header-login-status" >
   

    <div class="ciuli-date"><?php echo get_the_date(__('M jS,Y')); ?></div>
    <div class="ciuli-first-last"><span style="font-size: 14px;">User:</span> <?php echo $first_name.' '.$last_name?> </div>
    
    <div class="ciuli-logout"><a class="ab-item" href="<?php echo wp_logout_url(get_permalink());?>">LogOut</a></div>
    </div>
    <?php
}
?>
