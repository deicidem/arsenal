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
	<section class="section">
		<div class="container">
			<div class="main-blue-card">
				<div class="main-blue-card__title">
					Мойка фасада
				</div>
				<div class="main-blue-card__info">
					Мойка фасада обычно производится 2 раза в год, придает зданию опрятный и ухоженный вид. Мытье – довольно сложный процесс, который отнимает много времени и немало сил, предполагает использование специальных средств. По этой причине для выполнения работ часто привлекаются профессионалы из области клининга.
				</div>
			</div>
		</div>
	</section>

	<?php
	while (have_posts()) :
		the_post();

	?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<section class="section page-section">
				<div class="container">
					<h2 class="section-title"><?php the_title() ?></h2>
					<?php the_content() ?>
				</div>
			</section>
		</article><!-- #post-<?php the_ID(); ?> -->


	<?php
	endwhile; // End of the loop.
	?>


	<section class="section">
		<div class="container">
			<h2 class="section-title">Клининг по шагам</h2>
			<div class="pluses-wrapper">
				<div class="pluses-wrapper-line">
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number red">1</div>
						<div class="pluses-wrapper-item-title">Оценка работ</div>
						<div class="pluses-wrapper-item-text">Очистка фасада начинается с осмотра объекта. Клинеры внимательно изучают поверхность наружной части здания и определяют наиболее трудные для мытья места. Плюс разрабатывают план дальнейших действий.</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number orange">2</div>
						<div class="pluses-wrapper-item-title">Удаление грязи</div>
						<div class="pluses-wrapper-item-text">Речь идет о крупных и отвердевших загрязнениях, для устранения которых использование клинингового оборудования часто оказывается неэффективным. Гораздо проще очистить поверхность обыкновенными шпателями.</div>
					</div>
				</div>
				<div class="pluses-wrapper-line">
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number purple">3</div>
						<div class="pluses-wrapper-item-title">Мойка</div>
						<div class="pluses-wrapper-item-text">Мытье фасада проводится водой или моющими средствами. Составы бывают нейтральными, щелочными, кислотными и парфюмированными. Химия подбирается в зависимости от материала отделки.</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number blue">4</div>
						<div class="pluses-wrapper-item-title">Сушка</div>
						<div class="pluses-wrapper-item-text">В этом случае большое значение имеет тип обрабатываемой поверхности. Если обычная штукатурка оставляется сушиться на солнце, то фасады, отделанные плиткой, есть смысл протереть насухо и отполировать.</div>
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
</main><!-- #main -->

<?php
get_footer();
