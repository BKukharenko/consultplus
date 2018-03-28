<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section class="about-us-section py-5">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1"> <!-- Ты делаешь контейнер и тут же убираешь его паддинги. Это не правильно ?>
        <div class="row about-us-content-wrapper">
            <div class="col-md-6 about-us-text">
                <div class="section-heading-wrapper py-4 text-right">
                    <span class="text-above-heading text-uppercase"><?= get_sub_field( 'text_above_main_heading' ); ?></span>
                    <h2 class="section-heading text-uppercase"><?= get_sub_field( 'main_heading' ); ?></h2>
                </div>
                <div class="about-us-description d-flex flex-column">
                <p class="about-us-excerpt text-right mt-0"><?= get_sub_field('excerpt');?></p>
                <a class="about-us-link button ml-auto mt-4" href="#"><?= get_sub_field('text_on_button');?></a><!-- отступы -->
                </div>
            </div>
            <div class="col-md-6 about-us-image d-flex">
                <img class="my-auto about-us-img" src="<?= get_sub_field('about_us_image');?>" alt="About Us Image">
            </div>
            <div class="medal-border">
                    <div class="content-wrapper text-center">
                        <img src="<?= get_sub_field('badge_icon');?>" alt="Badge Icon">
                        <h1 class="years-heading pt-5">25</h1>
                        <span class="years-text text-uppercase"><?= __('year of excellence');?></span>
                    </div>
            </div>
        </div>
    </div>
</section>
