<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arsenal
 */
require get_template_directory() . '/inc/True_Walker_Nav_Menu.php';

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'arsenal'); ?></a>

		<div class="overlay">
			<div class="popup form-popup" id="call-form">
				<div class="popup-close"></div>
				<div class="form-wrapper">
					<h2 class="form-title">Бесплатная консультация и расчет стоимости уборки</h2>
					<div class="form-content">
						<?php echo do_shortcode('[contact-form-7 id="125" title="Contact form 2"]'); ?>
					</div>
				</div>
			</div>
			<div class="popup form-popup" id="order-form">
				<div class="popup-close"></div>
				<div class="form-wrapper">
					<h2 class="form-title">Заказать услугу</h2>
					<div class="form-content">
						<?php echo do_shortcode('[contact-form-7 id="124" title="Contact form 1"]'); ?>
					</div>
				</div>
			</div>
		</div>

		<header id="masthead" class="header">
			<div class="container">
				<div class="header-branding">
					<a href="<?php echo home_url() ?>">
						<img class="header-branding__logo" src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>" alt="ARSENAL Cleaning">
					</a>

					<div class="header-branding__contacts">
						<div class="header-branding__contacts__phones">
							<a class="header-branding__contacts__phone" href="tel:84956251580">+7 (495) 625-15-80</a>
							<a class="header-branding__contacts__phone" href="tel:84957902022">+7 (495) 790-20-22</a>
						</div>

						<div class="header-branding-search button-call">
							<img src="<?php echo get_template_directory_uri() . '/img/phone.svg' ?>" alt="">
						</div>
					</div>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span></button>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'menu_id'        => 'primary-menu',
							'menu_class' => 'header-menu',
							'before' => '<button class="header-menu-arrow">&#10095;</button>'
							// 'walker' => new True_Walker_Nav_Menu()
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->