<?php
/**
 * Plugin Name: Pops
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A customised popup plugin.
 * Version: .1
 * Author: Jamie Burleigh
 */

add_action('admin_enqueue_scripts', 'my_admin_scripts');
add_action( 'wp_enqueue_scripts', 'my_frontend_scripts' );

// Include any scripts or files needed for the plugin to function
function my_admin_scripts() {
	if (isset($_GET['page']) && $_GET['page'] == 'pops') {
		wp_enqueue_media();
		wp_register_script('my-admin-js', WP_PLUGIN_URL.'/Pops/js/pops.js', array('jquery'));
		wp_enqueue_script('my-admin-js');
        wp_register_style( 'pops-styles', plugins_url('pops.css', __FILE__) );
        wp_enqueue_style( 'pops-styles' );
	} 
}

function my_frontend_scripts() {
		wp_register_script('cookie-js', WP_PLUGIN_URL.'/Pops/js/js-cookie.js', array('jquery'));
		wp_enqueue_script('cookie-js'); 
        wp_register_style( 'pops-styles', plugins_url('pops.css', __FILE__) );
        wp_enqueue_style( 'pops-styles' );    
}

include ( 'includes/fields.php');

include ( 'includes/fieldOutput.php');

include ( 'includes/sanitize.php');

function my_pops_menu() {
	add_options_page( 'Pops',                      // The text to be displayed in the title tags of the page when the menu is selected
                      'D3 Pop Up',                 // The text to be used for the menu
                      'manage_options',            // The capability required for this menu to be displayed to the user.
                      'pops',                      // The slug name to refer to this menu by (should be unique for this menu).
                      'pops_options'               // The function to be called to output the content for this page.
                    );
}

function pops_options() { 

$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'main_options';

$html .= '<div>
<h2>D3 Popup</h2>

<p>The D3 popup plugin, developed by <a href="mailto:jamie.burleigh@hilton.com">Jamie Burleigh</a>. This plugin allows you to add, control and customise multiple popups on a wordpress site, targetting specific pages and/or locations via Akamai headers.</p>
<p>The popups below are also translatable via the plugin WPML. Click <a href="/wp-admin/admin.php?page=wpml-string-translation%2Fmenu%2Fstring-translation.php">here</a> to manage the translations.</p>

<h2 class="nav-tab-wrapper">
    <a href="?page=pops&tab=main_options" class="nav-tab '.  ($active_tab == 'main_options' ? 'nav-tab-active' : '') .'">Main Popup</a>
    <a href="?page=pops&tab=secondary_options" class="nav-tab '.  ($active_tab == 'secondary_options' ? 'nav-tab-active' : '') .'">Geo Targetting Popup</a>
    <a href="?page=pops&tab=tertiary_options" class="nav-tab '.  ($active_tab == 'tertiary_options' ? 'nav-tab-active' : '') .'">IP Targetting Popup</a>
    <a href="?page=pops&tab=quaternary_options" class="nav-tab '.  ($active_tab == 'quaternary_options' ? 'nav-tab-active' : '') .'">Exit Intent Popup</a>    
</h2>

<p>Current image in use is shown below:</p>';    
        
echo $html;
    
include ('includes/popPreview.php');
            
    echo '<form class="pops-form" action="options.php" method="post">';
        if( $active_tab == 'main_options' ) {
        settings_fields('pops_options');
        do_settings_sections('pops');
        } elseif ( $active_tab == 'secondary_options' ) {
        settings_fields('pops_secondary_options');
        do_settings_sections('pops_secondary');
        } elseif ( $active_tab == 'tertiary_options' ) {
        settings_fields('pops_tertiary_options');
        do_settings_sections('pops_tertiary');
        }else{
        settings_fields('pops_quaternary_options');
        do_settings_sections('pops_quaternary');
        }
    
    echo '<input name="Submit" type="submit" value="Save Changes" /></form>';
    
}

add_action ( 'admin_menu', 'my_pops_menu' );

include ('includes/output.php');

?>
