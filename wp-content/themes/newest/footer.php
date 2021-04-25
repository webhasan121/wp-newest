<!-- Footer-area start -->
        <footer class="main-footer">
            <div class="footer-top background-image-style pt-120 pb-60" data-background="<?php echo get_template_directory_uri()?>/assets/images/bg/footer01.jpg" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
							<?php dynamic_sidebar('footer_widget_1'); ?>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6">
                            <?php dynamic_sidebar('footer_widget_2'); ?>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <?php dynamic_sidebar('footer_widget_3'); ?>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="footer-widget mb-30">
                                <h4 class="widget-title">Subscribe</h4>
                                <p class="mb-30">Lorem ipsum dolor si  consectetur adipisicing elitsed eiusmotempor incididunt ut labore et</p>
                                <div class="subscribe-form mb-30">
                                    <form action="#">
                                        <input type="email" placeholder="Type Your Email">
                                        <button type="submit" class="subscribe-btn blue-gradient-bg"><i class="icofont-paper-plane"></i></button>
                                    </form>
                                </div>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                                        <li><a href="#" class="skype"><i class="icofont-skype"></i></a></li>
                                        <li><a href="#" class="share"><i class="icofont-share"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-15">
                <div class="container">
                    <div class="copyright-text text-center">
                        <p>Copyrights © 2019 All Rights Reserved by<a href="#">newest</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer-area end -->
		
		<?php wp_footer();?>
    </body>
</html>