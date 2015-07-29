<?php 
function pops_setting_image() {
$options = get_option('pops_options');
    $image = (isset($options["pops_image"])) ? $options["pops_image"] : '';
$html .=  '<label for="upload_image">
	       <input id="upload_image" type="text" size="36" name="pops_options[pops_image]" value="'.$image.'" /> 
	       <input id="upload_image_button" class="button" type="button" value="Upload Image" />
	       <br />Enter a URL or upload an image.<br />Perfect image size is <strong>686px x 416px</strong> 
           </label>';
    echo $html;    
}

function pops_setting_content() {
$options = get_option('pops_options');
     wp_editor( $options["pops_text_content"], 'pops_text_content', $settings = array('textarea_name' => 'pops_options[pops_text_content]', 'wpautop' => false) ); 
}

function pops_setting_content_bg() {
$options = get_option('pops_options');
$colorbg = (!empty($options["pops_text_content_bg"]) ? $options["pops_text_content_bg"] : '');         
$html .=  '<input type="text" value="'.$colorbg.'" name="pops_options[pops_text_content_bg]" class="color-1"/>';
    echo $html; 
}
    
function pops_setting_button1_text() {
$options = get_option('pops_options');
$text1 = (!empty($options["pops_text_button1_text"]) ? $options["pops_text_button1_text"] : '');    
$html .=  '<input id="pops_text_button1_text" size="40" type="text" name="pops_options[pops_text_button1_text]" value="'.$text1.'" /><br/><label><em>optional - leave blank for none</em></label>';
    echo $html;
}

function pops_setting_button2_text() {
$options = get_option('pops_options');
$text2 = (!empty($options["pops_text_button2_text"]) ? $options["pops_text_button2_text"] : '');        
$html .= '<input id="pops_text_button2_text" size="40" type="text" name="pops_options[pops_text_button2_text]" value="'.$text2.'" /><br/><label><em>optional - leave blank for none</em></label>';
    echo $html;
}

function pops_setting_button1_link() {
$options = get_option('pops_options');
$link1 = (!empty($options["pops_text_button1_link"]) ? $options["pops_text_button1_link"] : 'http://');        
$html .=  '<input id="pops_text_button1_link" size="40" type="text" name="pops_options[pops_text_button1_link]" value="'.$link1.'" />';
    echo $html;
}
    
function pops_setting_button2_link() {
$options = get_option('pops_options');
$link2 = (!empty($options["pops_text_button2_link"]) ? $options["pops_text_button2_link"] : 'http://');            
$html .=  '<input id="pops_text_button2_link" size="40" type="text" name="pops_options[pops_text_button2_link]" value="'.$link2.'" />';
    echo $html;
}

function pops_setting_button1_color() {
$options = get_option('pops_options');
$color = (!empty($options["pops_text_button1_color"]) ? $options["pops_text_button1_color"] : '');            
$html .=  '<input type="text" value="'.$color.'" name="pops_options[pops_text_button1_color]" class="color-2"/>';
    echo $html;
}

function pops_setting_button2_color() {
$options = get_option('pops_options');
$color = (!empty($options["pops_text_button2_color"]) ? $options["pops_text_button2_color"] : '');            
$html .=  '<input type="text" value="'.$color.'" name="pops_options[pops_text_button2_color]" class="color-3"/>';
    echo $html;
}

function pops_setting_publish_popup() {
$options = get_option('pops_options');
$html = '<select id="pops_text_publish_popup" name="pops_options[pops_text_publish_popup]"/>
            <option '.selected( $options['pops_text_publish_popup'], 'not published', false ).'>not published</option>
            <option '.selected( $options['pops_text_publish_popup'], 'published', false ).'>published</option>
        </select>';
    echo $html;
}

function pops_setting_pages() {
$options = get_option('pops_options');
    wp_dropdown_pages(array('name' => 'pops_options[pops_targetting_pages]', 'selected' => $options[pops_targetting_pages], 'show_option_none' => 'All Pages', 'option_none_value' => 'all'));
}

