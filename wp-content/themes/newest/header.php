<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Newest App Landing Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="/assets/images/x-icon" href="<?php echo get_template_directory_uri()?>/assets/images/favicon.ico">
		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- Header-area start -->
        <header>
            <div id="header-sticky" class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-3 d-flex align-items-center">
                            <div class="logo">	
							<?php
								$custom_logo_id = get_theme_mod( 'custom_logo' );
								$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								 
								if ( has_custom_logo() ) {
									echo '<a href="'.esc_url( home_url('/') ).'"><img src="' . esc_url( $logo[0] ) . '" alt="' . esc_html__( 'Logo','newest' ) . '"/></a>';
								} else {
									echo '<a href="'.esc_url( home_url('/') ).'"><h2 class="newest-site-title">' . esc_attr(get_bloginfo('name')) . '</h2></a>';
								}
							?>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-9 d-none d-md-block">
                            <div class="header-right f-right">
                                <a href="#" class="btn header-btn">Try for free</a>
                            </div>
                            <div class="main-menu f-right mr-15 d-none d-xl-block">
								<nav id="mobile-menu">
									<?php 
										if(has_nav_menu('header_menu')){
											wp_nav_menu( array(
											'menu' => 'header_menu',
											'theme_location' => 'header_menu',
											'depth' => 3,
											'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
											'walker' => new WP_Bootstrap_Navwalker()
											) );
										}
									  
									?>
								</nav>
                                <!--<ul>
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="about-us.html">About Us </a></li>
									<li><a href="features.html">Features</a></li>
									<li><a href="screenshot.html">Screenshots</a></li>
									<li><a href="pricing.html">Pricing</a></li>
									<li><a href="blog.html">Blog<i class="icofont-caret-down"></i></a>
										<ul class="submenu">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</li>
									<li><a href="faqs.html">Faqs</a></li>
								</ul>-->
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header-area end -->