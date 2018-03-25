<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<?php
$page_id = "20"; //example

if ( has_post_thumbnail( $page_id ) ):
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'full' );
endif;

$image_URI = $image[0];
?>
<section class="our-blog-section">
    <div class="container-fluid">
        <div class="row our-blog-content-wrapper">
            <div class="blog-posts col-4 offset-2">
                <div class="row no-gutters section-heading-wrapper py-4">
                    <div class="our-blog-heading">
                        <span class="text-above-heading text-uppercase"><?= get_sub_field( 'text_above_main_heading' ); ?></span>
                        <h2 class="section-heading text-uppercase"><?= get_sub_field( 'main_heading' ); ?></h2>
                    </div>
                    <div class="our-blog-buttons d-flex text-uppercase align-items-end ml-3">
                        <a class="blog-section-link" href="#">
							<?= get_sub_field( 'top_posts_button_text' ); ?>
                        </a>
                        <a class="blog-section-link ml-3" href="<?= get_permalink( get_option( 'page_for_posts' ) ); ?>">
							<?= get_sub_field( 'check_all_posts_button_text' ); ?>
                        </a>
                    </div>
                </div>
                <div class="recent-posts">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
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
							'suppress_filters' => true,
							'tax_query'        => array(
								array(
									'taxonomy' => 'post_format',
									'field'    => 'slug',
									'terms'    => 'post - format - audio',
									'operator' => 'NOT IN'
								),
								array(
									'taxonomy' => 'post_format',
									'field'    => 'slug',
									'terms'    => 'post - format - quote',
									'operator' => 'NOT IN'
								)
							)
						);

						$recent_posts = wp_get_recent_posts( $args ); ?>
                        <ul class="recent-posts-list pl-0 mt-5 mb-0">
							<?php foreach ( $recent_posts as $recent_post ) {
								setup_postdata( $recent_post );
								$archive_year  = get_the_time('Y');
								$archive_month = get_the_time('m');
								$archive_day   = get_the_time('d'); ?>
                                <li class="recent-post mb-5">
                                    <a class="date-link" href="<?= get_day_link($archive_year, $archive_month, $archive_day); ?>">
                                    <time class="recent-post-date text-uppercase"
                                          datetime="<?= get_the_date( 'Y-m-d' ); ?>"> <?= get_the_time( 'F d,Y' ); ?></time>
                                    </a>
                                    <a href="<?= get_permalink( $recent_post["ID"] ) ?>" class="recent-post-link">
                                        <h3 class="recent-post-header text-uppercase"><?= $recent_post['post_title'] ?></h3>
                                    </a>
                                    <p class="recent-post-excerpt mt-3"><?= $recent_post['post_excerpt']; ?></p>
                                </li>
							<?php }
							wp_reset_query();
							wp_reset_postdata(); ?>
                        </ul>
					<?php endwhile; else: ?>
					<?php endif; ?>
                </div>
            </div>
            <div class="blog-image col-md-6">
	            <img class="blog-img img-fluid" src="<?= $image_URI;?>">
            </div>
        </div>

    </div>
</section>