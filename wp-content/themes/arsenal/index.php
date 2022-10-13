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
	<div class="section">
		<div class="container">
			<div class="main">
				<div class="main-wrapper">
					<div class="main-title">Доверьтесь профессионалам!</div>
					<div class="main-subtitle">Профессиональные клининговые услуги в Москве и ближайшем Подмосковье</div>
					<button class="button button-call">Обратный звонок</button>
				</div>
				<div class="main-img">
					<img src="<?php echo get_template_directory_uri() ?>/img/main.png" alt="ARSENAL Cleaning">
				</div>
			</div>
		</div>
	</div>

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
						Клиентский подход</div>
					</img>
				</div>
			</div>
	</section>

	<section class="section about">
		<div class="container">
			<?php $page = get_page_by_path('main');
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
						<h2 class="section-title">О компании</h2>
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

	<section class="section">
		<div class="container">
			<h2 class="section-title">Плюсы Arsenal Cleaning</h2>
			<div class="pluses-wrapper">
				<div class="pluses-wrapper-line">
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number red">1</div>
						<div class="pluses-wrapper-item-text">Уборка любой сложности</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number orange">2</div>
						<div class="pluses-wrapper-item-text">Выгодные скидки для клиентов по договору</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number green">3</div>
						<div class="pluses-wrapper-item-text">Высокий профессионализм сотрудников</div>
					</div>
				</div>
				<div class="pluses-wrapper-line">
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number purple">4</div>
						<div class="pluses-wrapper-item-text">Заказ клининговых услуг прямо на сайте</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number blue">5</div>
						<div class="pluses-wrapper-item-text">Работа в круглосуточном режиме</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number pink">6</div>
						<div class="pluses-wrapper-item-text">Безопасные и эффективные чистящие средства</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="form">
				<div class="form-wrapper">
					<h2 class="form-title">Оставить заявку</h2>
					<div class="form-content">
						<?php echo do_shortcode('[contact-form-7 id="124" title="Contact form 1"]'); ?>
					</div>
				</div>
				<div class="form-right">
					<h2 class="form-title form-title-blue">Контакты</h2>

					<div class="form-right-wrapper">
						<div class="form-right-wrapper-main">Если ищете исполнителя для <strong>регулярной</strong> профессиональной уборки коммерческих объектов – <strong>выгодно</strong> заключить договор!
							Подписавшим соглашение клиентам дается <strong>скидка 30 % </strong>на мытье витрин.</div>
						<div class="form-right-wrapper-text">
							<div class="forn-right-subtitle"><strong>График работы</strong></div>
							<div class="forn-right-subtitle">офиса: 10.00 - 19.00</div>
							<div class="forn-right-subtitle">cотрудников: круглосуточно</div>
						</div>
						<div class="form-right-wrapper-text">
							<div class="forn-right-subtitle"><strong>+7 (495) 625-15-80</strong></div>
							<div class="forn-right-subtitle"><strong>+7 (495) 790-20-22</strong></div>
						</div>
						<div class="form-right-wrapper-text">
							<div class="forn-right-subtitle"><strong>Электронная почта:</strong></div>
							<div class="forn-right-subtitle">citi@citicleaning.ru</div>
						</div>
						<div class="form-right-wrapper-text">
							<div class="form-right-link">
								<img src="<?php echo get_template_directory_uri() ?>/img/instagram.svg" alt="">
								<img src="<?php echo get_template_directory_uri() ?>/img/vk.svg" alt="">
							</div>
						</div>
					</div>

					<div class="form-right-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/form-img.png" alt="">
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
	</section>

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
