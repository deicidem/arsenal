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
			<h2 class="section-title">Мойка окон выглядит следующим образом:</h2>
			<div class="pluses-wrapper">
				<div class="pluses-wrapper-line">
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number red">1</div>
						<div class="pluses-wrapper-item-title">Предварительная оценка</div>
						<div class="pluses-wrapper-item-text">Когда клинеры приезжают к клиенту, то первым делом изучают особенности объекта, с которыми предстоит работать. На основании этого намечается план дальнейших действий.</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number orange">2</div>
						<div class="pluses-wrapper-item-title">Подготовительные мероприятия</div>
						<div class="pluses-wrapper-item-text">При необходимости с окон убираются наклейки и скотч. Рамы, стекла, жалюзи и уплотнители очищаются от скопившейся на поверхности грязи и пыли. Шторы снимаются или закрепляются, чтобы не мешали.</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number green">3</div>
						<div class="pluses-wrapper-item-title">Очистка стеклянных поверхностей</div>
						<div class="pluses-wrapper-item-text">Мытье оконных стекол производится в заданной последовательности – от верхней части с постепенным смещением вниз. В этих целях применяется экологически чистая клининговая химия.</div>
					</div>
				</div>
				<div class="pluses-wrapper-line">
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number purple">4</div>
						<div class="pluses-wrapper-item-title">Мойка жалюзи и подоконника</div>
						<div class="pluses-wrapper-item-text">Горизонтальная внутренняя часть окон моется обязательно. Поскольку системы регулировки освещения имеют хорошую защиту от пыли или грязи, чистка производится с заданной периодичностью. К примеру, 1 раз в месяц.</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number blue">5</div>
						<div class="pluses-wrapper-item-title">Наведение блеска</div>
						<div class="pluses-wrapper-item-text">Окна считаются чисто вымытыми, если стекла сверкают образцовой чистотой. Чтобы добиться подобающего эффекта, используются специальные скребки или щетки, которые надежно вычищают стеклянные поверхности от загрязнений.</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number pink">6</div>
						<div class="pluses-wrapper-item-title">Протирка насухо</div>
						<div class="pluses-wrapper-item-text">В самом конце с рам и стекол полностью удаляется влага. Когда клинеры оканчивают работу над последним окном, объект сдается заказчику. Специалисты собирают оборудование вместе с чистящими средствами и уезжают.</div>
					</div>
				</div>
			</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="main-blue-card">
				<div class="main-blue-card__title">
					Методы и способы мойки окон в Москве
				</div>
				<div class="main-blue-card__info">
					Мойка окон и витражей делится на внутреннюю и наружную. Когда клинеры работают в помещениях, спецтехника вроде автомобильных вышек не привлекается. Специалисты находятся в комнатах и оттуда производят необходимые действия. Повышенные меры безопасности соблюдаются при вымывании внешних частей оконных конструкций. Особенно на балконах или лоджиях.<br><br>
					Наружное мытье осуществляется 3 основными способами – на лестнице, автомобильной вышке или в подвешенной к крыше люльке. Если ни один из перечисленных методов не подходит, привлекаются так называемые «промышленные альпинисты». Для перемещения по фасаду используются лебедки, тросы, крюки и другое снаряжение, которое применяется покорителями горных вершин.
				</div>
			</div>
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
