<?php 

// validate our options

function pops_options_validate($input) {
    
    $allowed_html = array(
    'a' => array(
        'href' => array (),
        'title' => array ()),
    'abbr' => array(
        'title' => array ()),
    'acronym' => array(
        'title' => array ()),
    'b' => array(),
    'blockquote' => array(
        'cite' => array ()),
    'cite' => array (),
    'code' => array(),
    'del' => array(
        'datetime' => array ()),
    'em' => array (), 'i' => array (),
    'q' => array(
        'cite' => array ()),
    'strike' => array(),
    'strong' => array(),
    'br' => array(),
    'p' => array(),
    );
    
    $allowed_protocols = array(
        'http',
        'mailto'
    );
    
$new_input = array();
    
    if( isset( $input['pops_text_content'] ) )
        $new_input['pops_text_content'] = wp_kses( $input['pops_text_content'], $allowed_html, $allowed_protocols );
    
    if( isset( $input['pops_text_content2'] ) )
        $new_input['pops_text_content2'] = wp_kses( $input['pops_text_content2'], $allowed_html, $allowed_protocols );    

    if( isset( $input['pops_text_button1_text'] ) )
        $new_input['pops_text_button1_text'] = sanitize_text_field( $input['pops_text_button1_text'] );

    if( isset( $input['pops_text_button2_text'] ) )
        $new_input['pops_text_button2_text'] = sanitize_text_field( $input['pops_text_button2_text'] );

    if( isset( $input['pops_text_button1_link'] ) )
        $new_input['pops_text_button1_link'] = sanitize_text_field( $input['pops_text_button1_link'] );

    if( isset( $input['pops_text_button2_link'] ) )
        $new_input['pops_text_button2_link'] = sanitize_text_field( $input['pops_text_button2_link'] );    

    if( isset( $input['pops_image'] ) )
        $new_input['pops_image'] = sanitize_text_field( $input['pops_image'] );
    
    if( isset( $input['pops_image2'] ) )
        $new_input['pops_image2'] = sanitize_text_field( $input['pops_image2'] );     

    if( isset( $input['pops_text_publish_popup'] ) )
        $new_input['pops_text_publish_popup'] = sanitize_text_field( $input['pops_text_publish_popup'] ); 

    if( isset( $input['pops_targetting_pages'] ) )
        $new_input['pops_targetting_pages'] = sanitize_text_field( $input['pops_targetting_pages'] );

    if( isset( $input['pops_targetting_cookie_length'] ) )
        $new_input['pops_targetting_cookie_length'] = sanitize_text_field( $input['pops_targetting_cookie_length'] );    

    return $new_input;
}

?>