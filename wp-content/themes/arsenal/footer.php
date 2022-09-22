<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arsenal
 */

?>

<footer id="colophon" class="section site-footer">
	<div class="container">
		<div class="footer-wrapper">
			<div class="footer-block">
				<div class="footer-block__title">Телефон</div>
				<a class="footer-block-item" href="tel:84956251580">+7 (495) 625-15-80</a>
				<a class="footer-block-item" href="tel:84957902022">+7 (495) 790-20-22</a>
			</div>
			<div class="footer-block">
				<div class="footer-block__title">Адрес</div>
				<div class="footer-block-item">101000 г. Москва, ул. Маросейка д.3/13</div>
			</div>
			<div class="footer-block">
				<div class="footer-block__title">Почта</div>
				<div class="footer-block-item" href="mail:citi@citicleaning.ru">citi@citicleaning.ru</div>
			</div>
			<div class="footer-block">
				<div class="footer-block-item">
					<img src="<?php echo get_template_directory_uri() ?>/img/instagram.svg" alt="">
					<img src="<?php echo get_template_directory_uri() ?>/img/vk.svg" alt="">
				</div>
			</div>
		</div>
		<div class="footer-wrapper-privacy">
			© 2020, Клининговая компания «ARSENAL Cleaning» <a href="">Политика конфиденциальности</a>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>