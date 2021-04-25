<?php


function newest_theme_setup(){
	//Add theme supports
	add_theme_support('custom-header');
	add_theme_support('custom-logo');
	add_theme_support('custom-background');
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	
	add_theme_support('html5', array('search-form', 'comment-form', 'comment-list','gallery','caption'));
	
	//Add Menu
	register_nav_menus( array(
		'header_menu' => 'Header Menu',
		'footer_menu' => 'Footer Menu'
	));
	
	add_image_size( 'newest_recent_post',90,90,true );
}
add_action('after_setup_theme', 'newest_theme_setup');

function newest_comment_form_fields($fields){
	$comment_fields = $fields['comment'];
	unset($fields['comment']);
	unset($fields['cookies']);
	$fields['comment'] = $comment_fields;
	return $fields;
	
	
}
add_filter('comment_form_fields','newest_comment_form_fields');
