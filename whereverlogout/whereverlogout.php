<?php
  function ciuli_logout_anywhere(){
    /*-----------
    Logout whereever Function:
    Wrap logout to home_url function to logout
    Button with class ciuli-logout-anywhere

    -----------*/
    
?>
<script>
(function ($) {
  $(document).ready(function(){

    if($('.ciuli-logout-anywhere')[0]){
      $('.ciuli-logout-anywhere').wrap("<a href='<?php echo wp_logout_url(home_url());?>'></a>");
    }
    
  });
  $.fn.myfunction = function() {
    return this;
  };
})(jQuery);
</script>

<?php

    
  }
  add_action('wp_footer', 'ciuli_logout_anywhere');
?>






