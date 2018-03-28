<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section class="industry-section pt-5">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
        <div class="row">
            <div class="industries col-md-5">
                <div class="section-heading-wrapper py-4 px-2">
                    <span class="text-above-heading text-uppercase"><?= get_sub_field( 'text_above_main_heading' ); ?></span><!-- Правильно было бы сначала проверять наличие и заполненость данного поля и только потом выводить его обертку и содержание -->
                    <h2 class="section-heading text-uppercase"><?= get_sub_field( 'main_heading' ); ?></h2>
                </div>
                <div class="industries-taxonomy row no-gutters"><!-- это же список  -->
                    <div class="education d-flex flex-column col-md-6 p-4"> <!-- тут надо в цикле выводить первых 5 термов таксономии (или первых 5 фичед термов) а не вручную перечислять их  -->
                        <i class="fa fa-book mb-2 term-icon"></i>
						<?php
						$education_term = get_term_by( 'slug', 'education', 'industry' );
						?>
                        <div class="d-flex no-gutters">
                            <a class="text-uppercase my-auto term-link"
                               href="<?= $education_term->slug; ?>"><?= $education_term->name; ?> </a>
                            <i class="fa fa-angle-right ml-auto mr-3 border"></i>
                        </div>
                    </div>
                    <div class="business d-flex flex-column col-md-6 p-4">
                        <i class="fa fa-briefcase mb-2 term-icon"></i>
	                    <?php
	                    $business_term = get_term_by( 'slug', 'business', 'industry' );
	                    ?>
                        <div class="d-flex no-gutters">
                            <a class="text-uppercase my-auto term-link"
                               href="<?= $business_term->slug; ?>"><?= $business_term->name; ?> </a>
                            <i class="fa fa-angle-right ml-auto mr-3 border"></i>
                        </div>
                    </div>
                    <div class="technology d-flex flex-column col-md-6 p-4">
                        <i class="fa fa-laptop mb-2 term-icon"></i>
	                    <?php
	                    $technology_term = get_term_by( 'slug', 'technology', 'industry' );
	                    ?>
                        <div class="d-flex no-gutters">
                            <a class="text-uppercase my-auto term-link"
                               href="<?= $technology_term->slug; ?>"><?= $technology_term->name; ?> </a>
                            <i class="fa fa-angle-right ml-auto mr-3 border"></i>
                        </div>
                    </div>
                    <div class="real-estate d-flex flex-column col-md-6 p-4">
                        <i class="fa fa-home mb-2 term-icon"></i>
	                    <?php
	                    $real_estate_term = get_term_by( 'slug', 'realestate', 'industry' );
	                    ?>
                        <div class="d-flex no-gutters">
                            <a class="text-uppercase my-auto term-link"
                               href="<?= $real_estate_term->slug; ?>"><?= $real_estate_term->name; ?> </a>
                            <i class="fa fa-angle-right ml-auto mr-3 border"></i>
                        </div>
                    </div>
                    <div class="banking d-flex flex-column col-md-6 p-4">
                        <i class="fa fa-money mb-2 term-icon"></i>
	                    <?php
	                    $banking_term = get_term_by( 'slug', 'banking', 'industry' );
	                    ?>
                        <div class="d-flex no-gutters">
                            <a class="text-uppercase my-auto term-link"
                               href="<?= $banking_term->slug; ?>"><?= $banking_term->name; ?> </a>
                            <i class="fa fa-angle-right ml-auto mr-3 border"></i>
                        </div>
                    </div>
                    <div class="view-more-btn d-flex text-center mx-auto">
                        <a href="#" class="button my-auto mx-auto">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
