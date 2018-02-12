<?php
  function ciuli_overwrite_vc_wp_logout(){
    /*-----------
    
    Remove a login menu Or something else unless logged in Function:
    Removes an element if not logged in using the
    ciuli-menuonlywhenlogged-in class

    -----------*/
    
?>
<script>
(function ($) {
  $(document).ready(function(){

    if($('.ciuli-overwrite-vc-wp-logout')[0]){

      <?php if ( is_user_logged_in() ) { ?>

        $('.ciuli-overwrite-vc-wp-logout').replaceWith("<li class='ciuli-menuonlywhenlogged-in menu-item menu-item-type-custom'><a href='<?php echo wp_logout_url(home_url());?>'>LOGOUT</a></li>");

      <?php } ?>
    }

  });
  $.fn.myfunction = function() {
    return this;
  };
})(jQuery);
</script>

<?php

    
  }
  add_action('wp_footer', 'ciuli_overwrite_vc_wp_logout');
?>