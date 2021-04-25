<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'newest' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'newest'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>

		<ul class="comment-list">
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 100,
						'callback' => 'newest_comment'
					)
				);
			?>
		</ul>

		<?php
		the_comments_pagination(
			array(
				'prev_text' => __( 'Previous' , 'newest' ) ,
				'next_text' => __( 'Next' , 'newest' ),
			)
		);

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'newest' ); ?></p>
		<?php
	endif;
	?>

</div><!-- #comments -->



<div class="comment-form-area mb-30">
	<h4 class="comment-title mb-25"><?php _e('Leave a Comment','newest')?></h4>
	<div class="row">
		<?php
			$newest_comment_fields = array();
			$newest_name_field_placeholder = __('Enter Name','newest');
			$newest_email_field_placeholder = __('Enter Email','newest');
			$newest_comment_field_placeholder = __('Enter Comment','newest');

			
		$newest_comment_fields['author'] = <<<EOD
			<div class="col-xl-6">
				<div class="comment-form-box mb-40">
					<input type="text" name="name" id="name" placeholder="{$newest_name_field_placeholder}">
				</div>
			</div>
EOD;
		
		$newest_comment_fields['email'] = <<<EOD
			<div class="col-xl-6">
				<div class="comment-form-box mb-40">
					<input type="text" name="email" id="email" placeholder="{$newest_email_field_placeholder}">
				</div>
			</div>
EOD;
		
		$newest_message_field = <<<EOD
			<div class="col-xl-12">
				<div class="comment-form-box mb-40">
					<textarea name="message" id="message" cols="30" rows="10" placeholder="{$newest_comment_field_placeholder}"></textarea>
				</div>
			</div>
EOD;
		
		$newest_comment_submit_button = <<<EOD
			<div class="col-xl-12">
				<button type="submit" class="btn blue-gradient-bg">Submit now</button>
			</div>
EOD;
		
		$newest_comment_form_arguments = array(
			'fields' => $newest_comment_fields,
			'comment_field' => $newest_message_field,
			'submit_button' => $newest_comment_submit_button,
			'class_form' => 'comment-form-area',
			'comment_notes_before' => '<p></p>',
			'title_reply' => ''
		);
		
		comment_form($newest_comment_form_arguments);
		
		?>
		
	</div>
</div>