function pops_setting_cookie_length() {
$options = get_option('pops_options');
$length = (!empty($options["pops_targetting_cookie_length"]) ? $options["pops_targetting_cookie_length"] : '1');
$html .=  '<input id="pops_targetting_cookie_length" size="40" type="text" name="pops_options[pops_targetting_cookie_length]" value="'.$length.'" />';
    echo $html;
}

function pops_setting_enable_location() {
$options = get_option('pops_options');
$html = '<input id="pops_targetting_enable_location" type="checkbox" name="pops_options[pops_targetting_enable_location]" value="1" ' . checked(1, $options['pops_targetting_enable_location'], false) . '/>'; 
    echo $html;
}

function pops_setting_location() {
$options = get_option('pops_options');
$html .=  '<input id="pops_targetting_location" size="40" type="text" name="pops_options[pops_targetting_location]" value="'.$options['pops_targetting_location'].'" />';
    echo $html;
}

// FUNCTIONS FOR SECONDARY TAB FIELDS

function pops_setting_image2() {
$options = get_option('pops_secondary_options');
    $image = (isset($options["pops_image"])) ? $options["pops_image"] : '';
$html .=  '<label for="upload_image">
	       <input id="upload_image" type="text" size="36" name="pops_secondary_options[pops_image]" value="'.$image.'" /> 
	       <input id="upload_image_button" class="button" type="button" value="Upload Image" />
	       <br />Enter a URL or upload an image.<br />Perfect image size is <strong>686px x 416px</strong> 
           </label>';
    echo $html;    
}

function pops_setting_content2() {
$options = get_option('pops_secondary_options');
     wp_editor( $options["pops_text_content"], 'pops_text_content', $settings = array('textarea_name' => 'pops_secondary_options[pops_text_content]', 'wpautop' => false) ); 
}

function pops_setting_content_bg2() {
$options = get_option('pops_secondary_options');
$colorbg = (!empty($options["pops_text_content_bg"]) ? $options["pops_text_content_bg"] : '');            
$html .=  '<input type="text" value="'.$colorbg.'" name="pops_secondary_options[pops_text_content_bg]" class="color-1"/>';
    echo $html; 
}
    
function pops_setting_button1_text2() {
$options = get_option('pops_secondary_options');
$text = (!empty($options["pops_text_button1_text"]) ? $options["pops_text_button1_text"] : '');    
$html .=  '<input id="pops_text_button1_text" size="40" type="text" name="pops_secondary_options[pops_text_button1_text]" value="'.$text.'" /><br/><label><em>optional - leave blank for none</em></label>';
    echo $html;
}

function pops_setting_button2_text2() {
$options = get_option('pops_secondary_options');
$text = (!empty($options["pops_text_button2_text"]) ? $options["pops_text_button2_text"] : '');        
$html .= '<input id="pops_text_button2_text" size="40" type="text" name="pops_secondary_options[pops_text_button2_text]" value="'.$text.'" /><br/><label><em>optional - leave blank for none</em></label>';
    echo $html;
}

function pops_setting_button1_link2() {
$options = get_option('pops_secondary_options');
$link = (!empty($options["pops_text_button1_link"]) ? $options["pops_text_button1_link"] : 'http://');        
$html .=  '<input id="pops_text_button1_link" size="40" type="text" name="pops_secondary_options[pops_text_button1_link]" value="'.$link.'" />';
    echo $html;
}
    
function pops_setting_button2_link2() {
$options = get_option('pops_secondary_options');
$link = (!empty($options["pops_text_button2_link"]) ? $options["pops_text_button2_link"] : 'http://');            
$html .=  '<input id="pops_text_button2_link" size="40" type="text" name="pops_secondary_options[pops_text_button2_link]" value="'.$link.'" />';
    echo $html;
}

