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

?>