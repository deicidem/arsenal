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

		get_template_part('template-parts/content', 'page');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

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
</main><!-- #main -->

<?php
get_footer();
