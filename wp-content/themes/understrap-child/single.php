<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper pt-0" id="single-wrapper">

    <div class="banner">
        <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
            <h1 class="banner-header text-uppercase pl-3"><?= __( 'Blog Post', 'understrap' ); ?></h1>
        </div>
    </div>

    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
        <span class="d-block text-uppercase mt-5"><?= __( 'Our', 'understrap' ); ?></span>
        <h2 class="blog-page-header d-inline-block text-uppercase"><?= __( 'Blog Post', 'understrap' ); ?></h2>
        <div class="row content-wrapper">
            <article class="site-main main-content col-lg-8 single-post">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="post-thumbnail">
						<?php
						the_post_thumbnail(); ?>
                        <div class="post-heading">
                            <time class="post-time text-uppercase"
                                  datetime="<?php the_date( 'Y-m-d' ); ?>"> <?= get_the_time( 'd-M-Y' ); ?></time>
                            <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h1>
                        </div>
                    </div>
                    <div class="content-wrapper">
						<?php the_content(); ?>
                        <div class="no-gutters text-uppercase post-share-text row align-items-center justify-content-end mt-5"><span class="share-text"><?= __( 'Share:', 'understrap' )?></span>
                            <ul class="list-inline my-auto share-list">
                                <li class="list-inline-item"><a class="share" href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a class="share" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="share" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                            <i class="my-auto fa fa-share-alt"></i>
                        </div>
                    </div>
                    <section class="related-posts text-left">
                        <h3 class="article-section-header d-inline-block text-uppercase"><?= __( 'Related Posts', 'understrap' ); ?></h3>

						<?php
						$args = array(
							'numberposts'      => 3,
							'offset'           => 0,
							'category'         => 0,
							'orderby'          => 'post_date',
							'order'            => 'DESC',
							'include'          => '',
							'exclude'          => '',
							'meta_key'         => '',
							'meta_value'       => '',
							'post_type'        => 'post',
							'post_status'      => 'publish',
							'post__not_in'     => array( get_the_ID() ), //Remove current post from recent posts list
							'suppress_filters' => true,
                            'tax_query' => array(
							array(
								'taxonomy' => 'post_format',
								'field' => 'slug',
								'terms' => 'post-format-audio',
								'operator' => 'NOT IN'
							),
							array(
								'taxonomy' => 'post_format',
								'field' => 'slug',
								'terms' => 'post-format-quote',
								'operator' => 'NOT IN'
							)
						));

						$recent_posts = wp_get_recent_posts( $args ); ?>
                        <ul class="row related-posts-list">
							<?php foreach ( $recent_posts as $recent_post ) { ?>
                                <li class="col-sm-6 col-md-4">
									<?php
									echo get_the_post_thumbnail( $recent_post["ID"] );
									?>
                                    <a href="<?= get_permalink( $recent_post["ID"] ) ?>" class="related-post-link">
                                        <h4 class="related-post-header mt-4"><?= $recent_post['post_title'] ?></h4>
                                    </a>
                                    <time class="post-time text-uppercase"
                                          datetime="<?php echo date( 'Y-m-d', strtotime( $recent_post['post_date'] ) ); ?>"> <?php echo date( 'd-M-Y', strtotime( $recent_post['post_date'] ) ); ?></time>
                                </li>
							<?php } ?>
                        </ul>
                    </section>
				<?php endwhile; else: ?>
				<?php endif; ?>
            </article>

            <aside class="sidebar col-lg-4">
				<?php dynamic_sidebar( 'right-sidebar' ); ?>
            </aside>
	        <?php
	        if ( comments_open() || get_comments_number() ) :
		        comments_template();
	        endif;
	        ?>
        </div>


    </div><!-- Container end -->

    <section class="leave-comments mt-5">
        <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
		<?php comment_form(); // Render comments form. ?>
        </div>
    </section>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
