<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){
	
// VARIABLES
$themename = get_theme_data(STYLESHEETPATH . '/style.css');
$themename = $themename['Name'];
$shortname = "of";

// Populate OptionsFramework option in array for use in theme
global $of_options;
$of_options = get_option('of_options');

$GLOBALS['template_path'] = OF_DIRECTORY;

//Access the WordPress Categories via an Array
$of_categories = array();  
$of_categories_obj = get_categories('hide_empty=0');
foreach ($of_categories_obj as $of_cat) {
$of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
$categories_tmp = array_unshift($of_categories, "Select a category:");    
       
//Access the WordPress Pages via an Array
$of_pages = array();
$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($of_pages_obj as $of_page) {
    $of_pages[$of_page->ID] = $of_page->post_name; }
$of_pages_tmp = array_unshift($of_pages, "Select a page:");       

// Image Alignment radio box
$options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 

//Testing 
$img = OF_DIRECTORY . '/_framework/images/graph.png';

// Nivo Slider Options
$options_slide_time = array("5000","6000","7000","8000","9000","10000");//ani time
$options_slide_speed = array("300","400","500","600","700","800");//Slide transition speed
$options_slide_eff = array("sliceDown","sliceDownLeft","sliceUp","sliceUpLeft","sliceUpDown","sliceUpDownLeft","fold","fade","random");
$options_slide_slices = array("5","10","15","20");

// Orbit Slider Options
$options_slide_time_orbit = array("3000","4000","5000","6000","7000","8000","9000","10000");//if timer is enabled, time between transitions
$options_slide_ani_orbit = array("400","500","600","700","800","900","1000");// how fast animtions are
$options_orbit_trans = array("fade", "horizontal-slide", "vertical-slide", "horizontal-push");

$options_select = array($img,"two","three","four","five"); 
$options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five"); 

//Stylesheets Reader
$alt_stylesheet_path = OF_FILEPATH . '/framework/styles/';
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('of_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");

// Set the Options Array
$options = array();

$options[] = array( "name" => "Custom Logo",
                    "type" => "heading");
                    
                    
$options[] = array( "name" => "Check For Text Logo",
					"desc" => "Check this to enable a plain text logo rather than an image.  Be sure to leave this unchecked if you have an image you've uploaded.",
					"id" => $shortname."_text_logo",
					"std" => "false",
					"type" => "checkbox");
               					

$options[] = array( "name" => "Custom Logo",
					"desc" => "Upload a logo for your theme, or specify the image address of your online logo. (http://yoursite.com/logo.png)",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "upload");
					
					
$options[] = array( "name" => "General Options",
                    "type" => "heading");
                    
$options[] = array( "name" => "Style & Icon Color Options",
					"desc" => "Select your themes alternative color scheme.",
					"id" => $shortname."_alt_stylesheet",
					"std" => "default.css",
					"type" => "select",
					"options" => $alt_stylesheets);
                    
$options[] = array( "name" => "Show Logos At Bottom",
					"desc" => "Check this to enable a plain text logo rather than an image.",
					"id" => $shortname."_media",
					"std" => "false",
					"type" => "checkbox");
					
$options[] = array( "name" => "Remove Stars",
					"desc" => "Check this to show the stars",
					"id" => $shortname."_stars",
					"std" => "false",
					"type" => "checkbox");
					
$options[] = array( "name" => "Homepage Stuff",
                    "type" => "heading");
					
$options[] = array( "name" => "Latest Blog Headline",
					"desc" => "Introduce the latest blog items on the front page.",
					"id" => $shortname."_latest_blog_tagline",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => "Clients/Logos Headline",
					"desc" => "Introduce your clients/logos.",
					"id" => $shortname."_clients_tagline",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => "Blog Stuff",
                    "type" => "heading");
                    
$options[] = array( "name" => "Blog Headline",
					"desc" => "Introduce your blog with a brief headline.",
					"id" => $shortname."_blog_tagline",
					"std" => "",
					"type" => "text");
	
$options[] = array( "name" => "Gallery Stuff",
                    "type" => "heading");
                    
$options[] = array( "name" => "Gallery Headline",
					"desc" => "Introduce your gallery with a brief headline.",
					"id" => $shortname."_gallery_tagline",
					"std" => "",
					"type" => "text");
                   
					
$options[] = array( "name" => "How Many Gallery Items to Display?",
					"desc" => "This will determine how many slides you wish to display.  The default is 6. If you just want to show a single, static image, just type in 1.",
					"id" => $shortname."_gallery_num",
					"std" => "",
					"type" => "text");
			
                    
$options[] = array( "name" => "Contact Stuff",
                    "type" => "heading");
                    
$options[] = array( "name" => __('Contact Form Email Address','framework'),
					"desc" => __('Enter the email address where you\'d like to receive emails from the contact form, or leave blank to use admin email.','framework'),
					"id" => $shortname."_email",
					"std" => "",
					"type" => "text");	
					
$options[] = array( "name" => "Contact Headline",
					"desc" => "Introduce your gallery with a brief headline.",
					"id" => $shortname."_contact_tagline",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => "Social Icon Stuff",
                    "type" => "heading");
                    
					

					
$options[] = array( "name" => "Facebook URL",
					"desc" => "Enter Your Facebook URL<br/><span style='color:#FF5500'>http://www.facebook.com/pages/Siiimple/174221319304233</span>",
					"id" => $shortname."_facebook_url",
					"std" => "",
					"type" => "text");
					

					
$options[] = array( "name" => "Twitter Username",
					"desc" => "Enter Your Twitter Username.<br/><span style='color:#FF5500'>http://www.twitter.com/siiimple</span>",
					"id" => $shortname."_twitter_url",
					"std" => "",
					"type" => "text");
					
  
$options[] = array( "name" => "Flickr URL",
					"desc" => "Enter Your Flickr Username.<br/><span style='color:#FF5500'>http://www.flickr.com/photos/44952670@N02</span>",
					"id" => $shortname."_flickr_url",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => "Contact",
					"desc" => "Enter Your Address to your contact page.<br/><span style='color:#FF5500'>http://themes.siiimple.com/zoho/pageExample</span>",
					"id" => $shortname."_email_url",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => "RSS URL",
					"desc" => "Enter Your RSS feed.<br/><span style='color:#FF5500'>http://themes.siiimple.com/zoho/feed</span>",
					"id" => $shortname."_rss_url",
					"std" => "",
					"type" => "text");		
					
					
$options[] = array( "name" => "Other Stuff",
                    "type" => "heading");
					
$options[] = array( "name" => "Tracking Code",
					"desc" => "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
					"id" => $shortname."_ga_code",
					"std" => "",
					"type" => "textarea"); 
					
$options[] = array( "name" => "Custom Favicon",
					"desc" => "Upload a 16px x 16px Png/Gif image that will represent your website's favicon.",
					"id" => $shortname."_custom_favicon",
					"std" => "",
					"type" => "upload");
					
$options[] = array( "name" => "Change text in the Footer?",
					"desc" => "This will change the entire text in the footer and replace it with what you want.  You can use html tags, like < p >< /p > for paragraph, etc.  Also, if you want to keep your rss feed in place use this:<br/> < ?php bloginfo('rss2_url'); ? > (no spaces before brackets)",
					"id" => $shortname."_footer",
					"std" => "",
					"type" => "textarea");
			
					
update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);

}
}
?>