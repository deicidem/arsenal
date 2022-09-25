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

		?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="section page-section">
		<div class="container">
			<h2 class="section-title"><?php the_title() ?></h2>
			<?php the_content() ?>
			<button class="button button-order">Заказать</button>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->


		<?php
	endwhile; // End of the loop.
	?>

	<section class="section section_blue">
		<div class="container">
			<h2 class="section-title">Реквизиты:</h2>
			<div class="requisites-wrapper">
				<div class="requisites-wrapper-column">
					<div class="requisites-wrapper-item">
						<div class="requisites-wrapper-item-title">ООО «Арсенал-Клининг»</div>
					</div>
					<div class="requisites-wrapper-item">
						<div class="requisites-wrapper-item-title">Юридический адрес: </div>
						<div class="requisites-wrapper-item-text">109202, г. Москва, шоссе Фрезер, д. 11</div>
					</div>
					<div class="requisites-wrapper-item">
						<div class="requisites-wrapper-item-title">ИНН:</div>
						<div class="requisites-wrapper-item-text">7721629609</div>
					</div>
					<div class="requisites-wrapper-item">
						<div class="requisites-wrapper-item-title">КПП:</div>
						<div class="requisites-wrapper-item-text">772101001</div>
					</div>
					<div class="requisites-wrapper-item">
						<div class="requisites-wrapper-item-title">ОГРН:</div>
						<div class="requisites-wrapper-item-text">1087746967241</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
