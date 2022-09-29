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
				Специальное предложение
			</div>
			<div class="main-blue-card__info">
				Для магазинов и ресторанов расположенных на 1-х этажах:
				при заключении договора на регулярное мытье витрин, скидка до 30% от прайс-листа
			</div>
		</div>
	</div>
</section>


</main><!-- #main -->

<?php
get_footer();