function pops_setting_button1_color2() {
$options = get_option('pops_secondary_options');
$color = (!empty($options["pops_text_button1_color"]) ? $options["pops_text_button1_color"] : '');            
$html .=  '<input type="text" value="'.$color.'" name="pops_secondary_options[pops_text_button1_color]" class="color-2"/>';
    echo $html;
}

function pops_setting_button2_color2() {
$options = get_option('pops_secondary_options');
$color = (!empty($options["pops_text_button2_color"]) ? $options["pops_text_button2_color"] : '');            
$html .=  '<input type="text" value="'.$color.'" name="pops_secondary_options[pops_text_button2_color]" class="color-3"/>';
    echo $html;
}

function pops_setting_publish_popup2() {
$options = get_option('pops_secondary_options');
$html = '<select id="pops_text_publish_popup" name="pops_secondary_options[pops_text_publish_popup]"/>
            <option '.selected( $options['pops_text_publish_popup'], 'not published', false ).'>not published</option>
            <option '.selected( $options['pops_text_publish_popup'], 'published', false ).'>published</option>
        </select>';
    echo $html;
}

function pops_setting_pages2() {
$options = get_option('pops_secondary_options');
    wp_dropdown_pages(array('name' => 'pops_secondary_options[pops_targetting_pages]', 'selected' => $options[pops_targetting_pages], 'show_option_none' => 'All Pages', 'option_none_value' => 'all'));
}

function pops_setting_cookie_length2() {
$options = get_option('pops_secondary_options');
$length = (!empty($options["pops_targetting_cookie_length"]) ? $options["pops_targetting_cookie_length"] : '1');
$html .=  '<input id="pops_targetting_cookie_length2" size="40" type="text" name="pops_secondary_options[pops_targetting_cookie_length]" value="'.$length.'" />';
    echo $html;
}

function pops_setting_location2() {
$options = get_option('pops_secondary_options');
$html .=  '<input id="pops_targetting_location" size="40" type="text" name="pops_secondary_options[pops_targetting_location]" value="'.$options['pops_targetting_location'].'" />';
    echo $html;
}


 // FUNCTIONS FOR TERTIARY TAB FIELDS

function pops_setting_image3() {
$options = get_option('pops_tertiary_options');
    $image = (isset($options["pops_image"])) ? $options["pops_image"] : '';
$html .=  '<label for="upload_image">
	       <input id="upload_image" type="text" size="36" name="pops_tertiary_options[pops_image]" value="'.$image.'" /> 
	       <input id="upload_image_button" class="button" type="button" value="Upload Image" />
	       <br />Enter a URL or upload an image.<br />Perfect image size is <strong>686px x 416px</strong> 
           </label>';
    echo $html;    
}

function pops_setting_content3() {
$options = get_option('pops_tertiary_options');
     wp_editor( $options["pops_text_content"], 'pops_text_content', $settings = array('textarea_name' => 'pops_tertiary_options[pops_text_content]', 'wpautop' => false) ); 
}

function pops_setting_content_bg3() {
$options = get_option('pops_tertiary_options');
$colorbg = (!empty($options["pops_text_content_bg"]) ? $options["pops_text_content_bg"] : '');            
$html .=  '<input type="text" value="'.$colorbg.'" name="pops_tertiary_options[pops_text_content_bg]" class="color-1"/>';
    echo $html; 
}
    
function pops_setting_button1_text3() {
$options = get_option('pops_tertiary_options');
$text = (!empty($options["pops_text_button1_text"]) ? $options["pops_text_button1_text"] : '');    
$html .=  '<input id="pops_text_button1_text" size="40" type="text" name="pops_tertiary_options[pops_text_button1_text]" value="'.$text.'" /><br/><label><em>optional - leave blank for none</em></label>';
    echo $html;
}

