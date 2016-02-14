<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Where_We_Wander
 */

get_header();
get_template_part( 'template-parts/page-start', 'none' );

while ( have_posts() ) : the_post();
?>
	<main class="u-grid__col u-grid__col--12" role="main">
		<?php get_template_part( 'template-parts/content', 'single' ); ?>
		<?php if ( comments_open() || get_comments_number() ) : ?>
			<?php // comments_template(); ?>
		<?php endif; ?>
	</main><!-- #main -->

	<div class="u-grid__col u-grid__col--12">
		<?php get_template_part( 'template-parts/content', 'navigation' ); ?>
	</div>

<?php endwhile; // End of the loop. ?>

<?php
get_template_part( 'template-parts/page-end', 'none' );
get_footer();
