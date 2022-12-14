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

	<section class="section reviews">
		<div class="container">
			<h2 class="section-title">Отзывы</h2>
			<div class="reviews-wrapper">
				<?php
				$my_posts = get_posts(array(
					'numberposts' => 5,
					'category_name'    => 'reviews',
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					
					'meta_key'    => '',
					'meta_value'  => '',
					'post_type'   => 'post',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				));

				global $post;

				foreach ($my_posts as $post) {
					setup_postdata($post);
				?>
					<div class="reviews-card__wrapper">
						<div class="reviews-card">
							<div class="reviews-card-star-wrapper">
								<div class="reviews-card-star">
									<?php
									for ($i = 0; $i < 5; $i++) {
										if ($i < get_field('rate')) {
									?>
											<img src="<?php echo get_template_directory_uri() ?>/img/star-filled.svg" alt="">
										<?php
										} else {
										?>
											<img src="<?php echo get_template_directory_uri() ?>/img/star-empty.svg" alt="">
									<?php
										}
									}
									?>
								</div>
							</div>
							<div class="reviews-card__header">
								<div class="reviews-card__title"><?php the_title(); ?></div>
							</div>
							<div class="reviews-card__line"></div>
							<div class="reviews-card__text"><?php the_content(); ?></div>
						</div>
					</div>
				<?php
				}

				wp_reset_postdata(); // сброс
				?>

			</div>
		</div>
	</section>

			
	</main><!-- #main -->

<?php
get_footer();
