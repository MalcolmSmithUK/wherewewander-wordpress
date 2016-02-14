<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Where_We_Wander
 */

if ( is_single() ) {
  get_template_part( 'template-parts/content-single', 'none' );
} else {
  get_template_part( 'template-parts/content-multiple', 'none' );
}