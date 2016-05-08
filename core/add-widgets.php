<?php

require_once get_template_directory() . '/core/widgets/search_widget.php';

function suevaxuan_widgets_init() {

	register_sidebar(array(
	
		'name' => 'Sidebar',
		'id'   => 'sidebar-area',
		'description'   => 'This sidebar will be shown after the content.',
		'before_widget' => '<div id="%1$s" class="widget-box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>'
	
	));
	
	register_sidebar(array(
	
		'name' => 'Home Sidebar',
		'id'   => 'home_sidebar_area',
		'description'   => __( "This sidebar will be shown for the homepage","wip"),
		'before_widget' => '<div id="%1$s" class="widget-box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>'
	
	));

	register_sidebar(array(
	
		'name' => 'Category Sidebar',
		'id'   => 'category-sidebar-area',
		'description'   => 'This sidebar will be shown after the content.',
		'before_widget' => '<div id="%1$s" class="widget-box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>'
	
	));

	register_sidebar(array(
	
		'name' => 'Bottom Sidebar',
		'id'   => 'bottom-sidebar-area',
		'description'   => 'This sidebar will be shown after the content.',
		'before_widget' => '<div id="%1$s" class="span3 %2$s"><div class="widget-box">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4 class="title">',
		'after_title'   => '</h4>'
	
	));

}

add_action( 'widgets_init', 'suevaxuan_widgets_init' );



?>