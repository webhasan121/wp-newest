<?php
/**
 * Template part for displaying posts
 *
 *
 * @package WordPress
 * @subpackage Newest
 * @since Newest 1.0
 */

?>
<?php $sticky = !is_sticky() ? 'none-sticky' : 'sticky' ?>
<article id="post-<?php the_ID(); ?>" <?php post_class($sticky); ?>>
	<!-- single-post-details-item area -->
	<div class="single-post-details-item">
		<div class="blog-img mb-25">
			<?php
				if(has_post_thumbnail()) the_post_thumbnail();
			?>
		</div>
		<div class="entry-content mb-75">
			<h6 class="post-date"> <?php the_category( ' , ' ); ?> <?php echo esc_html__('By', 'newest');?> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID'), get_the_author_meta('user_nicename') ));?>"><?php the_author();?></a> <?php echo esc_html__(get_the_time('d'));?> <?php echo esc_html__(get_the_time('F'));?> <?php echo esc_html__(get_the_time('Y'));?></h6>
			<h4 class="blog-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
			<?php the_content();?>
		</div>
		<div class="entry-footer mb-60">
			<hr>
			<div class="social-share">
				<div class="footer-link">
					<ul>
						<?php
							$facebook = get_the_author_meta('facebook',$user_ID);
							$twitter = get_the_author_meta('twitter',$user_ID);
							$skype = get_the_author_meta('skype',$user_ID);
							$share = get_the_author_meta('share',$user_ID);
							
							if(!empty($facebook)){
								?>
									<li><a href="<?php echo esc_url($facebook); ?>" class="facebook"><i class="icofont-facebook"></i></a></li>
								<?php
							}
							if(!empty($twitter)){
								?>
									<li><a href="<?php echo esc_url($twitter); ?>" class="twitter"><i class="icofont-twitter"></i></a></li>
								<?php
							}
							if(!empty($skype)){
								?>
									<li><a href="<?php echo esc_url($share); ?>" class="share"><i class="icofont-skype"></i></a></li>
								<?php
							}
							if(!empty($share)){
								?>
									<li><a href="<?php echo esc_url($share); ?>" class="share"><i class="icofont-share"></i></a></li>
								<?php
							}
						?>
					</ul>
				</div>
			</div>
		</div>
		<div class="postbox__author grey-bg-13 d-sm-flex mb-65">
			<div class="postbox__author-thumb mr-20">
				<?php echo get_avatar( get_the_author_meta('id'),60,60 );?>
			</div>
			<div class="postbox__author-content">
				<h4><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID'), get_the_author_meta('user_nicename') ));?>"><?php the_author();?></a></h4>
				<span><?php echo esc_html__('About Author','newest')?></span>
				<p><?php the_author_meta('description')?></p>
			</div>
		</div>
		
		<?php
		
			if( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
	</div>
	<!-- single-post-details-item -->
</article>