function pops_setting_button2_text3() {
$options = get_option('pops_tertiary_options');
$text = (!empty($options["pops_text_button2_text"]) ? $options["pops_text_button2_text"] : '');        
$html .= '<input id="pops_text_button2_text" size="40" type="text" name="pops_tertiary_options[pops_text_button2_text]" value="'.$text.'" /><br/><label><em>optional - leave blank for none</em></label>';
    echo $html;
}

function pops_setting_button1_link3() {
$options = get_option('pops_tertiary_options');
$link = (!empty($options["pops_text_button1_link"]) ? $options["pops_text_button1_link"] : 'http://');        
$html .=  '<input id="pops_text_button1_link" size="40" type="text" name="pops_tertiary_options[pops_text_button1_link]" value="'.$link.'" />';
    echo $html;
}
    
function pops_setting_button2_link3() {
$options = get_option('pops_tertiary_options');
$link = (!empty($options["pops_text_button2_link"]) ? $options["pops_text_button2_link"] : 'http://');            
$html .=  '<input id="pops_text_button2_link" size="40" type="text" name="pops_tertiary_options[pops_text_button2_link]" value="'.$link.'" />';
    echo $html;
}

function pops_setting_button1_color3() {
$options = get_option('pops_tertiary_options');
$color = (!empty($options["pops_text_button1_color"]) ? $options["pops_text_button1_color"] : '');            
$html .=  '<input type="text" value="'.$color.'" name="pops_tertiary_options[pops_text_button1_color]" class="color-2"/>';
    echo $html;
}

function pops_setting_button2_color3() {
$options = get_option('pops_tertiary_options');
$color = (!empty($options["pops_text_button2_color"]) ? $options["pops_text_button2_color"] : '');            
$html .=  '<input type="text" value="'.$color.'" name="pops_tertiary_options[pops_text_button2_color]" class="color-3"/>';
    echo $html;
}

function pops_setting_publish_popup3() {
$options = get_option('pops_tertiary_options');
$html = '<select id="pops_text_publish_popup" name="pops_tertiary_options[pops_text_publish_popup]"/>
            <option '.selected( $options['pops_text_publish_popup'], 'not published', false ).'>not published</option>
            <option '.selected( $options['pops_text_publish_popup'], 'published', false ).'>published</option>
        </select>';
    echo $html;
}

function pops_setting_pages3() {
$options = get_option('pops_tertiary_options');
    wp_dropdown_pages(array('name' => 'pops_tertiary_options[pops_targetting_pages]', 'selected' => $options[pops_targetting_pages], 'show_option_none' => 'All Pages', 'option_none_value' => 'all'));
}

function pops_setting_cookie_length3() {
$options = get_option('pops_tertiary_options');
$length = (!empty($options["pops_targetting_cookie_length"]) ? $options["pops_targetting_cookie_length"] : '1');
$html .=  '<input id="pops_targetting_cookie_length2" size="40" type="text" name="pops_tertiary_options[pops_targetting_cookie_length]" value="'.$length.'" />';
    echo $html;
}

function pops_setting_location3() {
$options = get_option('pops_tertiary_options');
$html .=  '<input id="pops_targetting_location" size="40" type="text" name="pops_tertiary_options[pops_targetting_ip]" value="'.$options['pops_targetting_ip'].'" />';
    echo $html;
}


//FUNCTIONS FOR QUATERNARY TAB FIELDS


function pops_setting_image4() {
$options = get_option('pops_quaternary_options');
    $image = (isset($options["pops_image"])) ? $options["pops_image"] : '';
$html .=  '<label for="upload_image">
           <input id="upload_image" type="text" size="36" name="pops_quaternary_options[pops_image]" value="'.$image.'" /> 
           <input id="upload_image_button" class="button" type="button" value="Upload Image" />
           <br />Enter a URL or upload an image.<br />Perfect image size is <strong>686px x 416px</strong> 
           </label>';
    echo $html;    
}

function pops_setting_content4() {
$options = get_option('pops_quaternary_options');
     wp_editor( $options["pops_text_content"], 'pops_text_content', $settings = array('textarea_name' => 'pops_quaternary_options[pops_text_content]', 'wpautop' => false) ); 
}

