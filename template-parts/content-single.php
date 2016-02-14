<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Where_We_Wander
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="c-well clearfix s-blog">
    <header class="c-blog-title">
      <h2>
      <?php
        the_title( '<span class="c-blog-title__heading u-text-center">', '</span>' );

      if ( 'post' === get_post_type() ) : ?>
      <span class="c-blog-title__date u-text-center">
        <?php where_we_wander_posted_on(); ?>
      </span><!-- .entry-meta -->
      <?php
      endif; ?>
      </h2>
    </header><!-- .entry-header -->

    <div>
      <?php
        the_content( sprintf(
          /* translators: %s: Name of current post. */
          wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'where-we-wander' ), array( 'span' => array( 'class' => array() ) ) ),
          the_title( '<span class="screen-reader-text">"', '"</span>', false )
        ) );

        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'where-we-wander' ),
          'after'  => '</div>',
        ) );
      ?>
    </div><!-- .entry-content -->

      <footer class="c-blog-footer u-text-center">
        <div>
          Follow Where We Wander:
        </div>
        <div class="e-h1">
          <?php get_template_part( 'template-parts/social', 'none' ); ?>
        </div>
      <?php where_we_wander_entry_footer(); ?>
      </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-## -->
