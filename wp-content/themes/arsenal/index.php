<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme ( the other being style.css ).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsenal
 */

get_header();
?>

<main id='primary' class='site-main'>
	<div class="container">
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
					<div class="services-img"><?php the_post_thumbnail(); ?></div>
					<div class="services-card-wrapper">
						<div class="services-title"><?php the_title(); ?></div>
						<a class="button" href='<?php the_permalink(); ?>'>Подробнее</a>
					</div>
				</div>
			<?php
			}
			?>
		</div>

		<div class="main-blue-card">
			<div class="main-blue-card-title">
				Специальное предложение
			</div>
			
			<div class="main-blue-card-info">
				Для магазинов и ресторанов расположенных на 1-х этажах:
				при заключении договора на регулярное мытье витрин, скидка до 30% от прайс-листа
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php
// get_sidebar();
// get_footer();
