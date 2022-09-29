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
<div class="container"><?php echo do_shortcode("[breadcrumb]"); ?></div>
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
					<a href="<?php the_permalink(); ?>" class="services-card">
						<div class="services-card__img">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>

						<div class="services-card__content">
							<div class="services-card__title"><?php the_title(); ?></div>
						</div>
					</a>
				<?php
				}
				wp_reset_postdata();
				?>
			</div>
	</div>
</section>


</main><!-- #main -->

<?php
get_footer();
