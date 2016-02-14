<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Where_We_Wander
 */

if (has_post_thumbnail( $post->ID ) ) {
  $www_post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' )[0];
  $www_post_image_fallback = 'u-hide';
}
else {
  $www_post_image = '';
  $www_post_image_fallback = 'u-show';
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="c-gallery c-gallery--quarters">
    <a href="<?php echo get_permalink() ?>" class="c-gallery__link">
      <div class="c-gallery__loading">
        <i class="t-icon t-icon--loading"></i>
      </div>
      <div style="background-image: url(<?php echo $www_post_image ?>)" class="c-gallery__img"></div>
      <h4 class="c-gallery__caption">
        <span class="c-gallery__title">
          <?php the_title() ?>
        </span>
      </h4>
      <div class="c-gallery__iteraction"></div>
      <p class="c-gallery__fallback <?php echo $www_post_image_fallback ?>">
        <span class="c-gallery__fallback-text">(no feature image available)</span>
      </p>
    </a>
  </div>
</article>