<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsenal
 */

get_header();
?>

	<main id="primary" class="site-main">
   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae quae soluta tenetur doloribus consequuntur. Iure asperiores recusandae dignissimos placeat odio exercitationem? Officiis earum ipsam expedita autem dicta nobis voluptatibus neque?
	 Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, natus. Quam quisquam, sint distinctio asperiores veniam magnam ad similique repellat aliquid repudiandae neque minima molestiae non corrupti quis dolorem facere?
	 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, ea. Quaerat dolor nostrum doloremque eos expedita nisi aut molestias distinctio ab! Delectus, ducimus? Voluptatem laudantium officia fugiat illo, labore nisi!
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
