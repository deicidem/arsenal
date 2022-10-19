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
	<?php
	while (have_posts()) :
		the_post();
	?>
		<div class="container"><?php echo do_shortcode("[breadcrumb]"); ?></div>

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

		<section class="section services">
			<div class="container">
				<h2 class="section-title">Услуги</h2>
				<div class="services-cards">
					<?php
					global $post;
					// параметры по умолчанию
					$children = get_children([
						'post_parent' => get_the_ID(),
						'post_type' => 'page'
					]);

					foreach ($children as $post) {
						setup_postdata($post);
					?>
						<a href="<?php the_permalink(); ?>" class="services-card">
							<div class="services-card__circle">
								<!-- <img src="<?php echo get_the_post_thumbnail_url(); ?>"> -->
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

		<section class="section features">
			<div class="container">
				<h2 class="section-title">Выбирайте нас</h2>
				<div class="features-wrapper">
					<div class="features-card features-card_large">
						<img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" class="features-card__image">
						<div class="features-card__title">
							Круглосуточное обслуживание заказчиков</div>
						</img>
					</div>
					<div class="features-card features-card_large">
						<img src="<?php echo get_template_directory_uri() ?>/img/material.svg" class="features-card__image">
						<div class="features-card__title">
							Использование безопасной клининговой химии</div>
						</img>
					</div>
					<div class="features-card features-card_large">
						<img src="<?php echo get_template_directory_uri() ?>/img/sale.svg" class="features-card__image">
						<div class="features-card__title">
							Скидки на услуги для постоянных клиентов</div>
						</img>
					</div>
				</div>
		</section>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<section class="section page-section">
				<div class="container">
					<h2 class="section-title"><?php the_title() ?></h2>
					<?php the_content() ?>
				</div>
			</section>
		</article><!-- #post-<?php the_ID(); ?> -->

		<section class="section">
			<div class="container">
				<h2 class="section-title">Клининг по шагам</h2>
				<div class="pluses-wrapper">
					<div class="pluses-wrapper-line">
						<div class="pluses-wrapper-item">
							<div class="pluses-wrapper-item-number red">1</div>
							<div class="pluses-wrapper-item-text">Анализ объекта и оценка фронта работ.</div>
						</div>
						<div class="pluses-wrapper-item">
							<div class="pluses-wrapper-item-number orange">2</div>
							<div class="pluses-wrapper-item-text">Сборка крупного строительного мусора и мелких и сыпучих отходов.</div>
						</div>
						<div class="pluses-wrapper-item">
							<div class="pluses-wrapper-item-number green">3</div>
							<div class="pluses-wrapper-item-text">Удаление пыли на потолках, стенках и полах.</div>
						</div>
					</div>
					<div class="pluses-wrapper-line">
						<div class="pluses-wrapper-item">
							<div class="pluses-wrapper-item-number purple">4</div>
							<div class="pluses-wrapper-item-text">Уборка сопровождается чисткой мебели при необходимости.</div>
						</div>
						<div class="pluses-wrapper-item">
							<div class="pluses-wrapper-item-number blue">5</div>
							<div class="pluses-wrapper-item-text">Когда помещения полностью убраны, переходят к мойке оконных конструкций.</div>
						</div>
						<div class="pluses-wrapper-item">
							<div class="pluses-wrapper-item-number pink">6</div>
							<div class="pluses-wrapper-item-text">Мытье наружных частей зданий и уборка прилегающей территории.</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php
	endwhile; // End of the loop.
	?>

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
							<div class="forn-right-subtitle"><strong>Телефон:</strong></div>
							<a class="header-branding__contacts__phone" href="tel:84956251580">+7 (495) 625-15-80</a>
							<a class="header-branding__contacts__phone" href="tel:84957902022">+7 (495) 790-20-22</a>
						</div>
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
					<div class="form-right-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/form-img.png" alt="">
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
		</div>
	</section>
</main><!-- #main -->



<?php
get_footer();
