<?php
/*
 
Plugin Name: Author
 
Plugin URI: 
 
Description: 
 
Version: 1.0
 
Author: 
 
Author URI: 
 
License: 
 
Text Domain: 
 
*/
function newest_contactmethods($contactmethods){
	
	$contactmethods['facebook'] = 'Facebook Link';
	$contactmethods['twitter'] = 'Twitter Link';
	$contactmethods['skype'] = 'Skype Link';
	$contactmethods['share'] = 'Share Link';

	return $contactmethods;
}
add_filter('user_contactmethods','newest_contactmethods',10,1);


