<?php get_header();?>
        <main>
            <!-- Page-header start -->
            <div class="page-header background-image-style" data-background="<?php echo get_template_directory_uri()?>/assets/images/bg/page-header-bg.jpg" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page-title text-center">
                                <h2>Blog Details Page</h2>
                                <ul class="breadcrumb-menu">
                                    <li class="breadcrumb-items"><a href="index.html" title="Home">Home</a></li>
                                    <li class="active">Blog</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            <!-- Blog-page-content-area start -->
            <section class="blog-page-content-area pt-100 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-md-8">
							<?php
								if(have_posts()): while(have_posts()): the_post();
									get_template_part('template-parts/content','single');	
									endwhile;
								?>
								<?php
								else:
									get_template_part('template-parts/content','none');	
								endif;
								wp_reset_postdata();
							?>
                            
                        </div>
						<?php
							if(is_active_sidebar('newest_blog_sidebar')){ ?>
								<div class="col-xl-4 col-md-4">
									<!-- sidebar area -->
									<div class="sidebar widget-area">
										<?php dynamic_sidebar('newest_blog_sidebar')?>
									</div>
									<!-- sidebar  -->
								</div>
							<?php } ?>
                        
						
                    </div>
                </div>
            </section>
            <!-- Blog-page-content-area end -->
        </main>
       <?php get_footer();?>