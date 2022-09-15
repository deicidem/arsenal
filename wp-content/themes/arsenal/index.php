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

	<section class="section">
		<div class="container">
			<div class="main-blue-card">
				<div class="main-blue-card__title">
					Специальное предложение
				</div>
				<div class="main-blue-card__info">
					Для магазинов и ресторанов расположенных на 1-х этажах:
					при заключении договора на регулярное мытье витрин, скидка до 30% от прайс-листа
				</div>
			</div>
		</div>
	</section>

	<section class="section about">
		<div class="container">
			<?php $page = get_page_by_path('about');
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
						<a href="<?php the_permalink() ?>" class="button">Подробнее</a>
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

	<section class="section order">
		<div class="container">
			<?php $page = get_page_by_path('order');
			$pages = get_pages([
				'include'      => $page->ID,
				'post_type'    => 'page',
				'post_status'  => 'publish',
			]);
			foreach ($pages as $post) {
				setup_postdata($post);
			?>
				<div class="order-wrapper">
					<img src="<?php echo get_the_post_thumbnail_url() ?>" class="order-image">
					<div class="order-content">
						<h2 class="section-title"><?php the_title() ?></h2>
						<?php the_content() ?>
						<a href="<?php the_permalink() ?>" class="button">Подробнее</a>
					</div>
				</div>

			<?php
				break;
			}
			wp_reset_postdata();
			?>

		</div>
	</section>

	<section class="section section_blue">
		<div class="container">
			<h2 class="section-title">Плюсы Arsenal Cleaning</h2>
			<div class="pluses-wrapper">
				<div class="pluses-wrapper-column">
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number">1</div>
						<div class="pluses-wrapper-item-text">Уборка любой сложности</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number">2</div>
						<div class="pluses-wrapper-item-text">Выгодные скидки для клиентов по договору</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number">3</div>
						<div class="pluses-wrapper-item-text">Высокий профессионализм сотрудников</div>
					</div>
				</div>
				<div class="pluses-wrapper-column">
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number">4</div>
						<div class="pluses-wrapper-item-text">Заказ клининговых услуг прямо на сайте</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number">5</div>
						<div class="pluses-wrapper-item-text">Работа в круглосуточном режиме</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number">6</div>
						<div class="pluses-wrapper-item-text">Безопасные и эффективные чистящие средства</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section features">
		<div class="container">
			<h2 class="section-title">Выбирайте нас</h2>
			<div class="features-wrapper">
				<div class="features-card">
					<img src="<?php echo get_template_directory_uri() ?>/img/price.svg" class="features-card__image">
					<div class="features-card__title">
						Конкурентоспособные цены</div>
					</img>
				</div>
				<div class="features-card">
					<img src="<?php echo get_template_directory_uri() ?>/img/material.svg" class="features-card__image">
					<div class="features-card__title">
						Профессиональные чистящие средства</div>
					</img>
				</div>
				<div class="features-card">
					<img src="<?php echo get_template_directory_uri() ?>/img/vacuum.svg" class="features-card__image">
					<div class="features-card__title">
						Специализированное оборудование</div>
					</img>
				</div>
				<div class="features-card">
					<img src="<?php echo get_template_directory_uri() ?>/img/client.svg" class="features-card__image">
					<div class="features-card__title">
						Клиентоориентированность</div>
					</img>
				</div>
			</div>
	</section>

	<section class="section reviews">
		<div class="container">
			<h2 class="section-title">Отзывы</h2>
			<div class="reviews-wrapper">
				<div class="reviews-card__wrapper">
					<div class="reviews-card">
						<div class="reviews-card-star-wrapper">
							<div class="reviews-card-star">
								<img src="<?php echo get_template_directory_uri() ?>/img/star.svg" alt="">
								<img src="<?php echo get_template_directory_uri() ?>/img/star.svg" alt="">
								<img src="<?php echo get_template_directory_uri() ?>/img/star.svg" alt="">
								<img src="<?php echo get_template_directory_uri() ?>/img/star.svg" alt="">
								<img src="<?php echo get_template_directory_uri() ?>/img/star.svg" alt="">
							</div>
						</div>
						<div class="reviews-card__header">
							<div class="reviews-card__title">Анна</div>
							<div class="reviews-card__rate"></div>
						</div>
						<div class="reviews-card__line"></div>
						<div class="reviews-card__text">У Марины это был первый заказ уборки. Немного волновалась. Уверенности и опыта нужно набираться. В целом уборкой доволен. Спасибо</div>
					</div>
				</div>
				<div class="reviews-card__wrapper">
					<div class="reviews-card">
						<div class="reviews-card__header">
							<div class="reviews-card__title">Анна</div>
							<div class="reviews-card__rate"></div>
						</div>
						<div class="reviews-card__line"></div>
						<div class="reviews-card__text">У Марины это был первый заказ уборки. Немного волновалась. Уверенности и опыта нужно набираться. В целом уборкой доволен. Спасибо</div>
					</div>
				</div>
				<div class="reviews-card__wrapper">
					<div class="reviews-card">
						<div class="reviews-card__header">
							<div class="reviews-card__title">Анна</div>
							<div class="reviews-card__rate"></div>
						</div>
						<div class="reviews-card__line"></div>
						<div class="reviews-card__text">У Марины это был первый заказ уборки. Немного волновалась. Уверенности и опыта нужно набираться. В целом уборкой доволен. Спасибо</div>
					</div>
				</div>
				<div class="reviews-card__wrapper">
					<div class="reviews-card">
						<div class="reviews-card__header">
							<div class="reviews-card__title">Анна</div>
							<div class="reviews-card__rate"></div>
						</div>
						<div class="reviews-card__line"></div>
						<div class="reviews-card__text">У Марины это был первый заказ уборки. Немного волновалась. Уверенности и опыта нужно набираться. В целом уборкой доволен. Спасибо</div>
					</div>
				</div>
				<div class="reviews-card__wrapper">
					<div class="reviews-card">
						<div class="reviews-card__header">
							<div class="reviews-card__title">Анна</div>
							<div class="reviews-card__rate"></div>
						</div>
						<div class="reviews-card__line"></div>
						<div class="reviews-card__text">У Марины это был первый заказ уборки. Немного волновалась. Уверенности и опыта нужно набираться. В целом уборкой доволен. Спасибо</div>
					</div>
				</div>
				<div class="reviews-card__wrapper">
					<div class="reviews-card">
						<div class="reviews-card__header">
							<div class="reviews-card__title">Анна</div>
							<div class="reviews-card__rate"></div>
						</div>
						<div class="reviews-card__line"></div>
						<div class="reviews-card__text">У Марины это был первый заказ уборки. Немного волновалась. Уверенности и опыта нужно набираться. В целом уборкой доволен. Спасибо</div>
					</div>
				</div>
				<div class="reviews-card__wrapper">
					<div class="reviews-card">
						<div class="reviews-card__header">
							<div class="reviews-card__title">Анна</div>
							<div class="reviews-card__rate"></div>
						</div>
						<div class="reviews-card__line"></div>
						<div class="reviews-card__text">У Марины это был первый заказ уборки. Немного волновалась. Уверенности и опыта нужно набираться. В целом уборкой доволен. Спасибо</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section_blue">
		<div class="container">
			<h2 class="section-title">Клиенты</h2>
			<div class="clients">
				<div class="clients-wrapper">
					<div class="clients-wrapper-item">
						<img src="<?php echo get_template_directory_uri() ?>/img/gazprom-logo.png" alt="">
					</div>
					<div class="clients-wrapper-item">
						<img src="<?php echo get_template_directory_uri() ?>/img/kenguru-logo.png" alt="">
					</div>
					<div class="clients-wrapper-item">
						<img src="<?php echo get_template_directory_uri() ?>/img/ticketland-logo.png" alt="">
					</div>
					<div class="clients-wrapper-item">
						<img src="<?php echo get_template_directory_uri() ?>/img/vgtrk-logo.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
