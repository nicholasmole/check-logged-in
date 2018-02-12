<?php
  function ciuli_menuonlywhenlogged_in(){
    /*-----------
    Remove a login menu Or something else unless logged in Function:
    Removes an element if not logged in using the
    ciuli-menuonlywhenlogged-in class
    -----------*/
    
?>
<script>
(function ($) {
  $(document).ready(function(){

    if($('.ciuli-menuonlywhenlogged-in')[0]){

      <?php if ( !is_user_logged_in() ) { ?>

        $('.ciuli-menuonlywhenlogged-in').remove();
        $('.ciuli-menuonlywhenlogged-in-parent-object button').remove();

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
  add_action('wp_footer', 'ciuli_menuonlywhenlogged_in');
?>