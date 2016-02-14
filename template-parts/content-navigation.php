<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Where_We_Wander
 */

global $post;

?>
<pre>
<?php $www_post_navigation = where_we_wander_get_post_navigation(get_the_ID()); ?>
</pre>
<div class="u-grid--break-top">
  <?php
  /* Start the Loop */
  foreach ( $www_post_navigation as $post ) {
    setup_postdata($post);

    get_template_part( 'template-parts/content', 'multiple' );
    wp_reset_postdata();

  }
  ?>
</div>