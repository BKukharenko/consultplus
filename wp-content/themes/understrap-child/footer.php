<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="wrapper-footer">

    <div class="row">

        <div class="col-md-12">

            <footer class="site-footer py-5" id="colophon">
                <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
                    <div class="footer-wrapper row">
                        <div class="col-md-6 mailchimp">
                            <h3 class="footer-label text-uppercase"><?= __( 'News Letter', 'understrap' ); ?></h3>
							<?= do_shortcode( '[mc4wp_form id="24"]' ) ?>
                        </div>
                        <div class="col-md-6 footer-navigations">
                            <div class="row navigations-wrapper justify-content-around">
                                <div class="navigation ">
                                    <h3 class="footer-label text-uppercase"><?= __( 'Navigation', 'understrap' ); ?></h3>
                                    <nav class="footer-menu">
										<?php wp_nav_menu(
											array(
												'theme_location'  => 'secondary',
												'container_class' => '',
												'container_id'    => '',
												'menu_class'      => 'footer-nav flex-column pl-0',
												'fallback_cb'     => '',
												'menu_id'         => 'footer-menu',
												'walker'          => new understrap_WP_Bootstrap_Navwalker(),
											)
										); ?>
                                    </nav>
                                </div>
                                <div class="industry-navigation ">
                                    <h3 class="footer-label text-uppercase text-center"><?= __( 'Industry', 'understrap' ); ?></h3>
                                    <ul class="industry-list pl-4">
										<?php
										$terms = get_terms( array(
											'taxonomy'   => 'industry',
											'hide_empty' => false,
										) );

										foreach ( $terms as $term ) {
											?>
                                            <li class="industry-term"><a href="<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
											<?php
										}
										?>
                                    </ul>
                                </div>
                                <div class="social-links ">
                                    <h3 class="footer-label text-uppercase"><?= __( 'Follow Us', 'understrap' ); ?></h3>
                                    <ul class="social-links-list text-uppercase pl-0">
                                        <li>
                                            <a class="social link" href="<?= get_theme_mod( 'facebook_link' ) ?>">Facebook</a>
                                        </li>
                                        <li>
                                            <a class="social link"
                                               href="<?= get_theme_mod( 'twitter_link' ) ?>">Twitter</a>
                                        </li>
                                        <li>
                                            <a class="social link" href="<?= get_theme_mod( 'instagram_link' ) ?>">Instagram</a>
                                        </li>
                                        <li>
                                            <a class="social link" href="<?= get_theme_mod( 'linkedin_link' ) ?>">Linkedin</a>
                                        </li>
                                        <li>
                                            <a class="social link"
                                               href="<?= get_theme_mod( 'google_link' ) ?>">Google+</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row copyright-wrapper no-gutters">
                        <span class="copyright-symbol">Copyright &copy;</span>
                        <time class="copyright-date px-1" datetime="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></time>
                        <span class="copyright-text"><?= get_theme_mod('copyright_text')?></span>
                    </div>
                </div>
            </footer><!-- #colophon -->

        </div><!--col end -->

    </div><!-- row end -->

</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

