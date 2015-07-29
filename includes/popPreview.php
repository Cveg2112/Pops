<?php
if( $active_tab == 'main_options' ) {
$options = get_option('pops_options');
} elseif ( $active_tab == 'secondary_options' ) {
$options = get_option('pops_secondary_options');
} elseif ( $active_tab == 'tertiary_options' ) {
$options = get_option('pops_tertiary_options');
} else {
$options = get_option('pops_quaternary_options');
}

$publishStatus = ($options['pops_text_publish_popup'] == 'published') ? '<span style="color:green;font-weight:700">PUBLISHED</span>' : '<span style="color:red;font-weight:700">NOT PUBLISHED</span>';
$button1Text = $options['pops_text_button1_text'];
$button1Link = $options['pops_text_button1_link'];
$button2Text = $options['pops_text_button2_text'];
$button2Link = $options['pops_text_button2_link'];
$button1Color = $options['pops_text_button1_color'];
$button2Color = $options['pops_text_button2_color'];
    $bghex = $options['pops_text_content_bg'];
    $bgrgba = hex2rgba($bghex, 0.6);

if( $active_tab == 'main_options' ) {
    
$preview .= '<p style="text-align:center;">Current Status of the below "main" popup: '.$publishStatus.'</p></div>';
    
if( empty( $options['pops_image'] ) ) {
    $preview .= '<div class="pops">
                <img src="'.WP_PLUGIN_URL.'/Pops/img/no-image-selected.png">
                    <div class="content">
                        <div style="background-color:'.$bgrgba.';" class="info-box">'.$options['pops_text_content'].'
                            <div class="button-box">';
                                if (!empty($button1Text)) { $preview .= '<a style="background-color:'.$button1Color.';" href="'.$button1Link.'">'.$button1Text.'</a>'; }
                                if (!empty($button2Text)) { $preview .= '<a style="background-color:'.$button2Color.';" href="'.$button1Link.'">'.$button2Text.'</a>'; }
    $preview .=                '</div>
                        </div>
                    </div>
                </div>';
} else {
    $preview .= '<div class="pops">
                <img src="'.$options['pops_image'].'">
                    <div class="content">
                        <div style="background-color:'.$bgrgba.';" class="info-box">'.$options['pops_text_content'].'
                            <div class="button-box">';
                                if (!empty($button1Text)) { $preview .= '<a style="background-color:'.$button1Color.';" href="'.$button1Link.'">'.$button1Text.'</a>'; }
                                if (!empty($button2Text)) { $preview .= '<a style="background-color:'.$button2Color.';" href="'.$button1Link.'">'.$button2Text.'</a>'; }
    $preview .=                '</div>
                        </div>
                    </div>
                </div>';
    }
    
} else if ( $active_tab == 'secondary_options' ) {

    $preview .= '<p style="text-align:center;">Current Status of the below "geo targetting" popup: '.$publishStatus.'</p></div>';
    
if( empty( $options['pops_image'] ) ) {
    $preview .= '<div class="pops">
                <img src="'.WP_PLUGIN_URL.'/Pops/img/no-image-selected.png">
                    <div class="content">
                        <div style="background-color:'.$bgrgba.';" class="info-box">'.$options['pops_text_content'].'
                            <div class="button-box">';
                                if (!empty($button1Text)) { $preview .= '<a style="background-color:'.$button1Color.';" href="'.$button1Link.'">'.$button1Text.'</a>'; }
                                if (!empty($button2Text)) { $preview .= '<a style="background-color:'.$button2Color.';" href="'.$button1Link.'">'.$button2Text.'</a>'; }
    $preview .=                '</div>
                        </div>
                    </div>
                </div>';
} else {
    $preview .= '<div class="pops">
                <img src="'.$options['pops_image'].'">
                    <div class="content">
                        <div style="background-color:'.$bgrgba.';" class="info-box">'.$options['pops_text_content'].'
                            <div class="button-box">';
                                if (!empty($button1Text)) { $preview .= '<a style="background-color:'.$button1Color.';" href="'.$button1Link.'">'.$button1Text.'</a>'; }
                                if (!empty($button2Text)) { $preview .= '<a style="background-color:'.$button2Color.';" href="'.$button1Link.'">'.$button2Text.'</a>'; }
    $preview .=                '</div>
                        </div>
                    </div>
                </div>';
    }
    
} else if ( $active_tab == 'tertiary_options' ) {

    $preview .= '<p style="text-align:center;">Current Status of the below "IP targetting" popup: '.$publishStatus.'</p></div>';
    
    if( empty( $options['pops_image'] ) ) {
        $preview .= '<div class="pops">
                    <img src="'.WP_PLUGIN_URL.'/Pops/img/no-image-selected.png">
                        <div class="content">
                            <div style="background-color:'.$bgrgba.';" class="info-box">'.$options['pops_text_content'].'
                                <div class="button-box">';
                                    if (!empty($button1Text)) { $preview .= '<a style="background-color:'.$button1Color.';" href="'.$button1Link.'">'.$button1Text.'</a>'; }
                                    if (!empty($button2Text)) { $preview .= '<a style="background-color:'.$button2Color.';" href="'.$button1Link.'">'.$button2Text.'</a>'; }
        $preview .=                '</div>
                            </div>
                        </div>
                    </div>';
    } else {
        $preview .= '<div class="pops">
                    <img src="'.$options['pops_image'].'">
                        <div class="content">
                            <div style="background-color:'.$bgrgba.';" class="info-box">'.$options['pops_text_content'].'
                                <div class="button-box">';
                                    if (!empty($button1Text)) { $preview .= '<a style="background-color:'.$button1Color.';" href="'.$button1Link.'">'.$button1Text.'</a>'; }
                                    if (!empty($button2Text)) { $preview .= '<a style="background-color:'.$button2Color.';" href="'.$button1Link.'">'.$button2Text.'</a>'; }
        $preview .=                '</div>
                            </div>
                        </div>
                    </div>';
        }

//quaternary
} else {

    $preview .= '<p style="text-align:center;">Current Status of the below "Exit Intent" popup: '.$publishStatus.'</p></div>';
    
if( empty( $options['pops_image'] ) ) {
    $preview .= '<div class="pops">
                <img src="'.WP_PLUGIN_URL.'/Pops/img/no-image-selected.png">
                    <div class="content">
                        <div style="background-color:'.$bgrgba.';" class="info-box">'.$options['pops_text_content'].'
                            <div class="button-box">';
                                if (!empty($button1Text)) { $preview .= '<a style="background-color:'.$button1Color.';" href="'.$button1Link.'">'.$button1Text.'</a>'; }
                                if (!empty($button2Text)) { $preview .= '<a style="background-color:'.$button2Color.';" href="'.$button1Link.'">'.$button2Text.'</a>'; }
    $preview .=                '</div>
                        </div>
                    </div>
                </div>';
} else {
    $preview .= '<div class="pops">
                <img src="'.$options['pops_image'].'">
                    <div class="content">
                        <div style="background-color:'.$bgrgba.';" class="info-box">'.$options['pops_text_content'].'
                            <div class="button-box">';
                                if (!empty($button1Text)) { $preview .= '<a style="background-color:'.$button1Color.';" href="'.$button1Link.'">'.$button1Text.'</a>'; }
                                if (!empty($button2Text)) { $preview .= '<a style="background-color:'.$button2Color.';" href="'.$button1Link.'">'.$button2Text.'</a>'; }
    $preview .=                '</div>
                        </div>
                    </div>
                </div>';
    }
}

    echo $preview;

?>