<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section class="our-steps-section py-5">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
        <div class="section-heading-wrapper py-4">
            <span class="text-above-heading text-uppercase"><?= get_sub_field( 'text_above_main_heading' ); ?></span>
            <h2 class="section-heading text-uppercase"><?= get_sub_field( 'main_heading' ); ?></h2>
        </div>
        <ul class="steps-list row pl-0 justify-content-between">
            <li class="step col-md-4">
                <img class="step-image" src="<?= get_sub_field( 'first_step_image' ); ?>" alt="First Step">
                <div class="step-description-wrapper d-flex flex-column pt-3">
                    <span class="step-number pt-3 pb-1"><?= get_sub_field( 'first_step_number' ); ?></span>
                    <h3 class="step-heading text-uppercase pt-2"><?= get_sub_field( 'first_step_heading' ) ?></h3>
                    <p class="step-description mt-3"><?= get_sub_field( 'first_step_description' ) ?></p>
                </div>
            </li>
            <li class="step col-md-4">
                <img class="step-image mb-2" src="<?= get_sub_field( 'second_step_image' ); ?>" alt="First Step">
                <div class="step-description-wrapper d-flex flex-column">
                    <span class="step-number pt-4 pb-1"><?= get_sub_field( 'second_step_number' ); ?></span>
                    <h3 class="step-heading text-uppercase pt-2"><?= get_sub_field( 'second_step_heading' ) ?></h3>
                    <p class="step-description mt-3"><?= get_sub_field( 'second_step_description' ) ?></p>
                </div>
            </li>
            <li class="step col-md-4">
                <img class="step-image" src="<?= get_sub_field( 'third_step_image' ); ?>" alt="First Step">
                <div class="step-description-wrapper d-flex flex-column">
                    <span class="step-number py-3"><?= get_sub_field( 'third_step_number' ); ?></span>
                    <h3 class="step-heading text-uppercase"><?= get_sub_field( 'third_step_heading' ) ?></h3>
                    <p class="step-description mt-3"><?= get_sub_field( 'third_step_description' ) ?></p>
                </div>
            </li>
        </ul>
    </div>
</section>