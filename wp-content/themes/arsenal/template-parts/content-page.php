<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsenal
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="section page">
		<div class="container">
			<h2 class="section-title"><?php the_title() ?></h2>
			<?php the_content() ?>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
