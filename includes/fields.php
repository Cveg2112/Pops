<?php 

function pops_admin_init() {
    
register_setting('pops_options', 'pops_options', 'pops_options_validate');
    
register_setting('pops_secondary_options', 'pops_secondary_options', 'pops_options_validate');
    
register_setting('pops_tertiary_options', 'pops_tertiary_options', 'pops_options_validate');    

register_setting('pops_quaternary_options', 'pops_quaternary_options', 'pops_options_validate');    
    
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

add_settings_field('pops_text_content_bg',                        
                   'The background color of the text box.',     
                   'pops_setting_content_bg',                     
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

add_settings_field('pops_text_button1_color',
                   'The button color for button 1.',
                   'pops_setting_button1_color',
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

add_settings_field('pops_text_button2_color',
                   'The button color for button 2.',
                   'pops_setting_button2_color',
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
    
// END Sections and Fields for Tab 1
    
// Sections and Fields for Tab 2 - Main Popup        
    
add_settings_section('pops_secondary',                                  // ID used to identify this section and with which to register options                                
                     'Layout Settings',                         // Title to be displayed on the administration page                           
                     'pops_section_text',                             // Callback used to render the description of the section                        
                     'pops_secondary'                                   // Page on which to add this section of options                                       
                    );      
    
add_settings_section('pops_secondary_targetting',                               
                     'Targetting Settings',                          
                     'pops_targetting_text',                       
                     'pops_secondary'                                      
                    );       
    
add_settings_field('pops_image',                                       // ID used to identify the field throughout the theme
                   'The Image to use as a popup.',                      // The label to the left of the option interface element
                   'pops_setting_image2',                               // The name of the function responsible for rendering the option interface
                   'pops_secondary',                                    // The page on which this option will be displayed
                   'pops_secondary'                                     // The name of the section to which this field belongs
                  );    
    
add_settings_field('pops_text_content',                        
                   'The textual content within the popup.',     
                   'pops_setting_content2',                     
                   'pops_secondary',                                      
                   'pops_secondary'
                  );

add_settings_field('pops_text_content_bg',                        
                   'The background color of the text box.',     
                   'pops_setting_content_bg2',                     
                   'pops_secondary',                                      
                   'pops_secondary'
                  );      
    
add_settings_field('pops_text_button1_text',
                   'The button text for button 1.',
                   'pops_setting_button1_text2',
                   'pops_secondary',
                   'pops_secondary'
                  ); 
    
add_settings_field('pops_text_button1_link',
                   'The button link for button 1.',
                   'pops_setting_button1_link2',
                   'pops_secondary',
                   'pops_secondary'
                  );

add_settings_field('pops_text_button1_color',
                   'The button color for button 1.',
                   'pops_setting_button1_color2',
                   'pops_secondary',
                   'pops_secondary'
                  );
    
add_settings_field('pops_text_button2_text',
                   'The button text for button 2.',
                   'pops_setting_button2_text2',
                   'pops_secondary',
                   'pops_secondary'
                  );
    
add_settings_field('pops_text_button2_link',
                   'The button link for button 2.',
                   'pops_setting_button2_link2',
                   'pops_secondary',
                   'pops_secondary'
                  );  

add_settings_field('pops_text_button2_color',
                   'The button color for button 2.',
                   'pops_setting_button2_color2',
                   'pops_secondary',
                   'pops_secondary'
                  );  
    
add_settings_field('pops_text_publish_popup',
                   'Are you ready to publish the above popup?',
                   'pops_setting_publish_popup2',
                   'pops_secondary',
                   'pops_secondary'
                  );      
    
add_settings_field('pops_targetting_pages',
                   'Which page/pages should this popup be present?',
                   'pops_setting_pages2',
                   'pops_secondary',
                   'pops_secondary_targetting'
                  );  
    
add_settings_field('pops_targetting_cookie_length',
                   'This popup is shown by default once per day to each user. You can override that number here.',
                   'pops_setting_cookie_length2',
                   'pops_secondary',
                   'pops_secondary_targetting'
                  );         
    
add_settings_field('pops_targetting_location',
                   'Enter location ISO Country Code. See full list of codes <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements">here</a> (PT for Puerto Rico)',
                   'pops_setting_location2',
                   'pops_secondary',
                   'pops_secondary_targetting'
                  );     
    
// Sections and Fields for Tab 3 - IP Popup    
    
    
add_settings_section('pops_tertiary',                                  // ID used to identify this section and with which to register options                                
                     'Layout Settings',                                 // Title to be displayed on the administration page                           
                     'pops_section_text',                             // Callback used to render the description of the section                        
                     'pops_tertiary'                                   // Page on which to add this section of options                                       
                    );      
    
add_settings_section('pops_tertiary_targetting',                               
                     'Targetting Settings',                          
                     'pops_targetting_text',                       
                     'pops_tertiary'                                      
                    );       
    
add_settings_field('pops_image',                                       // ID used to identify the field throughout the theme
                   'The Image to use as a popup.',                      // The label to the left of the option interface element
                   'pops_setting_image3',                               // The name of the function responsible for rendering the option interface
                   'pops_tertiary',                                    // The page on which this option will be displayed
                   'pops_tertiary'                                     // The name of the section to which this field belongs
                  );    
    
add_settings_field('pops_text_content',                   
                   'The textual content within the popup.',     
                   'pops_setting_content3',                     
                   'pops_tertiary',                                      
                   'pops_tertiary'
                  ); 

add_settings_field('pops_text_content_bg',                        
                   'The background color of the text box.',     
                   'pops_setting_content_bg3',                     
                   'pops_tertiary',                                      
                   'pops_tertiary'
                  );     
    
add_settings_field('pops_text_button1_text',
                   'The button text for button 1.',
                   'pops_setting_button1_text3',
                   'pops_tertiary',
                   'pops_tertiary'
                  ); 
    
add_settings_field('pops_text_button1_link',
                   'The button link for button 1.',
                   'pops_setting_button1_link3',
                   'pops_tertiary',
                   'pops_tertiary'
                  );

add_settings_field('pops_text_button1_color',
                   'The button color for button 1.',
                   'pops_setting_button1_color3',
                   'pops_tertiary',
                   'pops_tertiary'
                  );
    
add_settings_field('pops_text_button2_text',
                   'The button text for button 2.',
                   'pops_setting_button2_text3',
                   'pops_tertiary',
                   'pops_tertiary'
                  );
    
add_settings_field('pops_text_button2_link',
                   'The button link for button 2.',
                   'pops_setting_button2_link3',
                   'pops_tertiary',
                   'pops_tertiary'
                  );    

add_settings_field('pops_text_button2_color',
                   'The button color for button 2.',
                   'pops_setting_button2_color3',
                   'pops_tertiary',
                   'pops_tertiary'
                  );
    
add_settings_field('pops_text_publish_popup',
                   'Are you ready to publish the above popup?',
                   'pops_setting_publish_popup3',
                   'pops_tertiary',
                   'pops_tertiary'
                  );      
    
add_settings_field('pops_targetting_pages',
                   'Which page/pages should this popup be present?',
                   'pops_setting_pages3',
                   'pops_tertiary',
                   'pops_tertiary_targetting'
                  );  
    
add_settings_field('pops_targetting_cookie_length',
                   'This popup is shown by default once per day to each user. You can override that number here.',
                   'pops_setting_cookie_length3',
                   'pops_tertiary',
                   'pops_tertiary_targetting'
                  );         
    
add_settings_field('pops_targetting_ip',
                   'Enter IP address to target this popup.',
                   'pops_setting_location3',
                   'pops_tertiary',
                   'pops_tertiary_targetting'
                  );     

    
// Sections and Fields for Tab 4 - Exit Intent Popup    
    
    
add_settings_section('pops_quaternary',                                  // ID used to identify this section and with which to register options                                
                     'Layout Settings',                                 // Title to be displayed on the administration page                           
                     'pops_section_text',                             // Callback used to render the description of the section                        
                     'pops_quaternary'                                   // Page on which to add this section of options                                       
                    );      
    
add_settings_section('pops_quaternary_targetting',                               
                     'Targetting Settings',                          
                     'pops_targetting_text',                       
                     'pops_quaternary'                                      
                    );       
    
add_settings_field('pops_image',                                       // ID used to identify the field throughout the theme
                   'The Image to use as a popup.',                      // The label to the left of the option interface element
                   'pops_setting_image4',                               // The name of the function responsible for rendering the option interface
                   'pops_quaternary',                                    // The page on which this option will be displayed
                   'pops_quaternary'                                     // The name of the section to which this field belongs
                  );    
    
add_settings_field('pops_text_content',                     
                   'The textual content within the popup.',     
                   'pops_setting_content4',                     
                   'pops_quaternary',                                      
                   'pops_quaternary'
                  );     

add_settings_field('pops_text_content_bg',                        
                   'The background color of the text box.',     
                   'pops_setting_content_bg4',                     
                   'pops_quaternary',                                      
                   'pops_quaternary'
                  );  

add_settings_field('pops_text_button1_text',
                   'The button text for button 1.',
                   'pops_setting_button1_text4',
                   'pops_quaternary',
                   'pops_quaternary'
                  ); 
    
add_settings_field('pops_text_button1_link',
                   'The button link for button 1.',
                   'pops_setting_button1_link4',
                   'pops_quaternary',
                   'pops_quaternary'
                  );

add_settings_field('pops_text_button1_color',
                   'The button color for button 1.',
                   'pops_setting_button1_color4',
                   'pops_quaternary',
                   'pops_quaternary'
                  );
    
add_settings_field('pops_text_button2_text',
                   'The button text for button 2.',
                   'pops_setting_button2_text4',
                   'pops_quaternary',
                   'pops_quaternary'
                  );
    
add_settings_field('pops_text_button2_link',
                   'The button link for button 2.',
                   'pops_setting_button2_link4',
                   'pops_quaternary',
                   'pops_quaternary'
                  ); 

add_settings_field('pops_text_button2_color',
                   'The button color for button 2.',
                   'pops_setting_button2_color4',
                   'pops_quaternary',
                   'pops_quaternary'
                  );   
    
add_settings_field('pops_text_publish_popup',
                   'Are you ready to publish the above popup?',
                   'pops_setting_publish_popup4',
                   'pops_quaternary',
                   'pops_quaternary'
                  );      
    
add_settings_field('pops_targetting_pages',
                   'Which page/pages should this popup be present?',
                   'pops_setting_pages4',
                   'pops_quaternary',
                   'pops_quaternary_targetting'
                  );  
    
add_settings_field('pops_targetting_cookie_length',
                   'This popup is shown by default once per day to each user. You can override that number here.',
                   'pops_setting_cookie_length4',
                   'pops_quaternary',
                   'pops_quaternary_targetting'
                  );          
}

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