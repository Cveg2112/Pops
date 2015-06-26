<?php 
function get_pops() {

	global $post;

	$options = get_option('pops_options');
    $publish = $options['pops_text_publish_popup'];
    $pageTarget = $options['pops_targetting_pages'];   
  
    if (($publish == 'published') && ((is_page(icl_object_id($pageTarget, 'page'))) || ($pageTarget == 'all') )) {
        $options = get_option('pops_options');
        $image =  $options['pops_image'];
        $content =  $options['pops_text_content']; 
        $button1Text = $options['pops_text_button1_text'];
        $button1Link = $options['pops_text_button1_link'];
        $button2Text = $options['pops_text_button2_text'];
        $button2Link = $options['pops_text_button2_link'];    
        $length = $options['pops_targetting_cookie_length'];
        $popup .= ' <div class="black-drop"></div>
                    <div class="pops">
                    <button title="Close (Esc)" type="button" class="pops-close">×</button>
                    <img src="'.$image.'">
                        <div class="content">
                            <div class="info-box">'.__($content, 'popup').'
                                <div class="button-box">';
                                    if (!empty($button1Text)) { $popup .= '<a href="'.__($button1Link, 'popup').'" onclick="ga(\'send\', \'event\', \'Main Popup\', \''.$button1Text.'\', \''.$button1Link.'\')" target="_blank">'.__($button1Text, 'popup').'</a>'; }
                                    if (!empty($button2Text)) { $popup .= '<a href="'.__($button2Link, 'popup').'" onclick="ga(\'send\', \'event\', \'Main Popup\', \''.$button2Text.'\', \''.$button2Link.'\')" target="_blank">'.__($button2Text, 'popup').'</a>'; }
        $popup .=                '</div>
                            </div>
                        </div>
                    </div>';
        
    
	$popup .= '<script type="text/javascript">
                    if ("'.$publish.'" == "published") {
                        var popvisited = Cookies.get("visited");
                             if (popvisited !== "yes") {
                                if (Modernizr.mq("only screen and (min-width: 800px)")) {
                                    $(".black-drop").fadeIn();
                                    $(".pops").fadeIn();
                                }
                                $(".black-drop, .pops-close").click(function(e) {
                                    $(".black-drop, .pops").hide();
                                    e.preventDefault();
                                });
                                 } else {
                                    console.log(\'cookie found, no popup for you.\')
                                 }
                            Cookies.set("visited", "yes", { expires:'.$length.' });
                        }
                        
                </script>';        
    };

echo $popup;	

}
?>