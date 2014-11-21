<?php
/**
 * Plugin Name: Pops
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A customised popup plugin.
 * Version: .1
 * Author: Jamie Burleigh
 */

add_action('admin_enqueue_scripts', 'my_admin_scripts');


function my_admin_scripts() {
	if (isset($_GET['page']) && $_GET['page'] == 'pops') {
		wp_enqueue_media();
		wp_register_script('my-admin-js', WP_PLUGIN_URL.'/pops/pops.js', array('jquery'));
		wp_enqueue_script('my-admin-js');
	}
}

function pops_admin_init() {
register_setting( 'pops_options', 'pops_options', 'pops_options_validate');
register_setting( 'pops_options2', 'pops_options2', 't5_sae_validate_option');
register_setting( 'pops_image', 'pops_image', '');

add_settings_section('pops_main', 'Main Settings', 'pops_section_text', 'pops');
add_settings_field('pops_image', 'The Image to use as a popup.', 'pops_setting_image', 'pops', 'pops_main');
add_settings_field('pops_text_string2', 'The max-width of the image.', 'pops_setting_string2', 'pops', 'pops_main'); 
add_settings_field('pops_text_string', 'add tracking to the image.', 'pops_setting_string', 'pops', 'pops_main');
add_settings_field('pops_text_string3', 'The link for the popup.', 'pops_setting_string3', 'pops', 'pops_main');
add_settings_field('pops_text_string4', 'The title for the popup.', 'pops_setting_string4', 'pops', 'pops_main');
} 
add_action( 'admin_init', 'pops_admin_init' );

function pops_section_text() {
echo '<p>Main description of this section here.</p>';
}

function pops_setting_string4() {
$options = get_option('pops_options');
echo "<input id='pops_text_string4' name='pops_options[text_string4]' size='40' type='text' value='{$options['text_string4']}' />";
}

function pops_setting_string3() {
$options = get_option('pops_options');
echo "<input id='pops_text_string3' name='pops_options[text_string3]' size='40' type='text' value='{$options['text_string3']}' />";
}

function pops_setting_string() {
$options = get_option('pops_options');
echo "<input id='pops_text_string' name='pops_options[text_string]' size='40' type='text' value='{$options['text_string']}' />";
}

function pops_setting_string2() {
$options = get_option('pops_options');
echo "<input id='pops_text_string2' name='pops_options[text_string2]' size='40' type='text' value='{$options['text_string2']}' />";
}

function pops_setting_image() {
$options = get_option('pops_options');
echo "<label for=\"upload_image\">
	<input id=\"upload_image\" type=\"text\" size=\"36\" name=\"pops_options[image]\" value=\"{$options['image']}\" /> 
	<input id=\"upload_image_button\" class=\"button\" type=\"button\" value=\"Upload Image\" />
	<br />Enter a URL or upload an image
</label>";
}

// validate our options
function pops_options_validate($input) {
$new_input = array();
        if( isset( $input['text_string'] ) )
            $new_input['text_string'] = sanitize_text_field( $input['text_string'] );

        if( isset( $input['text_string2'] ) )
            $new_input['text_string2'] = sanitize_text_field( $input['text_string2'] );
    
        if( isset( $input['text_string3'] ) )
            $new_input['text_string3'] = sanitize_text_field( $input['text_string3'] );
    
        if( isset( $input['text_string4'] ) )
            $new_input['text_string4'] = sanitize_text_field( $input['text_string4'] );
    
        if( isset( $input['image'] ) )
            $new_input['image'] = sanitize_text_field( $input['image'] );    

        return $new_input;
}

function my_pops_menu() {
	add_options_page( 'Pops', 'Pops', 'manage_options', 'pops', 'pops_options' );
}

function pops_options() {

?>
<div>
<h2>Pops</h2>
A couple of options to customise the pops pop-up.
<form action="options.php" method="post">
<?php settings_fields('pops_options'); ?>
<?php do_settings_sections('pops'); ?>
 
<input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
</form></div>
 
 
<?php
}?>

<?php


add_action( 'admin_menu', 'my_pops_menu' );

function get_pops() {

	global $post;

	$options = get_option('pops_options');
	$image =  $options['image'];
    $link =  $options['text_string3'];
    $title =  $options['text_string4'];
    $maxWidth =  $options['text_string2'];    
    $tracking = $options['text_string'];   

	$popup = '<div id="merch" class="mfp-hide" style="width:75%;max-width:'.$maxWidth.'px;height:auto;margin:0 auto;">
<a onclick="'.$tracking.'" href="'.$link.'" target="_blank" title="'.$title.'"><img src="'.$image.'" alt="" style="width:100%;height:auto;"/></a></div>
<script type="text/javascript">
function merch () { 
//Initialise the cookie variable
var merchvisited = $.cookie(\'visited\');
if (merchvisited == \'yes\') {
//If user has the cookie, do nothing
    return false;
} else {
//If the user hasnt the cookie, serve the pop-up
    $.magnificPopup.open({
    items: {
    src: \'#merch\'
    },
    type: \'inline\',
    closeBtnInside : \'true\'
    }, 0);
}
//Set the cookie
$.cookie(\'visited\', \'yes\', { expires: 1 });                            
}   
// Call the function
merch ();
</script>';

return $popup;	

}

?>
