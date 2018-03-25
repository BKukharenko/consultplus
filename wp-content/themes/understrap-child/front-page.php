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
				case 'featured_projects_section' :
					get_template_part('page-templates/modules/featured-projects-section');
					break;
				case 'testimonials_section' :
					get_template_part('page-templates/modules/testimonials-section');
					break;
				case 'our_blog_section' :
					get_template_part('page-templates/modules/our-blog-section');
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

