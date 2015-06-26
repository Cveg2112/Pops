<?php
if( $active_tab == 'main_options' ) {
$options = get_option('pops_options');
}

$publishStatus = ($options['pops_text_publish_popup'] == 'published') ? '<span style="color:green;font-weight:700">PUBLISHED</span>' : '<span style="color:red;font-weight:700">NOT PUBLISHED</span>';
$button1Text = $options['pops_text_button1_text'];
$button1Link = $options['pops_text_button1_link'];
$button2Text = $options['pops_text_button2_text'];
$button2Link = $options['pops_text_button2_link'];   


if( $active_tab == 'main_options' ) {
    
$preview .= '<p style="text-align:center;">Current Status of the below "main" popup: '.$publishStatus.'</p></div>';
    
if( empty( $options['pops_image'] ) ) {
    $preview .= '<div class="pops">
                <img src="'.WP_PLUGIN_URL.'/pops/img/no-image-selected.png">
                    <div class="content">
                        <div class="info-box">'.$options['pops_text_content'].'
                            <div class="button-box">';
                                if (!empty($button1Text)) { $preview .= '<a href="'.$button1Link.'">'.$button1Text.'</a>'; }
                                if (!empty($button2Text)) { $preview .= '<a href="'.$button1Link.'">'.$button2Text.'</a>'; }
    $preview .=                '</div>
                        </div>
                    </div>
                </div>';
} else {
    $preview .= '<div class="pops">
                <img src="'.$options['pops_image'].'">
                    <div class="content">
                        <div class="info-box">'.$options['pops_text_content'].'
                            <div class="button-box">';
                                if (!empty($button1Text)) { $preview .= '<a href="'.$button1Link.'">'.$button1Text.'</a>'; }
                                if (!empty($button2Text)) { $preview .= '<a href="'.$button1Link.'">'.$button2Text.'</a>'; }
    $preview .=                '</div>
                        </div>
                    </div>
                </div>';
    }
    
}

    echo $preview;

?>