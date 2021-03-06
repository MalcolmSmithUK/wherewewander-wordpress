<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Where_We_Wander
 */

?>

<section class="no-results not-found u-text-center ">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found...', 'where-we-wander' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content u-grid--break-bottom-inside">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'where-we-wander' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'where-we-wander' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we couldn&rsquo;t find any posts. Perhaps searching can help?', 'where-we-wander' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->

</section><!-- .no-results -->

<?php get_template_part( 'template-parts/content', 'find' ); ?>