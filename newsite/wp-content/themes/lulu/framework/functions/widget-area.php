<?php
///////////////////////////////////////////////// Sidebar Widgets
if ( function_exists('register_sidebar') )

register_sidebar(array('name'=>'Footer One',
	'before_widget' => '<div class="clearfix">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="sidebar">',
	'after_title' => '</h4>',
));
register_sidebar(array('name'=>'Footer One Bottom',
	'before_widget' => '<div class="clearfix">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="sidebar">',
	'after_title' => '</h4>',
));
register_sidebar(array('name'=>'Footer Two',
	'before_widget' => '<div class="clearfix">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="sidebar">',
	'after_title' => '</h4>',
));
register_sidebar(array('name'=>'Footer Two Bottom',
	'before_widget' => '<div class="clearfix">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="sidebar">',
	'after_title' => '</h4>',
));
register_sidebar(array('name'=>'Footer Three',
	'before_widget' => '<div class="clearfix">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="sidebar">',
	'after_title' => '</h4>',
));
register_sidebar(array('name'=>'Footer Three Bottom',
	'before_widget' => '<div class="clearfix">',
	'after_widget' => '</ul>',
	'before_title' => '<h4 class="sidebar">',
	'after_title' => '</h4>',
));
register_sidebar(array('name'=>'Footer Four',
	'before_widget' => '<div class="clearfix">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="sidebar">',
	'after_title' => '</h4>',
));
register_sidebar(array('name'=>'Footer Four Bottom',
	'before_widget' => '<div class="clearfix">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="sidebar">',
	'after_title' => '</h4>',
));



register_sidebar(array('name'=>'Sidebar One',
	'before_widget' => '<ul class="clearfix">',
	'after_widget' => '</ul>',
	'before_title' => '<h4 class="sidebar">',
	'after_title' => '</h4>',
));
register_sidebar(array('name'=>'Sidebar Two',
	'before_widget' => '<ul class="clearfix">',
	'after_widget' => '</ul>',
	'before_title' => '<h4 class="sidebar">',
	'after_title' => '</h4>',
));
register_sidebar(array('name'=>'Sidebar Three',
	'before_widget' => '<ul class="clearfix">',
	'after_widget' => '</ul>',
	'before_title' => '<h4 class="sidebar">',
	'after_title' => '</h4>',
));
register_sidebar(array('name'=>'Sidebar Four',
	'before_widget' => '<ul class="clearfix">',
	'after_widget' => '</ul>',
	'before_title' => '<h4 class="sidebar">',
	'after_title' => '</h4>',
));
register_sidebar(array('name'=>'Sidebar Five',
	'before_widget' => '<ul class="clearfix">',
	'after_widget' => '</ul>',
	'before_title' => '<h4 class="sidebar">',
	'after_title' => '</h4>',
));
?>