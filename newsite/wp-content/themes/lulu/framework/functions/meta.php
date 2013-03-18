<?php
/**
 * Registering meta boxes
 *
 * In this file, I'll show you how to extend the class to add more field type (in this case, the 'taxonomy' type)
 * All the definitions of meta boxes are listed below with comments, please read them carefully.
 * Note that each validation method of the Validation Class MUST return value instead of boolean as before
 *
 * You also should read the changelog to know what has been changed
 *
 * For more information, please visit: http://www.deluxeblogtips.com/2010/04/how-to-create-meta-box-wordpress-post.html
 *
 */

/********************* BEGIN EXTENDING CLASS ***********************/

/**
 * Extend RW_Meta_Box class
 * Add field type: 'taxonomy'
 */
class RW_Meta_Box_Taxonomy extends RW_Meta_Box {
	
	function add_missed_values() {
		parent::add_missed_values();
		
		// add 'multiple' option to taxonomy field with checkbox_list type
		foreach ($this->_meta_box['fields'] as $key => $field) {
			if ('taxonomy' == $field['type'] && 'checkbox_list' == $field['options']['type']) {
				$this->_meta_box['fields'][$key]['multiple'] = true;
			}
		}
	}
	
	// show taxonomy list
	function show_field_taxonomy($field, $meta) {
		global $post;
		
		if (!is_array($meta)) $meta = (array) $meta;
		
		$this->show_field_begin($field, $meta);
		
		$options = $field['options'];
		$terms = get_terms($options['taxonomy'], $options['args']);
		
		// checkbox_list
		if ('checkbox_list' == $options['type']) {
			foreach ($terms as $term) {
				echo "<input type='checkbox' name='{$field['id']}[]' value='$term->slug'" . checked(in_array($term->slug, $meta), true, false) . " /> $term->name<br/>";
			}
		}
		// select
		else {
			echo "<select name='{$field['id']}" . ($field['multiple'] ? "[]' multiple='multiple' style='height:auto'" : "'") . ">";
		
			foreach ($terms as $term) {
				echo "<option value='$term->slug'" . selected(in_array($term->slug, $meta), true, false) . ">$term->name</option>";
			}
			echo "</select>";
		}
		
		$this->show_field_end($field, $meta);
	}
}

/********************* END EXTENDING CLASS ***********************/

/********************* BEGIN DEFINITION OF META BOXES ***********************/

// prefix of meta keys, optional
// use underscore (_) at the beginning to make keys hidden, for example $prefix = '_rw_';
// you also can make prefix empty to disable it
$prefix = 'siiimple_';

$meta_boxes = array();

// Video meta box
$meta_boxes[] = array(
	'id' => 'Video',
	'title' => 'Video',
	'pages' => array('post','page','portfolio'), // custom post types, since WordPress 3.0
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		
		array(
			'name' => 'Video',
			'desc' => 'You can add a video link here.  Be careful to use the correct url for the video.  For YouTube find the embed value code.  For Vimeo, copy and paste the value url.<br/>Example: <span style="font-style:italic;">http://www.youtube.com/v/2Qj8PhxSnhg&hl=en_US&fs=1</span>',
			'id' => $prefix . 'video',
			'type' => 'text',
			'std' => '',
		),

	)
);


// Screenshots meta box
$meta_boxes[] = array(
	'id' => 'info-img',
	'title' => 'Add Info Shortcode Image',
	'pages' => array('info'),

	'fields' => array(
		
		array(
			'name' => 'Info Image',
			'desc' => 'Add a shortcode here.  It will look like this:  [ image name=symbol1 ], with no space between brackets.  Check out the full list of symbols available here:  <a href="http://themes.siiimple.com/lulu/shortcodes-symbols">http://themes.siiimple.com/lulu/shortcodes-symbols</a>.  Alternatively, you can use the Featured Image uploader to use your own image, if you would prefer.',
			'id' => $prefix . 'info',
			'type' => 'text'						// image upload
		)
	)
);

// Screenshots meta box
$meta_boxes[] = array(
	'id' => 'info-url',
	'title' => 'Add Page URL',
	'pages' => array('info','logos'),

	'fields' => array(
		
		array(
			'name' => 'Info URL',
			'desc' => 'You can use this area to link a page, if you would prefer to not use the actual link to the post.',
			'id' => $prefix . 'info_url',
			'type' => 'text'						// image upload
		)
	)
);

// Screenshots meta box
$meta_boxes[] = array(
	'id' => 'info-btn-text',
	'title' => 'Add Text For Button',
	'pages' => array('info'),

	'fields' => array(
		
		array(
			'name' => 'Info Button Text',
			'desc' => 'You can change the text within the button here.',
			'id' => $prefix . 'btn',
			'type' => 'text'						// image upload
		)
	)
);

// Screenshots meta box
$meta_boxes[] = array(
	'id' => 'slide1',
	'title' => 'Image1',
	'pages' => array('post', 'page', 'featured_posts', 'portfolio'),

	'fields' => array(
		
		array(
			'name' => 'Screenshots',
			'desc' => 'Just attach an image...',
			'id' => $prefix . 'screenshot',
			'type' => 'image'						// image upload
		)
	)
);

// Screenshots meta box
$meta_boxes[] = array(
	'id' => 'slide2',
	'title' => 'Image2',
	'pages' => array('post', 'page', 'featured_posts', 'portfolio'),

	'fields' => array(
		
		array(
			'name' => 'Screenshots',
			'desc' => 'Just attach an image...',
			'id' => $prefix . 'screenshott',
			'type' => 'image'						// image upload
		)
	)
);

// Screenshots meta box
$meta_boxes[] = array(
	'id' => 'slide3',
	'title' => 'Image3',
	'pages' => array('post', 'page', 'featured_posts', 'portfolio'),

	'fields' => array(
		
		array(
			'name' => 'Screenshots',
			'desc' => 'Just attach an image...',
			'id' => $prefix . 'screenshottt',
			'type' => 'image'						// image upload
		)
	)
);

// Screenshots meta box
$meta_boxes[] = array(
	'id' => 'slide4',
	'title' => 'Image4',
	'pages' => array('post', 'page', 'featured_posts', 'portfolio'),

	'fields' => array(
		
		array(
			'name' => 'Screenshots',
			'desc' => 'Just attach an image...',
			'id' => $prefix . 'screenshotttt',
			'type' => 'image'						// image upload
		)
	)
);

// Screenshots meta box
$meta_boxes[] = array(
	'id' => 'slide5',
	'title' => 'Image5',
	'pages' => array('post', 'page', 'featured_posts', 'portfolio'),

	'fields' => array(
		
		array(
			'name' => 'Screenshots',
			'desc' => 'Just attach an image...',
			'id' => $prefix . 'screenshottttt',
			'type' => 'image'						// image upload
		)
	)
);



foreach ($meta_boxes as $meta_box) {
	$my_box = new RW_Meta_Box_Taxonomy($meta_box);
}

/********************* END DEFINITION OF META BOXES ***********************/

/********************* BEGIN VALIDATION ***********************/

/**
 * Validation class
 * Define ALL validation methods inside this class
 * Use the names of these methods in the definition of meta boxes (key 'validate_func' of each field)
 */
class RW_Meta_Box_Validate {
	function check_name($text) {
		if ($text == 'Anh Tran') {
			return 'He is Rilwis';
		}
		return $text;
	}
}

/********************* END VALIDATION ***********************/
?>
