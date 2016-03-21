<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Where_We_Wander
 */

?>

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