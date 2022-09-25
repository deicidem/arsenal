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
					Профессиональная мойка стен
				</div>
				<div class="main-blue-card__info">
					Требуется мойка стен в квартире, после которой на обоях, плитке, вагонке или деревянных панелях не останется следов грязи и пыли? Обращайтесь в ARSENAL Cleaning! Компания оказывает профессиональные услуги по чистке стенных поверхностей, как внутри, так и снаружи зданий. Работы выполняются высококвалифицированными клинерами в удобное для заказчика время.
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
			<h2 class="section-title">Плюсы Arsenal Cleaning</h2>
			<div class="pluses-wrapper">
				<div class="pluses-wrapper-line">
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number red">1</div>
						<div class="pluses-wrapper-item-text">Уборка любой сложности</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number orange">2</div>
						<div class="pluses-wrapper-item-text">Большой опыт работы на рынке клининга Москвы и ближайшего Подмосковья</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number green">3</div>
						<div class="pluses-wrapper-item-text">Срочный выезд клинеров в любое время дня и ночи</div>
					</div>
				</div>
				<div class="pluses-wrapper-line">
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number purple">4</div>
						<div class="pluses-wrapper-item-text">Использование экологически безопасных биоразлагаемых моющих средств</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number blue">5</div>
						<div class="pluses-wrapper-item-text">Прием оплаты за услуги по наличному или безналичному расчету</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number pink">6</div>
						<div class="pluses-wrapper-item-text">Мощное, современное и многофункциональное клининговое оборудование</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
