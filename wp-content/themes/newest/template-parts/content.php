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

<div class="col-xl-4 col-lg-4 col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class($sticky); ?>>
		<div class="single-blog-wrap mb-30">
			<div class="blog-img">
				<?php
					if(has_post_thumbnail()) the_post_thumbnail();
				?>
			</div>
			<div class="blog-content">
				<h6 class="post-date"> <?php the_category( ' , ' ); ?> <?php echo esc_html__('By', 'newest');?> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID'), get_the_author_meta('user_nicename') ));?>"><?php the_author();?></a> <?php echo esc_html__(get_the_time('d'));?> <?php echo esc_html__(get_the_time('F'));?> <?php echo esc_html__(get_the_time('Y'));?></h6>
				<h4 class="blog-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
				<p>
					<?php
						if(! has_excerpt()){
							echo wp_trim_words( get_the_content(), 32, '...');
						}else{
							the_excerpt();
						}
					?>
				</p>
				<a href="<?php the_permalink();?>" class="read-more-link"><?php echo esc_html__('Read More', 'newest');?></a>
			</div>
		</div>
	</article>
</div>
