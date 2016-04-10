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
$www_wander_objects = where_we_wander_get_wander_objects();
?>

  <?php if ( $www_wander_objects ) : ?>

    <main class="u-grid__col u-grid__col--12" role="main" id="js-gallery"></main>
    <!-- #main -->

    <script type="application/json" id="js-gallery-src"><?php echo json_encode($www_wander_objects); ?></script>
    <script type="text/html" id="js-gallery-template">
      <article class="c-gallery c-gallery--thirds attachment-{{ id }}">
        <div class="c-gallery__link c-gallery__link--zoomable" onClick="www.gallery.open(event, {{ index }})">
          <div class="c-gallery__loading">
            <i class="t-icon t-icon--loading"></i>
          </div>
          <div style="background-image: url({{ thumb }})" class="c-gallery__img"></div>
          <h4 class="c-gallery__caption c-gallery__caption--interactive">
            <span class="c-gallery__title">
              {{ caption }}
            </span>
          </h4>
          <div class="c-gallery__iteraction"></div>
        </div>
      </article>
    </script>

    </div>
  <!-- .row -->
  <div class="u-grid__row u-grid--break-top">
    <div class="u-grid__col u-grid__col--6 u-grid__col--offset-3">
      <button class="c-btn c-btn--full" onClick="www.gallery.paginate()" id="js-gallery-paginate">
        Load more...
      </button>
    </div>
    
  <?php else : ?>

    <main class="u-grid__col u-grid__col--12" role="main">
      <?php get_template_part( 'template-parts/content', 'none' ); ?>
    </main>
    <!-- #main -->
    
  <?php endif; ?>

<?php
get_template_part( 'template-parts/page-end', 'none' );
get_footer();
