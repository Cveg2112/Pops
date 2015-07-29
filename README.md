=== Plugin Name ===  
Contributors: Jamie Burleigh, Conor Morrison  
Requires at least: NA
Tested up to: 4.2.2  
Stable tag: 4.2.2 

D3 Pop-Up, an advanced customisable pop-up plugin for Wordpress. Allows the configuration of four different pop-ups, including a general pop-up, a GEO Targetted pop-up, an IP targetted pop-up and an 'Exit Intent' pop-up.

== Description ==

Complete, tested and working for the first implementation of the project for elconresort.com

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the full plugin folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php get_pops(); ?>` in your templates

== Extra ==

**( All of the below is optional. It just gives the editor more control over the popup. )**

With the addition of the Exit Intent Popup comes the colourpicker fields that allow you to add Wordpress's native colourpicker feature. This is used to change the colour of both Buttons and the background of the content area.

This needs to be activated through functions.php, so add this:
```php
	
	/* add wp colourpicker */
	add_action( 'admin_enqueue_scripts', 'mw_enqueue_color_picker' );
	function mw_enqueue_color_picker( $hook_suffix ) {
	    // first check that $hook_suffix is appropriate for your admin page
	    wp_enqueue_style( 'wp-color-picker' );
	    wp_enqueue_script( 'my-script-handle', '/wp-content/plugins/colorPicker.js', array( 'wp-color-picker' ), false, true );
	}

```

Then you need to add a file called colorPicker.js that contains:
```javascript

jQuery(document).ready(function($){
    $('.color-1').wpColorPicker();
    $('.color-2').wpColorPicker();
    $('.color-3').wpColorPicker();
});

```

Since the background colour box needs to be transparent, another function needs to be added to functions.php (the colourpicker only outputs in Hex, we need RGBA):
```php

function hex2rgba($color, $opacity = false) {
 
	$default = 'rgba(109,109,109,.6)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}

```