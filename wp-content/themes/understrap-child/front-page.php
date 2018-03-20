<?php
get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper pt-0" id="single-wrapper">

		<?php
		while (have_rows('home_modules')) : the_row();
			switch (get_row_layout()) {
				case 'industry_section' :
					get_template_part('page-templates/modules/industry-section');
					break;
				case 'about_us_section' :
					get_template_part('page-templates/modules/about-us-section');
					break;
				case 'our_steps_section' :
					get_template_part('page-templates/modules/our-steps-section');
					break;
				case 'contact_us_section' :
					get_template_part('page-templates/modules/contact-us-section');
					break;
				default:
					break;
			}
		endwhile;
		?>


</div><!-- Wrapper end -->


<?php
get_footer();
?>

