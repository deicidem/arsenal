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
					Генеральная уборка после ремонта
				</div>
				<div class="main-blue-card__info">
					Ищете квалифицированных клинеров, так как требуется генеральная уборка после ремонта в Москве или ближайшем Подмосковье? Доверьте проведение работ специалистам ARSENAL Cleaning и устраните проблемы в короткие сроки! Услуги доступны и частным лицам, и коммерческим организациям. Компания убирает офисы, квартиры, магазины, коттеджи, склады, таунхаусы и другие объекты.
				</div>
			</div>
		</div>
	</section>

	<section class="section about">
		<div class="container">
			<?php $page = get_page_by_path('services/cleaning-after-repair');
			$pages = get_pages([
				'include'      => $page->ID,
				'post_type'    => 'page',
				'post_status'  => 'publish',
			]);
			foreach ($pages as $post) {
				setup_postdata($post);
			?>
				<div class="about-wrapper">
					<div class="about-content">
						<h2 class="section-title"><?php the_title() ?></h2>
						<?php the_content() ?>
					</div>
					<img src="<?php echo get_the_post_thumbnail_url() ?>" class="about-image">
				</div>

			<?php
				break;
			}
			wp_reset_postdata();
			?>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
