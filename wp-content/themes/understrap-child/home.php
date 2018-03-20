<?php
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper pt-0" id="single-wrapper">
    <div class="banner">
        <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
            <h1 class="banner-header text-uppercase pl-3"><?= __( 'Blog', 'understrap' ); ?></h1>
        </div>
    </div>

    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">

        <div class="row content-wrapper">
            <main class="site-main main-content col-lg-8 mt-5" id="main">
                <span class="d-block text-uppercase"><?= __( 'Our', 'understrap' ); ?></span>
                <h2 class="blog-page-header d-inline-block text-uppercase"><?= __( 'Blog', 'understrap' ); ?></h2>
                <div class="row no-gutters">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php
						if ( has_post_format('audio') ) {
							?>
                            <article class="article audio mb-4">
								<?php the_content();
								the_excerpt();?>
                            </article>
							<?php
						} else if (has_post_format('quote')) {
						    ?>
                            <article class="article quote mb-4">
								<?php the_excerpt();?>
                            </article>
                            <?php
                        } else {
						?>
                        <article class="article mb-4">
							<?php
							the_post_thumbnail(); ?>
                            <div class="post-heading">
                                <time class="post-time text-uppercase"
                                      datetime="<?php the_date( 'Y-m-d' ); ?>"> <?= get_the_time( 'd-M-Y' ); ?></time>
                                <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h1>
                            </div>
							<?php the_excerpt(); ?>
                        </article>
                        <?php } ?>
					<?php endwhile;?>
                        <div class="pagination mb-5">
                            <div class="next"><?php next_posts_link('Next');?></div>
                            <div class="prev"><?php previous_posts_link('Previous');?></div>
                        </div>
                    <?php
					else: ?>
					<?php endif; ?>
                </div>
            </main><!-- #main -->

            <aside class="sidebar col-lg-4 mt-5">
				<?php dynamic_sidebar( 'right-sidebar' ); ?>
            </aside>
        </div>


    </div><!-- Container end -->

</div><!-- Wrapper end -->


<?php
get_footer();
?>
