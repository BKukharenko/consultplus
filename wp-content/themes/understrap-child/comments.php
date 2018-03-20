<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package understrap
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
<div class="row no-gutters">
    <div class="comments-area col-md-8 mr-auto py-5" id="comments">

		<?php // You can start editing here -- including this comment! ?>

		<?php if ( have_comments() ) : ?>
            <span class="d-block text-uppercase text-uppercase"><?= __( 'Visitors', 'understrap' ) ?></span>
            <h3 class="article-section-header d-inline-block text-uppercase"><?= __( 'Comments', 'understrap' ); ?></h3><!-- .comments-title -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through. ?>

                <nav class="comment-navigation" id="comment-nav-above">

                    <h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'understrap' ); ?></h1>

					<?php if ( get_previous_comments_link() ) { ?>
                        <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments',
								'understrap' ) ); ?></div>
					<?php }
					if ( get_next_comments_link() ) { ?>
                        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;',
								'understrap' ) ); ?></div>
					<?php } ?>

                </nav><!-- #comment-nav-above -->

			<?php endif; // check for comment navigation. ?>

            <ul class="comment-list">

				<?php
				wp_list_comments( array(
					'type'        => 'comment',
					'callback'    => 'custom_comment',
					'style'       => 'ul',
					'short_ping'  => true,
					'avatar_size' => 512,
					'reply_text'  => 'reply'
				) );
				?>

            </ul><!-- .comment-list -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through. ?>

                <nav class="comment-navigation" id="comment-nav-below">

                    <h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'understrap' ); ?></h1>

					<?php if ( get_previous_comments_link() ) { ?>
                        <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments',
								'understrap' ) ); ?></div>
					<?php }
					if ( get_next_comments_link() ) { ?>
                        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;',
								'understrap' ) ); ?></div>
					<?php } ?>

                </nav><!-- #comment-nav-below -->

			<?php endif; // check for comment navigation. ?>

		<?php endif; // endif have_comments(). ?>

		<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
			?>

            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'understrap' ); ?></p>

		<?php endif; ?>

    </div><!-- #comments -->
</div>
