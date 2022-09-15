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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'arsenal'); ?></a>

		<header id="masthead" class="header">
			<div class="container">
				<div class="header-branding">
					<img class="header-branding__logo" src="<?php echo get_template_directory_uri() . '/img/logo.svg' ?>" alt="ARSENAL Cleaning">
					<div class="header-branding__contacts">
						<div class="header-branding__contacts__phones">
							<a class="header-branding__contacts__phone" href="tel:84956251580">+7 (495) 625-15-80</a>
							<a class="header-branding__contacts__phone" href="tel:84957902022">+7 (495) 790-20-22</a>
						</div>
						<div class="header-branding-search">
							<img src="<?php echo get_template_directory_uri() . '/img/search.svg' ?>" alt="">
						</div>
					</div>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'arsenal'); ?></button>
					<?php
					wp_nav_menu(
						array(
							'menu_id'        => 'primary-menu',
							'menu_class' => 'header-menu',
							// 'walker' => new True_Walker_Nav_Menu()
						)
					);
					?>
					
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->