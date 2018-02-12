<?php

//SAVE DATA
add_action( 'save_post', 'ciuli_this_save_metabox' );

function ciuli_this_save_metabox( $post_id )
{

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return;

    if ( ! current_user_can( 'edit_post', $post_id ) )
        return;
    
            
        $key = '_ciuli_this_page';
    
        if ( isset ( $_POST[ $key ] ) )
            return update_post_meta( $post_id, $key, 'yes');
        else {
            return update_post_meta( $post_id, $key, '');
        }
    
        delete_post_meta( $post_id, $key );
    
}

