<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Infinity
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

	<?php // You can start editing here -- including this comment! ?>
	
<h3 id="reply-title-2" class="comment-reply-title">Escreva sua resposta ou comentário:<small><a rel="nofollow" id="cancel-comment-reply-link" href="/sainte-marie/perishable-logistics-cold-chain-on-a-plane/#respond" style="display:none;">Cancelar resposta</a></small></h3>
	
	
	<?php if ( have_comments() ) : ?>
 		<h2 class="comments-title">  
			<?php
			printf( // WPCS: XSS OK.
				esc_html( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'tm_transport' ) ),
				number_format_i18n( get_comments_number() ),
				'<span>' . get_the_title() . '</span>'
			);
			?>
 		</h2>  

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<nav id="comment-nav-above" class="navigation comment-navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'tm_transport' ); ?></h2>

				<div class="nav-links">

					<div
						class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'tm_transport' ) ); ?></div>
					<div
						class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'tm_transport' ) ); ?></div>

				</div>
				<!-- .nav-links -->
			</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'callback'    => 'infinity_comment',
				'short_ping'  => true,
				'avatar_size' => 100
			) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<nav id="comment-nav-below" class="navigation comment-navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'tm_transport' ); ?></h2>

				<div class="nav-links">

					<div
						class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'tm_transport' ) ); ?></div>
					<div
						class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'tm_transport' ) ); ?></div>

				</div>
				<!-- .nav-links -->
			</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'tm_transport' ); ?></p>
	<?php endif; ?>

	<?php
	$commenter     = wp_get_current_commenter();
	$req           = get_option( 'require_name_email' );
	$aria_req      = ( $req ? " aria-required='true'" : '' );
	$fields        = array(
		'author' => '<div class="col-md-4"><p class="comment-form-author">' . '<input id="author" placeholder="' . esc_html__( 'Name *', 'tm_transport' ) . '" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p></div>',
		'email'  => '<div class="col-md-4"><p class="comment-form-email">' . '<input id="email" placeholder="' . esc_html__( 'Email *', 'tm_transport' ) . '" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p></div>',
		'url'    => '<div class="col-md-4"><p class="comment-form-url">' . '<input id="url" placeholder="' . esc_html__( 'Website', 'tm_transport' ) . '" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p></div>',
	);
	$comments_args = array(
		// change the title of send button
		'label_submit'         => 'Submit',
		// change the title of the reply section
		'title_reply'          => 'Write a Reply or Comment',
		// remove "Text or HTML to be displayed after the set of comment fields"
		'comment_notes_after'  => '',
		'comment_notes_before' => '',
		'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
		'comment_field'        => '<div class="col-md-12"><p class="comment-form-comment"><textarea id="comment" placeholder="' . esc_html__( 'Comment *', 'tm_transport' ) . '" name="comment" aria-required="true"></textarea></p></div>',
	);
	comment_form( $comments_args ); ?>

</div><!-- #comments -->


<p class="form-submit2"><input name="submit" type="submit" id="submit" class="submit" value="Enviar"> <input type="hidden" name="comment_post_ID" value="74824" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
</p>