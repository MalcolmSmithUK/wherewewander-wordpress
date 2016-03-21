<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Where_We_Wander
 */

get_header(); ?>

	<div class="o-page__inset">
		<div class="u-grid u-grid--fixed">
			<div class="u-grid__row">
				<div class="u-grid__col u-grid__col--12 u-grid--break-bottom u-text-center">
					<h1><?php esc_html_e( 'Oops! That page could not be found...', 'where-we-wander' ); ?></h1>
					<?php get_search_form(); ?>
				</div>
			</div>
			
			<?php get_template_part( 'template-parts/content', 'find' ); ?>
	</div>

<?php
get_footer();
