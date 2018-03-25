<?php
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );

	// Removes the parent themes stylesheet and scripts from inc/enqueue.php
}

add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
	if (is_front_page()) {
		wp_enqueue_style( 'slick-styles', get_stylesheet_directory_uri() . '/libs/slick.css', array(), $the_theme->get( 'Version' ), false );
		wp_enqueue_style( 'slick-theme-styles', get_stylesheet_directory_uri() . '/libs/slick-theme.css', array(), $the_theme->get( 'Version' ), false );
		wp_enqueue_script( 'slick-scripts', get_stylesheet_directory_uri() . '/libs/slick.min.js', array(), $the_theme->get( 'Version' ), true );
    }
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

require_once( 'inc/customizer.php' );

//Include child-theme widgets.php
require_once( 'inc/widgets.php' );

require_once( 'inc/setup.php' );
require_once( 'inc/taxonomy.php' );
require_once( 'inc/custom-post-type.php' );

//Show empty tags in right sidebar on Blog and Pages
add_filter( 'get_terms_args', 'show_empty_tags' );

function show_empty_tags( $args ) {
	$args['hide_empty'] = 0;

	return $args;
}

add_action( 'after_setup_theme', 'childtheme_formats', 11 );
function childtheme_formats() {
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'audio', 'video' ) );
}

require_once( 'inc/custom-comments.php' );

//Creating custom markup for comment
function custom_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; ?>

    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	    <?php if ( $comment->comment_approved == '0' ) : ?>
            <em><?php _e( 'Your comment is awaiting moderation.' ) ?></em>
	    <?php endif; ?>
        <article class="d-flex comment-article">
				<?= get_avatar( $comment ); ?>
            <div class="comment pl-4">
                <h4 class="comment-author text-uppercase d-flex">
                    <a class="author-link my-auto" href="<?php comment_author_link( $comment ); ?>">
						<?php
						if ( $comment->user_id != '0' ) {
							echo get_user_meta( $comment->user_id, 'nickname', true );
						} else {
							echo get_comment_author_link();
						}
						?>
                    </a>
                    <span class="button reply-btn ml-auto">
                        <?php
						comment_reply_link( array_merge( $args, array( 'depth'     => $depth,
						                                               'max_depth' => $args['max_depth']
						) ) );
						?>
					</span>
                </h4>
                <p> <?= get_comment_text( $comment ); ?></p>
            </div>
        </article>
    </li>
<?php }

//Function to get taxonomy archive link
function get_taxonomy_archive_link( $taxonomy ) {
	$tax = get_taxonomy( $taxonomy ) ;
	return get_bloginfo( 'url' ) . '/' . $tax->rewrite['slug'];
}
?>



