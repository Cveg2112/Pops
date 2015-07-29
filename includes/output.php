<?php 
function get_pops() {

	global $post;

	$options = get_option('pops_options');
    $targettingOptions = get_option('pops_secondary_options');
    $ipOptions = get_option('pops_tertiary_options');
    $exitOptions = get_option('pops_quaternary_options');        
    $publish = $options['pops_text_publish_popup'];
    $targettingPublish = $targettingOptions['pops_text_publish_popup'];
    $ipPublish = $ipOptions['pops_text_publish_popup']; 
    $exitPublish = $exitOptions['pops_text_publish_popup'];   
    $pageTarget = $options['pops_targetting_pages'];
    $targettingPageTarget = $targettingOptions['pops_targetting_pages'];
    $ipPageTarget = $ipOptions['pops_targetting_pages'];     
    $targettingLocation = $targettingOptions['pops_targetting_location'];
    $targettingIp = $ipOptions['pops_targetting_ip'];  
      
 
    $headers = apache_request_headers();
    $rawAkamaiHeaders = explode(",",$headers['X-Akamai-Edgescape']);
    foreach($rawAkamaiHeaders as $headerLine){
        $keypair = explode("=",$headerLine);
        $headerArray[$keypair[0]] = $keypair[1];
    };
    
    $currentRegion = $headerArray['region_code'];
    $currentIP = $headers['True-Client-IP'];

  
    if (($targettingPublish == 'published') && ((is_page(icl_object_id($targettingPageTarget, 'page'))) || ($targettingPageTarget == 'all') ) && ($targettingLocation == $currentRegion)) {
        $options = get_option('pops_secondary_options');
        $image =  $options['pops_image'];
        $content =  $options['pops_text_content']; 
        $button1Text = $options['pops_text_button1_text'];
        $button1Link = $options['pops_text_button1_link'];
        $button2Text = $options['pops_text_button2_text'];
        $button2Link = $options['pops_text_button2_link'];    
        $length = $options['pops_targetting_cookie_length'];
        $button1Color = $options['pops_text_button1_color'];
        $button2Color = $options['pops_text_button2_color'];
        $bghex = $options['pops_text_content_bg'];
        $bgrgba = hex2rgba($bghex, 0.6); 

        $popup .= ' <div class="black-drop"></div>
                    <div class="pops">
                    <button title="Close (Esc)" type="button" class="pops-close">×</button>
                    <img src="'.$image.'">
                        <div class="content">
                            <div style="background-color:'.$bgrgba.';" class="info-box">'.__($content, 'popup').'
                                <div class="button-box">';
                                    if (!empty($button1Text)) { $popup .= '<a style="background-color:'.$button1Color.';" href="'.__($button1Link, 'popup').'" onclick="ga(\'send\', \'event\', \'Geo Target Popup\', \''.$button1Text.'\', \''.$button1Link.'\')" target="_blank">'.__($button1Text, 'popup').'</a>'; }
                                    if (!empty($button2Text)) { $popup .= '<a style="background-color:'.$button2Color.';" href="'.__($button2Link, 'popup').'" onclick="ga(\'send\', \'event\', \'Geo Target Popup\', \''.$button2Text.'\', \''.$button2Link.'\')" target="_blank">'.__($button2Text, 'popup').'</a>'; }
        $popup .=                '</div>
                            </div>
                        </div>
                    </div>';
        
    
	   $popup .= '<script type="text/javascript">
                    if ("'.$targettingPublish.'" == "published") {
                        var popvisited = Cookies.get("visited");
                            // if (popvisited !== "") {
                                if (Modernizr.mq("only screen and (min-width: 800px)")) {
                                    $(".black-drop").fadeIn();
                                    $(".pops").fadeIn();
                                }
                                $(".black-drop, .pops-close").click(function(e) {
                                    $(".black-drop, .pops").hide();
                                    e.preventDefault();
                                });
                                // }
                            Cookies.set("visited", "yes", { expires:'.$length.' });
                        }
                        
                </script>';
        
    } elseif (($ipPublish == 'published') && ((is_page(icl_object_id($ipPageTarget, 'page'))) || ($ipPageTarget == 'all') ) && ($targettingIp == $currentIP)) {
        $options = get_option('pops_tertiary_options');
        $image =  $options['pops_image'];
        $content =  $options['pops_text_content']; 
        $button1Text = $options['pops_text_button1_text'];
        $button1Link = $options['pops_text_button1_link'];
        $button2Text = $options['pops_text_button2_text'];
        $button2Link = $options['pops_text_button2_link'];    
        $length = $options['pops_targetting_cookie_length'];
        $button1Color = $options['pops_text_button1_color'];
        $button2Color = $options['pops_text_button2_color']; 
        $bghex = $options['pops_text_content_bg'];
        $bgrgba = hex2rgba($bghex, 0.6);

        $popup .= ' <div class="black-drop"></div>
                    <div class="pops">
                    <button title="Close (Esc)" type="button" class="pops-close">×</button>
                    <img src="'.$image.'">
                        <div class="content">
                            <div style="background-color:'.$bgrgba.';" class="info-box">'.__($content, 'popup').'
                                <div class="button-box">';
                                    if (!empty($button1Text)) { $popup .= '<a style="background-color:'.$button1Color.';" href="'.__($button1Link, 'popup').'" onclick="ga(\'send\', \'event\', \'IP Popup\', \''.$button1Text.'\', \''.$button1Link.'\')" target="_blank">'.__($button1Text, 'popup').'</a>'; }
                                    if (!empty($button2Text)) { $popup .= '<a style="background-color:'.$button2Color.';" href="'.__($button2Link, 'popup').'" onclick="ga(\'send\', \'event\', \'IP Popup\', \''.$button2Text.'\', \''.$button2Link.'\')" target="_blank">'.__($button2Text, 'popup').'</a>'; }
        $popup .=                '</div>
                            </div>
                        </div>
                    </div>';
        
    
	   $popup .= '<script type="text/javascript">
                    if ("'.$ipPublish.'" == "published") {
                        var popvisited = Cookies.get("visited");
                            // if (popvisited !== "") {
                                if (Modernizr.mq("only screen and (min-width: 800px)")) {
                                    $(".black-drop").fadeIn();
                                    $(".pops").fadeIn();
                                }
                                $(".black-drop, .pops-close").click(function(e) {
                                    $(".black-drop, .pops").hide();
                                    e.preventDefault();
                                });
                                // }
                            Cookies.set("visited", "yes", { expires:'.$length.' });
                        }
                        
                </script>';

    
    } elseif (($publish == 'published') && ((is_page(icl_object_id($pageTarget, 'page'))) || ($pageTarget == 'all') )) {
        if($publish == 'published'){
            $options = get_option('pops_options');
            $image =  $options['pops_image'];
            $content =  $options['pops_text_content']; 
            $button1Text = $options['pops_text_button1_text'];
            $button1Link = $options['pops_text_button1_link'];
            $button2Text = $options['pops_text_button2_text'];
            $button2Link = $options['pops_text_button2_link'];    
            $length = $options['pops_targetting_cookie_length'];
            $button1Color = $options['pops_text_button1_color'];
            $button2Color = $options['pops_text_button2_color']; 
            $bghex = $options['pops_text_content_bg'];
            $bgrgba = hex2rgba($bghex, 0.6);

            $popup .= ' <div class="black-drop"></div>
                        <div class="pops">
                        <button title="Close (Esc)" type="button" class="pops-close">×</button>
                        <img src="'.$image.'">
                            <div class="content">
                                <div style="background-color:'.$bgrgba.';" class="info-box">'.__($content, 'popup').'
                                    <div class="button-box">';
                                        if (!empty($button1Text)) { $popup .= '<a style="background-color:'.$button1Color.';" href="'.__($button1Link, 'popup').'" onclick="ga(\'send\', \'event\', \'Main Popup\', \''.$button1Text.'\', \''.$button1Link.'\')" target="_blank">'.__($button1Text, 'popup').'</a>'; }
                                        if (!empty($button2Text)) { $popup .= '<a style="background-color:'.$button2Color.';" href="'.__($button2Link, 'popup').'" onclick="ga(\'send\', \'event\', \'Main Popup\', \''.$button2Text.'\', \''.$button2Link.'\')" target="_blank">'.__($button2Text, 'popup').'</a>'; }
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
        }

    }

    if ($exitPublish == 'published') {
        
        $options = get_option('pops_quaternary_options');
        $image =  $options['pops_image'];
        $content =  $options['pops_text_content']; 
        $button1Text = $options['pops_text_button1_text'];
        $button1Link = $options['pops_text_button1_link'];
        $button2Text = $options['pops_text_button2_text'];
        $button2Link = $options['pops_text_button2_link'];    
        $length = $options['pops_targetting_cookie_length'];
        $button1Color = $options['pops_text_button1_color'];
        $button2Color = $options['pops_text_button2_color']; 
        $bghex = $options['pops_text_content_bg'];
        $bgrgba = hex2rgba($bghex, 0.6);

        $popup .= ' <div class="exit black-drop"></div>
                    <div class="exit pops">
                    <button title="Close (Esc)" type="button" class="exit pops-close">×</button>
                    <img src="'.$image.'">
                        <div class="content">
                            <div style="background-color:'.$bgrgba.';" class="info-box">'.__($content, 'popup').'
                                <div class="button-box">';
                                    if (!empty($button1Text)) { $popup .= '<a style="background-color:'.$button1Color.';" href="'.__($button1Link, 'popup').'" onclick="ga(\'send\', \'event\', \'IP Popup\', \''.$button1Text.'\', \''.$button1Link.'\')" target="_blank">'.__($button1Text, 'popup').'</a>'; }
                                    if (!empty($button2Text)) { $popup .= '<a style="background-color:'.$button2Color.';" href="'.__($button2Link, 'popup').'" onclick="ga(\'send\', \'event\', \'IP Popup\', \''.$button2Text.'\', \''.$button2Link.'\')" target="_blank">'.__($button2Text, 'popup').'</a>'; }
        $popup .=                '</div>
                            </div>
                        </div>
                    </div>';
        
    
       $popup .= '<script type="text/javascript">
                    function addEvent(obj, evt, fn) {
                        if (obj.addEventListener) {
                            obj.addEventListener(evt, fn, false);
                        }
                        else if (obj.attachEvent) {
                            obj.attachEvent("on" + evt, fn);
                        }
                    }                
    
                    addEvent(document, "mouseout", function(e) {
                        e = e ? e : window.event;
                        var from = e.relatedTarget || e.toElement;
                        if (!from || from.nodeName == "HTML") {
                            
                            if ("'.$exitPublish.'" == "published") {
                            var popvisited = Cookies.get("exited");
                                 if (popvisited !== "yes") {
                                    if (Modernizr.mq("only screen and (min-width: 800px)")) {
                                        $(".exit.black-drop").fadeIn();
                                        $(".exit.pops").fadeIn();
                                    }
                                    $(".exit.black-drop, .exit.pops-close").click(function(e) {
                                        $(".exit.black-drop, .exit.pops").hide();
                                        e.preventDefault();
                                    });
                                     } else {
                                        console.log(\'cookie found, no popup for you.\')
                                     }
                                Cookies.set("exited", "yes", { expires:'.$length.' });
                            }

                        }
                    });
                        
                </script>';
    }

echo $popup;	

}
?>