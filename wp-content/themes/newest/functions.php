<?php

//Add enqueue supports
if(file_exists(get_template_directory().'/inc/enqueue.php')){
	require_once(get_template_directory().'/inc/enqueue.php');
}

//Add theme supports
if(file_exists(get_template_directory().'/inc/theme_setup.php')){
	require_once(get_template_directory().'/inc/theme_setup.php');
}

//Add nav class-wp-bootstrap-navwalker supports
if(file_exists(get_template_directory().'/inc/class-wp-bootstrap-navwalker.php')){
	require_once(get_template_directory().'/inc/class-wp-bootstrap-navwalker.php');
}

//Add Custom Widgets supports
if(file_exists(get_template_directory().'/inc/custom-widgets.php')){
	require_once(get_template_directory().'/inc/custom-widgets.php');
}

//Add Custom Comments supports
if(file_exists(get_template_directory().'/inc/custom-comments.php')){
	require_once(get_template_directory().'/inc/custom-comments.php');
}


//Add WPBakery Activation supports
if(file_exists(get_template_directory().'/inc/plugin-activation.php')){
	require_once(get_template_directory().'/inc/plugin-activation.php');
}

//Add WPBakery Activation supports
if(file_exists(get_template_directory().'/inc/libs/class-tgm-plugin-activation.php')){
	require_once(get_template_directory().'/inc/libs/class-tgm-plugin-activation.php');
}

//Style category
add_filter('wp_list_categories', 'cat_count_span');
function cat_count_span($links) {
  $links = str_replace('</a> (', ' <span class="f-right">(', $links);
  $links = str_replace(')', ')</span> </a>', $links);
  return $links;
}

//Tag 
add_filter('wp_generate_tag_cloud', 'myprefix_tag_cloud',10,1);
function myprefix_tag_cloud($tag_string){
  return preg_replace('/style=("|\')(.*?)("|\')/','',$tag_string);
}



