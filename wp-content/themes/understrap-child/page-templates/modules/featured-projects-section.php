<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section class="featured-projects-section py-5">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
        <div class="section-heading-wrapper py-4">
            <span class="text-above-heading text-uppercase"><?= get_sub_field( 'text_above_main_heading' ); ?></span>
            <h2 class="section-heading text-uppercase"><?= get_sub_field( 'main_heading' ); ?></h2>
        </div>
		<?php
		if ( have_rows( 'relationship' ) ) : ?>
        <div class="row justify-content-center">
			<?php while ( have_rows( 'relationship' ) ) :
			the_row();
			$project_posts = get_sub_field( 'post' );
			?>
			<?php if ( $project_posts ) : ?>

			<?php foreach ( $project_posts as $key => $project_post ) :
			$term_list = wp_get_post_terms( $project_post->ID, 'industry', array( "fields" => "all" ) ); ?>
			<?php if ( $key == 0 ) { ?>
                <div class="col-md-6 left-main-project pl-0 pr-3">
                    <div class="image-wrapper">
						<?php echo get_the_post_thumbnail( $project_post->ID ); ?>
                        <div class="post-taxonomy text-uppercase">
                            <a class="tax-link" href="<?php echo $term_list[0]->slug ?>">
								<?php echo $term_list[0]->name ?></a>
                        </div>
                        <div class="bottom-triangle">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="overlay">
                            <div class="overlay-content d-flex flex-column">
                                <h3 class="project-header text-uppercase mx-auto mt-auto"><?php echo get_the_title( $project_post->ID ); ?></h3>
                                <p class="project-description mt-0 mx-auto mb-auto"><?php echo get_field( 'description', $project_post->ID ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
			<?php } ?>
			<?php if ( $key == 1 ) { ?>
            <div class="col-md-6 right-projects d-flex flex-column">
                <div class="row justify-content-around right-top-projects">
                    <div class="left-project">
                        <div class="image-wrapper">
							<?php echo get_the_post_thumbnail( $project_post->ID ); ?>
                            <div class="post-taxonomy text-uppercase">
                                <a class="tax-link" href="<?php echo $term_list[0]->slug ?>">
									<?php echo $term_list[0]->name ?></a>
                            </div>
                            <div class="bottom-triangle">
                                <i class="fa fa-plus"></i>
                            </div>
                            <div class="overlay">
                                <div class="overlay-content d-flex flex-column">
                                    <h3 class="project-header text-uppercase mx-auto mt-auto"><?php echo get_the_title( $project_post->ID ); ?></h3>
                                    <p class="project-description mt-0 mx-auto mb-auto"><?php echo get_field( 'description', $project_post->ID ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php } ?>
					<?php if ( $key == 2 ) { ?>
                        <div class="right-project">
                            <div class="image-wrapper">
								<?php echo get_the_post_thumbnail( $project_post->ID ); ?>
                                <div class="post-taxonomy text-uppercase">
                                    <a class="tax-link" href="<?php echo $term_list[0]->slug ?>">
										<?php echo $term_list[0]->name ?></a>
                                </div>
                                <div class="bottom-triangle">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content d-flex flex-column">
                                        <h3 class="project-header text-uppercase mx-auto mt-auto"><?php echo get_the_title( $project_post->ID ); ?></h3>
                                        <p class="project-description mt-0 mx-auto mb-auto"><?php echo get_field( 'description', $project_post->ID ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
					<?php } ?>
					<?php if ( $key == 3 ) { ?>
                        <div class="right-bottom-project mx-auto mt-4">
                            <div class="image-wrapper">
								<?php echo get_the_post_thumbnail( $project_post->ID ); ?>
                                <div class="post-taxonomy text-uppercase">
                                    <a class="tax-link" href="<?php echo $term_list[0]->slug ?>">
										<?php echo $term_list[0]->name ?></a>
                                </div>
                                <div class="bottom-triangle">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content d-flex flex-column">
                                        <h3 class="project-header text-uppercase mx-auto mt-auto"><?php echo get_the_title( $project_post->ID ); ?></h3>
                                        <p class="project-description mt-0 mx-auto mb-auto"><?php echo get_field( 'description', $project_post->ID ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
					<?php } ?>
					<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>
					<?php endif; ?>

					<?php endwhile; ?>
					<?php endif; ?>
            </div>
            <a class="button mt-5" href="<?= get_taxonomy_archive_link('industry')?>"><?= __('Full Projects', 'understrap'); ?></a>
        </div>
</section>