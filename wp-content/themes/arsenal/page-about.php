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

	
<section class="section certificates">
		<div class="container">
			<h2 class="section-title">Сертификаты</h2>
			<div class="certificates-wrapper">
			<?php
				$my_posts = get_posts(array(
					'numberposts' => 5,
					'category_name'    => 'certificates',
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					
					'meta_key'    => '',
					'meta_value'  => '',
					'post_type'   => 'post',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				));

				global $post;

				foreach ($my_posts as $post) {
					setup_postdata($post);
				?>
				 <img src="<?php the_post_thumbnail_url()?>" class="certificates-item">
				<?php
				}

				wp_reset_postdata(); // сброс
				?>
			</div>
		</div>
	</section>

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
