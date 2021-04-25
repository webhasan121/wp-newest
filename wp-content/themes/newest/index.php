<?php get_header();?>
        <main>
            <!-- Page-header start -->
            <div class="page-header background-image-style" data-background="<?php echo get_template_directory_uri()?>/assets/images/bg/page-header-bg.jpg" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page-title text-center">
                                <h2>Blog Page</h2>
                                <ul class="breadcrumb-menu">
                                    <li class="breadcrumb-items"><a href="index.html" title="Home">Home</a></li>
                                    <li class="active">Blog update 2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            <!-- Blog-area start -->
            <section class="blog-area pt-110 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-7 col-md-10">
                            <div class="section-header mb-55 text-center">
                                <h2>Latest News & Blog Posts</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, seddo eiusmod te incididunt ut labore etdolore magna aliqua use enim admin  consectetur</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
						<?php 
							if(have_posts()): while(have_posts()): the_post();
							get_template_part('template-parts/content',get_post_format());	
						?>
							
						<?php 
							endwhile;
						?>
                        <div class="col-xl-12">
                            <div class="blog-pagination mb-30 mt-30">
                                <ul class="pagination justify-content-center align-items-center">
								
									<?php the_posts_pagination( array(
										'mid_size'  => 2,
										'prev_text' => __( 'Previous', 'newest' ),
										'next_text' => __( 'Next', 'newest' ),
									) ); ?>
									
									<!--
                                    <li class="page-item">
                                        <a class="page-link" href=""><i class="icofont-rounded-left"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="">01</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="">02</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="">03</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="">04</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href=""><i class="icofont-rounded-right"></i></a>
                                    </li>
									-->
                                </ul>
                            </div>
                        </div>
						<?php
							else:
							get_template_part('template-parts/content','none');	
							endif;
							wp_reset_postdata();
						?>
                    </div>
                </div>
            </section>
			
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xl-8"></div>
						<div class="col-xl-4 col-md-4">
							<!-- sidebar area -->
							<div class="sidebar widget-area">
								<?php dynamic_sidebar('newest_blog_sidebar')?>
							</div>
							<!-- sidebar  -->
						</div>
					</div>
				</div>
			</section>
            <!-- Blog-area end -->
        </main>
       
<?php get_footer();?>