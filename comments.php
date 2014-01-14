<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to twentytwelve_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<!-- Comments Section -->
<hr />
	<h3>Comments</h3>
<section class="comments-container">
	<?php if ( have_comments() ) : ?>
		
		<hr />
	        <h4><a name="comments"></a>
	        	<?php echo get_comments_number() . ' replies on ' . get_the_title(); ?>
			</h4>

		<ul class="comments-list">
			<?php wp_list_comments( array( 'callback' => 'mytheme_comment', 'style' => 'ul', 'max_depth' => 5, 'avatar_size' => 75 ) ); ?>
		</ul><!-- .comments-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'twentytwelve' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentytwelve' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentytwelve' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>
	<?php endif; // have_comments() ?>

	<hr />

	<?php if ( ! comments_open() ) : ?>
		<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>

	<?php comment_form(); ?>

</section><!--end comments section-->