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
   	<?php
		 global $post;
		 // параметры по умолчанию
$page = get_page_by_path('services');

$children = get_children([
	'post_parent' => $page->ID,
	'post_type' => 'page'
]);

foreach( $children as $post ){
	setup_postdata( $post );
	?>
	<div class="article-elem">
		<?php the_title(); ?>
		<?php the_post_thumbnail();?>
		<a href="<?php the_permalink(); ?>">Подробнее</a>
	</div>
	<?php
}
		 ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
