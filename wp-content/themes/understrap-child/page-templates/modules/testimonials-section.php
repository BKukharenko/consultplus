<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section class="testimonials-section py-5">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
        <div class="section-heading-wrapper testimonials-heading pt-4">
            <span class="text-above-heading text-uppercase"><?= get_sub_field( 'text_above_main_heading' ); ?></span>
            <h2 class="section-heading text-uppercase"><?= get_sub_field( 'main_heading' ); ?></h2>
        </div>
		<?php
		$args      = array(
			'post_type' => 'testimonials',
		);
		$the_query = new WP_Query( $args );

		if ( $the_query->have_posts() ) { ?>
            <ul class="quotes-slider pl-0">
				<?php
				while ( $the_query->have_posts() ) {
					$the_query->the_post(); ?>
                    <li class="quote">
						<?php the_content(); ?>
                    </li>
					<?php
				}
				?>
            </ul>
			<?php
			/* Restore original Post Data */
			wp_reset_postdata();
		} else {
			// no posts found
		}
		//Clients slider
		if ( $the_query->have_posts() ) { ?>
            <ul class="clients-slider">
				<?php
				while ( $the_query->have_posts() ) {
					$the_query->the_post(); ?>
                    <li class="client d-flex align-items-center">
                        <div class="img-wrapper">
						<?php the_post_thumbnail(); ?>
                        </div>
                        <div class="client-data d-flex flex-column ml-4">
                        <span class="client-name text-uppercase"><?php the_title(); ?> </span>
                        <span class="client-opinion"><?= get_field('client_opinion')?></span>
                        </div>
                    </li>
					<?php
				}
				?>
            </ul>
			<?php
			/* Restore original Post Data */
			wp_reset_postdata();
		} else {
			// no posts found
		}
		?>
    </div>
</section>