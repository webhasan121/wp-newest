<?php

 
function newest_theme_register_sidebars() {
    register_sidebar( array(
        'name'          => esc_html__( 'Main Sidebar', 'newest' ),
        'id'            => 'newest_blog_sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'newest' ),
        'before_widget' => '<div class="widget mb-55">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="sidebar-widget-title">',
        'after_title'   => '</h5>',
    ) );
	
	
	register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 1', 'newest' ),
        'id'            => 'footer_widget_1',
        'description'   => __( 'footer widget.', 'newest' ),
        'before_widget' => '<div class="footer-widget pr-60 mb-30">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
	
	register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 2', 'newest' ),
        'id'            => 'footer_widget_2',
        'description'   => __( 'footer widget.', 'newest' ),
        'before_widget' => '<div class="footer-widget mb-30">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
	
	register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 3', 'newest' ),
        'id'            => 'footer_widget_3',
        'description'   => __( 'footer widget.', 'newest' ),
        'before_widget' => '<div class="footer-widget pl-70 mb-30">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'newest_theme_register_sidebars' );


//Recent Post Custom Widget
class Newest_recent_post_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'newst_recent_post', // Base ID
			esc_html__( 'Theme - Recent Post', 'newest' ), // Name
			array( 'description' => esc_html__( 'This is custom recent post style', 'newest' ), ) // Args
		);
	}
	
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$recent_post_title = ! empty( $instance['recent_post_title'] ) ? $instance['recent_post_title'] : esc_html__( '', 'newest' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'recent_post_title' ) ); ?>"><?php esc_attr_e( 'Title:', 'newest' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'recent_post_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'recent_post_title' ) ); ?>" type="text" value="<?php echo esc_attr( $recent_post_title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['recent_post_title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['recent_post_title'] ) . $args['after_title'];
		}
		?>
		<div class="recent-post">
			<ul>
				<?php 
				query_posts('post_type=post&posts_per_page=3');
				if(have_posts()) : while(have_posts()) : the_post();	
				?>
				   <li class="d-flex align-items-center mb-30">
					  <div class="recent-thumb mr-30">
						 <a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()) the_post_thumbnail('newest_recent_post');?>
						 </a>
					  </div>
					  <div class="recent-content">
						 <div class="recent-meta">
							<span><?php echo esc_html__(get_the_time('d'));?> <?php echo esc_html__(get_the_time('F'));?> <?php echo esc_html__(get_the_time('Y'));?></span>
						 </div>
						 <h3 class="recent-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
					  </div>
				   </li>
			   <?php endwhile; endif; ?>
			</ul>
		</div>
		<?php
		echo $args['after_widget'];
	}

	

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['recent_post_title'] = ( ! empty( $new_instance['recent_post_title'] ) ) ? strip_tags( $new_instance['recent_post_title'] ) : '';

		return $instance;
	}

} // class Newest_recent_post_widget

// register register_recent_post widget
function register_recent_post_widget() {
    register_widget( 'Newest_recent_post_widget' );
}
add_action( 'widgets_init', 'register_recent_post_widget' );




