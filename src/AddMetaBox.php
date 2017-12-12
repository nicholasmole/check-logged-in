<?php

//Add META BOX
add_action('add_meta_boxes', 'add_ciuli_meta');

function add_ciuli_meta()
{
	//Added to both Post, and Page
	$screens = array( 'post', 'page' );
	
	foreach ( $screens as $screen ) {
		add_meta_box(
					'add_ciuli_meta_id', // $id
					'Check User Logged In', // $title
					'ciuli_this_page_init', // $callback
					$screen, // $page
					'side', // $context
					'low' // $priority
					); 
	}
	
}
function ciuli_this_page_init()
{
	// -- BANNER TITLE -- //

	//calls post & establish key for db
    global $post;
    $key = '_ciuli_this_page';
        //check if logged in - check box for page
		if ( ! $content = get_post_meta( $post->ID, $key, TRUE ) )
			$content = '';
		
        if ( ! $content = get_post_meta( $post->ID, $key, TRUE ) )
        $content = '';
    
        $contentCheck = 1;
        if ($content == ''){
            $contentCheck = '';
            }
        else if ($content == 'yes') 
        {
            $contentCheck = 'checked';
        }
		
		printf(
			'<p><label for="%1$s_id">Restrict Page</label>
			<input type="checkbox" name="%1$s" id="meta-checkbox" value="%3$s" %2$s/>
			</p>',
			$key,
			$contentCheck,
			esc_attr( $content )
		);
}

?>