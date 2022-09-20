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
					Мытье окон в Москве
				</div>
				<div class="main-blue-card__info">
					Требуется мытье окон в Москве от профессионалов? Воспользуйтесь услугами ARSENAL Cleaning! Опытные клинеры вымоют стекла до зеркального блеска и тщательно очистят от пыли и грязи рамы вместе с подоконниками. На это у специалистов уйдут считанные часы, поскольку уборка пройдет с использованием современной клининговой техники и безопасных чистящих средств.
				</div>
			</div>
		</div>
	</section>

	<section class="section about">
		<div class="container">
			<?php $page = get_page_by_path('services/window-washing');
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
