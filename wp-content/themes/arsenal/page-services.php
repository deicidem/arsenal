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
<section class="section services">
	<div class="container">
		<h2 class="section-title">Услуги</h2>
		<div class="services-cards">
			<?php
			global $post;
			// параметры по умолчанию
			$page = get_page_by_path('services');
			$children = get_children([
				'post_parent' => $page->ID,
				'post_type' => 'page'
			]);

			foreach ($children as $post) {
				setup_postdata($post);
			?>
				<div class="services-card">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="services-card__img">

					<div class="services-card__content">
						<div class="services-card__title"><?php the_title(); ?></div>
					</div>
				</div>
			<?php
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>

<main id="primary" class="site-main">
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
