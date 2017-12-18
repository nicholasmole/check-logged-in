<?php

add_action( 'admin_menu', 'ciuli_menu' );

//Add the side menu options for fields
function ciuli_menu() {
	//add_options_page( 'Add User Fields', 'Add User Fields', 'manage_options', 'add_user_fields_unique_slug', 'my_plugin_options' );
	add_options_page( 'CIULI Restrict URL', 'CIULI Restrict URL', 'manage_options', 'ciuli_unique_slug', 'my_ciuli_plugin_options' );
}

//Create the page

function my_ciuli_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    //Collect this for post actions - located in UpdateList
    if(isset($_POST)){
        
        if($_POST['_wp_this_is_url']){
            change_url_value($_POST['_wp_this_is_url']);
        }
        
    }
    
    ?>

    <div class="updated" style="border-color:#fff;">
        <h1>Edit Restricted Redirect</h1>
        <p>Here is where you input and save single redirect.</p>
            <div class="updated" style="border-color:#fff; background: rgba(105,105,105,0.1) ;font-size: 24px;veritcal-align:middle;">
            
                
                <!--<form action="<?php //content_url() echo plugin_dir_path(__FILE__) . 'src/UpdateList.php'; ?>"  method="POST">-->
                
                <div>
                    <form method="post" action="?page=ciuli_unique_slug">
                        <input type="text" name="_wp_this_is_url" value="<?php if( get_ciuli_url() == home_url()):echo '';else: echo get_ciuli_url(); endif; ?> ">
                        <input type="hidden" name="action" value="_wp_this_is_url_Value">
                        <button href="?page=ciuli_unique_slug" type="submit" class="button button-primary button-large" value="DeleteUpdate">SAVE IT</button>
                    </form>
                </div>
                <br/>
               
            </div>
	</div>
                

    <?php

}

function change_url_value($new_value){
    if($new_value != ''){
        update_option( 'wpse_check_if_user_logged_in', $new_value);
    }
}

?>