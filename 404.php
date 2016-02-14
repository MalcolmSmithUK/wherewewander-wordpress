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
			<div class="u-grid__row u-grid--break-top">
				<div class="u-grid__col u-grid__col--4 u-text-center">
					<?php the_widget( 'WP_Widget_Recent_Posts' );?>
				</div>
				<div class="u-grid__col u-grid__col--4 u-text-center">
					<h2><?php esc_html_e( 'Most Used Categories', 'where-we-wander' ); ?></h2>
					<ul class="u-list-unstyled">
					<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 100,
						) );
					?>
					</ul>
				</div>
				<div class="u-grid__col u-grid__col--4 u-text-center">
					<?php
						the_widget( 'WP_Widget_Archives');
						the_widget( 'WP_Widget_Tag_Cloud' );
					?>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