function pops_setting_content_bg4() {
$options = get_option('pops_quaternary_options');
$colorbg = (!empty($options["pops_text_content_bg"]) ? $options["pops_text_content_bg"] : '');            
$html .=  '<input type="text" value="'.$colorbg.'" name="pops_quaternary_options[pops_text_content_bg]" class="color-1"/>';
    echo $html; 
}
    
function pops_setting_button1_text4() {
$options = get_option('pops_quaternary_options');
$text = (!empty($options["pops_text_button1_text"]) ? $options["pops_text_button1_text"] : '');    
$html .=  '<input id="pops_text_button1_text" size="40" type="text" name="pops_quaternary_options[pops_text_button1_text]" value="'.$text.'" /><br/><label><em>optional - leave blank for none</em></label>';
    echo $html;
}

function pops_setting_button2_text4() {
$options = get_option('pops_quaternary_options');
$text = (!empty($options["pops_text_button2_text"]) ? $options["pops_text_button2_text"] : '');        
$html .= '<input id="pops_text_button2_text" size="40" type="text" name="pops_quaternary_options[pops_text_button2_text]" value="'.$text.'" /><br/><label><em>optional - leave blank for none</em></label>';
    echo $html;
}

function pops_setting_button1_link4() {
$options = get_option('pops_quaternary_options');
$link = (!empty($options["pops_text_button1_link"]) ? $options["pops_text_button1_link"] : 'http://');        
$html .=  '<input id="pops_text_button1_link" size="40" type="text" name="pops_quaternary_options[pops_text_button1_link]" value="'.$link.'" />';
    echo $html;
}
    
function pops_setting_button2_link4() {
$options = get_option('pops_quaternary_options');
$link = (!empty($options["pops_text_button2_link"]) ? $options["pops_text_button2_link"] : 'http://');            
$html .=  '<input id="pops_text_button2_link" size="40" type="text" name="pops_quaternary_options[pops_text_button2_link]" value="'.$link.'" />';
    echo $html;
}

function pops_setting_button1_color4() {
$options = get_option('pops_quaternary_options');
$color = (!empty($options["pops_text_button1_color"]) ? $options["pops_text_button1_color"] : '');            
$html .=  '<input type="text" value="'.$color.'" name="pops_quaternary_options[pops_text_button1_color]" class="color-2"/>';
    echo $html;
}

function pops_setting_button2_color4() {
$options = get_option('pops_quaternary_options');
$color = (!empty($options["pops_text_button2_color"]) ? $options["pops_text_button2_color"] : '');            
$html .=  '<input type="text" value="'.$color.'" name="pops_quaternary_options[pops_text_button2_color]" class="color-3"/>';
    echo $html;
}

function pops_setting_publish_popup4() {
$options = get_option('pops_quaternary_options');
$html = '<select id="pops_text_publish_popup" name="pops_quaternary_options[pops_text_publish_popup]"/>
            <option '.selected( $options['pops_text_publish_popup'], 'not published', false ).'>not published</option>
            <option '.selected( $options['pops_text_publish_popup'], 'published', false ).'>published</option>
        </select>';
    echo $html;
}

function pops_setting_pages4() {
$options = get_option('pops_quaternary_options');
    wp_dropdown_pages(array('name' => 'pops_quaternary_options[pops_targetting_pages]', 'selected' => $options[pops_targetting_pages], 'show_option_none' => 'All Pages', 'option_none_value' => 'all'));
}

function pops_setting_cookie_length4() {
$options = get_option('pops_quaternary_options');
$length = (!empty($options["pops_targetting_cookie_length"]) ? $options["pops_targetting_cookie_length"] : '1');
$html .=  '<input id="pops_targetting_cookie_length2" size="40" type="text" name="pops_quaternary_options[pops_targetting_cookie_length]" value="'.$length.'" />';
    echo $html;
}
?>