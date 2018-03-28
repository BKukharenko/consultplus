<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section class="contact-us-section py-5">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
        <div class="section-heading-wrapper py-4">
            <span class="text-above-heading text-uppercase"><?= get_sub_field( 'text_above_main_heading' ); ?></span>
            <h2 class="section-heading text-uppercase"><?= get_sub_field( 'main_heading' ); ?></h2>
        </div>
        <ul class="contacts-list row pl-0 justify-content-between">
            <li class="contact-list-item d-flex"> <!-- это бы все в цикле прогонять -->
                <i class="fa fa-envelope"></i>
                <div class="email-wrapper d-flex flex-column pl-4 mt-1">
                    <span class="contact-item-text text-uppercase"><?= __('Email', 'understrap');?></span><!-- Весь текст должен быть в админке -->
                    <a class="contact-link mt-2" href="mailto:<?= get_sub_field('email')?>"><?= get_sub_field('email')?></a>
                </div>
            </li>
            <li class="contact-list-item call-us-item d-flex">
                <i class="fa fa-phone"></i>
                <div class="phone-wrapper d-flex flex-column pl-4 mt-1">
                    <span class="contact-item-text text-uppercase"><?= __('Call Us', 'understrap');?></span>
                    <a class="contact-link mt-2" href="tel:<?= get_sub_field('link_number')?>"><?= get_sub_field('text_number')?></a>
                </div>
            </li>
            <li class="contact-list-item career-item d-flex">
                <i class="fa fa-briefcase"></i>
                <div class="phone-wrapper d-flex flex-column pl-4 mt-1">
                    <span class="contact-item-text text-uppercase"><?= __('Career', 'understrap');?></span>
                    <a class="contact-link mt-2" href="mailto:<?= get_sub_field('career_email')?>"><?= get_sub_field('career_email')?></a>
                </div>
            </li>
        </ul>
    </div>
</section>
