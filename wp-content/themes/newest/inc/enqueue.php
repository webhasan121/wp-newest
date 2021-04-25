<?php

function newest_theme_js_css(){
	//Css Load
	wp_enqueue_style('bootstrap-min-css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(),'1.0', 'all');
	wp_enqueue_style('owl-carousel-min-css', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(),'1.0', 'all');
	wp_enqueue_style('animate-min-css', get_template_directory_uri().'/assets/css/animate.min.css', array(),'1.0', 'all');
	wp_enqueue_style('icofont-min-css', get_template_directory_uri().'/assets/css/icofont.min.css', array(),'1.0', 'all');
	wp_enqueue_style('magnific-popup-css', get_template_directory_uri().'/assets/css/magnific-popup.css', array(),'1.0', 'all');
	wp_enqueue_style('fontawesome-all-min-css', get_template_directory_uri().'/assets/css/fontawesome-all.min.css', array(),'1.0', 'all');
	wp_enqueue_style('meanmenu-css', get_template_directory_uri().'/assets/css/meanmenu.css', array(),'1.0', 'all');
	wp_enqueue_style('slick-css', get_template_directory_uri().'/assets/css/slick.css', array(),'1.0', 'all');
	wp_enqueue_style('newest-default-css', get_template_directory_uri().'/assets/css/default.css', array(),'1.0', 'all');
	wp_enqueue_style('newest-style-css', get_template_directory_uri().'/assets/css/style.css', array(),'1.0', 'all');
	wp_enqueue_style('newest-responsive-css', get_template_directory_uri().'/assets/css/responsive.css', array(),'1.0', 'all');
	
	wp_enqueue_style('style-css', get_stylesheet_uri());
	if( is_singular()) wp_enqueue_script('comment-reply');
	
	 // JS Load
    wp_enqueue_script('modernizr-min-js', get_template_directory_uri().'/assets/js/vendor/modernizr-3.5.0.min.js', array('jquery'),'1.0',true);
	wp_enqueue_script('popper-min-js', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('owlcarousel-min-js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'),'1.0',true);
	wp_enqueue_script('slick-min-js', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'),'1.0',true);
	wp_enqueue_script('jquery-meanmenu-min-js', get_template_directory_uri().'/assets/js/jquery.meanmenu.min.js', array('jquery'),'1.0',true);
	wp_enqueue_script('wow-min-js', get_template_directory_uri().'/assets/js/wow.min.js', array('jquery'),'1.0',true);
	wp_enqueue_script('jquery-scrollUp-min-js', get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js', array('jquery'),'1.0',true);
	wp_enqueue_script('jquery-magnific-popup-min-js', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'),'1.0',true);
	wp_enqueue_script('waypoints-min-js', get_template_directory_uri().'/assets/js/waypoints.min.js', array('jquery'),'1.0',true);
	wp_enqueue_script('jquery-counterup-min-js', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'),'1.0',true);
	wp_enqueue_script('plugins-js', get_template_directory_uri().'/assets/js/plugins.js', array('jquery'),'1.0',true);
	wp_enqueue_script('wow-min-js', get_template_directory_uri().'/assets/js/wow.min.js', array('jquery'),'1.0',true);
	
	wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBvEEMx3XDpByNzYNn0n62Zsq_sVYPx1zY');
	
	wp_enqueue_script('newest-main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'),'1.0',true);
	
}
add_action( 'wp_enqueue_scripts', 'newest_theme_js_css' );


function newest_theme_fonts_url() {
	$fonts_url = '';
	 
	/* Translators: If there are characters in your language that are not
	* supported by Poppins, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$poppins = _x( 'on', 'Poppins font: on or off', 'theme-slug' );
	 
	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$open_sans = _x( 'on', 'Open Sans font: on or off', 'newest' );
	
	/* Translators: If there are characters in your language that are not
	* supported by Roboto Slab, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$roboto_slab = _x( 'on', 'Roboto+Slab font: on or off', 'newest' );
	 
	if ( 'off' !== $poppins || 'off' !== $open_sans || 'off' !== $roboto_slab ) {
		$font_families = array();
	 
		if ( 'off' !== $poppins ) {
			$font_families[] = 'Poppins:400,500,600,600i,700';
		}
		 
		if ( 'off' !== $open_sans ) {
			$font_families[] = 'Open Sans:400,500,600,600i,700';
		}
		
		if ( 'off' !== $roboto_slab ) {
			$font_families[] = 'Roboto+Slab:400,700';
		}
		 
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		 
		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
	 
	return esc_url_raw( $fonts_url );
}


//Enqueuing on the front end
function newest_scripts_styles() {
	wp_enqueue_style( 'newest-fonts', newest_theme_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'newest_scripts_styles' );


//Adding Google fonts to the editor
function newest_editor_styles() {
	add_editor_style( array( 'editor-style.css', '//fonts.googleapis.com/css?family=Open+Sans|Poppins:400,500,600,600i,700|Roboto+Slab:400,700&display=swap' ) );
}
add_action( 'after_setup_theme', 'newest_editor_styles' );


//Adding fonts to the Custom Header screen
function newest_custom_header_fonts() {
	wp_enqueue_style( 'newest-fonts', '//fonts.googleapis.com/css?family=Open+Sans|Poppins:400,500,600,600i,700|Roboto+Slab:400,700&display=swap', array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'newest_custom_header_fonts' );
