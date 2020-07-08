<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Reborn
 */

get_header();
?>

<main id="primary" class="sidebar-main">

	<?php
	while (have_posts()) :
		the_post();
	?>
		<div class="article">
			<img class="blog_img_article" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="">
			<div class="blog_bloc_textes blog_bloc_textes_single">
				<h2 class="blog_titre_article_single"><?= get_the_title(); ?></h2>
				<p class="blog_texte_article_single"><?= get_the_content(); ?></p>
			</div>
		</div>

		 <div class="sidebar">
			 <?php get_sidebar();?>
		</div>
	<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
