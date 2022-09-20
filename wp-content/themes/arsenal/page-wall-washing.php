<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsenal
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="section">
		<div class="container">
			<div class="main-blue-card">
				<div class="main-blue-card__title">
					Профессиональная мойка стен
				</div>
				<div class="main-blue-card__info">
					Требуется мойка стен в квартире, после которой на обоях, плитке, вагонке или деревянных панелях не останется следов грязи и пыли? Обращайтесь в ARSENAL Cleaning! Компания оказывает профессиональные услуги по чистке стенных поверхностей, как внутри, так и снаружи зданий. Работы выполняются высококвалифицированными клинерами в удобное для заказчика время.
				</div>
			</div>
		</div>
	</section>

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'page');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
