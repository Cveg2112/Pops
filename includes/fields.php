<?php 

function pops_admin_init() {
    
register_setting('pops_options', 'pops_options', 'pops_options_validate');
        
// Sections and Fields for Tab 1 - Main Popup    

add_settings_section('pops_main',                               // ID used to identify this section and with which to register options 
                     'Layout Settings',                         // Title to be displayed on the administration page 
                     'pops_section_text',                       // Callback used to render the description of the section 
                     'pops'                                     // Page on which to add this section of options 
                    );
    
add_settings_section('pops_targetting',                               
                     'Targetting Settings',                          
                     'pops_targetting_text',                       
                     'pops'                                      
                    );        
    
add_settings_field('pops_image',                                // ID used to identify the field throughout the theme
                   'The Image to use as a popup.',              // The label to the left of the option interface element
                   'pops_setting_image',                        // The name of the function responsible for rendering the option interface
                   'pops',                                      // The page on which this option will be displayed
                   'pops_main'                                  // The name of the section to which this field belongs
                  );
    
add_settings_field('pops_text_content',                        
                   'The textual content within the popup.',     
                   'pops_setting_content',                     
                   'pops',                                      
                   'pops_main'
                  );  

add_settings_field('pops_text_button1_text',
                   'The button text for button 1.',
                   'pops_setting_button1_text',
                   'pops',
                   'pops_main'
                  ); 
    
add_settings_field('pops_text_button1_link',
                   'The button link for button 1.',
                   'pops_setting_button1_link',
                   'pops',
                   'pops_main'
                  );
    
add_settings_field('pops_text_button2_text',
                   'The button text for button 2.',
                   'pops_setting_button2_text',
                   'pops',
                   'pops_main'
                  );
    
add_settings_field('pops_text_button2_link',
                   'The button link for button 2.',
                   'pops_setting_button2_link',
                   'pops',
                   'pops_main'
                  );    
    
add_settings_field('pops_text_publish_popup',
                   'Are you ready to publish the above popup?',
                   'pops_setting_publish_popup',
                   'pops',
                   'pops_main'
                  );      
    
add_settings_field('pops_targetting_pages',
                   'Which page/pages should this popup be present?',
                   'pops_setting_pages',
                   'pops',
                   'pops_targetting'
                  );  
    
add_settings_field('pops_targetting_cookie_length',
                   'This popup is shown by default once per day to each user. You can override that number here.',
                   'pops_setting_cookie_length',
                   'pops',
                   'pops_targetting'
                  );
    
}
    
// END Sections and Fields for Tab 1

add_action( 'admin_init', 'pops_admin_init' );

function pops_section_text() {
    $html .= '<p>This section allows customisation of the popup itself.</p>';
    echo $html;
}
    
function pops_targetting_text() {
    $html .= '<p>This section allows customisation of the popup targetting, effectively allowing you to target the whole site, specific pages, or geo-locations .</p>';
    echo $html;
}

?>