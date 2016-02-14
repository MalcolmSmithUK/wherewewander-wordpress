<?php
/**
 * The template for displaying all posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Where_We_Wander
 */

get_header();
get_template_part( 'template-parts/page-start', 'none' );

global $post;
$www_where_posts = where_we_wander_get_posts();

?>
    <main class="u-grid__col u-grid__col--12" role="main">

    <?php if ( $www_where_posts ) : ?>
      <?php
      /* Start the Loop */
      foreach ( $www_where_posts as $post ) :
        setup_postdata($post);

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', 'multiple' );
        wp_reset_postdata();

      endforeach;
    else :

      get_template_part( 'template-parts/content', 'none' );

    endif; ?>

    </main><!-- #main -->

<?php
get_template_part( 'template-parts/page-end', 'none' );
get_footer();
