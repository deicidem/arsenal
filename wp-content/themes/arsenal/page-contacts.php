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



		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			
	</main><!-- #main -->

<?php
get_footer();
