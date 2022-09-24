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

	<section class="section features">
		<div class="container">
			<h2 class="section-title">Выбирайте нас</h2>
			<div class="features-wrapper">
				<div class="features-card">
					<img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" class="features-card__image">
					<div class="features-card__title">
						Круглосуточное обслуживание заказчиков</div>
					</img>
				</div>
				<div class="features-card">
					<img src="<?php echo get_template_directory_uri() ?>/img/material.svg" class="features-card__image">
					<div class="features-card__title">
						Использование безопасной клининговой химии</div>
					</img>
				</div>
				<div class="features-card">
					<img src="<?php echo get_template_directory_uri() ?>/img/sale.svg" class="features-card__image">
					<div class="features-card__title">
						Скидки на услуги для постоянных клиентов</div>
					</img>
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
						<div class="pluses-wrapper-item-text">Профессиональная уборка после ремонта начинается с анализа объекта и оценки фронта работ. Клинеры осматривают помещения, изучают виды загрязнений, подбирают подходящие составы и продумывают план мероприятий. Когда подготовка завершается, специалисты переходят к работе.</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number orange">2</div>
						<div class="pluses-wrapper-item-text">В первую очередь собирается крупный строительный мусор вроде кусков линолеума или обоев. Мелкие и сыпучие отходы сметаются в кучи и укладываются в мешки. Последние выносятся за пределы объекта к местам, где стоят контейнеры, содержимое которых регулярно вывозится на свалку.</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number green">3</div>
						<div class="pluses-wrapper-item-text">Далее клинеры переходят к удалению пыли на потолках, стенках и полах. Одновременно удаляются загрязнения наподобие пятен или прилипших к различным поверхностям комков штукатурки и отделочных растворов. Для обеспыливания помещений используются специальные пылесосы высокой мощности.</div>
					</div>
				</div>
				<div class="pluses-wrapper-line">
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number purple">4</div>
						<div class="pluses-wrapper-item-text">Если действия строителей приводят к загрязнению предметов обстановки, уборка после стройки и ремонта сопровождается чисткой мебели. Потребность в услуге возникает при ремонтных работах в отдельных помещениях. Из-за отсутствия защиты пыль проникает в остальные комнаты и пачкает шкафы, столы, кресла, диваны и пр.</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number blue">5</div>
						<div class="pluses-wrapper-item-text">Когда помещения полностью убраны, переходят к мойке оконных конструкций. Подоконники, рамы и стеклопакеты часто очищаются пылесосами еще на этапе работы с полами, стенами и потолками. Однако мытье оставляется на самый конец, чтобы из помещений не неслась пыль и не садилась на стекла.</div>
					</div>
					<div class="pluses-wrapper-item">
						<div class="pluses-wrapper-item-number pink">6</div>
						<div class="pluses-wrapper-item-text">Мытье наружных частей зданий и уборка прилегающей территории осуществляется по необходимости. Для мойки фасадов применяется ручной труд или спецтехника. Зависит от ситуации. Аналогично обстоит дело с дорожками, детскими площадками, фонтанами, лестницами и прочими объектами, которые располагаются на улице.</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
