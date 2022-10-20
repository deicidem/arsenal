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

	<section class="section">
		<div class="container">
			<h2 class="section-title">Преимущества Arsenal Cleaning</h2>
			<div class="pluses-wrapper">
				<div class="pluses-wrapper-line">
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number red">1</div>
						<div class="pluses-wrapper-item-text">Безупречная репутация на клининговом рынке столицы</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number orange">2</div>
						<div class="pluses-wrapper-item-text">Профессиональное оборудование</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number green">3</div>
						<div class="pluses-wrapper-item-text">Выгодные цены на уборку любой сложности</div>
					</div>
				</div>
				<div class="pluses-wrapper-line">
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number purple">4</div>
						<div class="pluses-wrapper-item-text">Особые условия для крупных клиентов</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number blue">5</div>
						<div class="pluses-wrapper-item-text">Срочный выезд бригад клинеров</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number pink">6</div>
						<div class="pluses-wrapper-item-text">Опытные специалисты высокой квалификации.</div>
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
							<div class="forn-right-subtitle"><strong>Телефон:</strong></div>
							<a class="header-branding__contacts__phone" href="tel:84956251580">+7 (495) 625-15-80</a>
							<a class="header-branding__contacts__phone" href="tel:84957902022">+7 (495) 790-20-22</a>
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
	</section>

</main><!-- #main -->

<?php
get_footer();
