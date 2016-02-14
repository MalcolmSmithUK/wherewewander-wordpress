<?php
/**
 * The template for displaying the about page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Where_We_Wander
 */

get_header();
get_template_part( 'template-parts/page-start', 'none' );

?>
  <div class="o-banner o-banner--splash c-splash">
    <div class="o-banner__cell">
      <div class="u-grid__col u-grid__col--12 u-grid--break-bottom">
        <h2 class="u-text-center c-splash__title">
          <span>Get in touch</span>
          <span class="c-splash__subtitle">and follow us</span>
        </h2>
      </div>
      <div class="u-grid__col u-grid__col--12 u-text-center u-grid--break-bottom">
        <a href="mailto:hello@wherewewander.co.uk" class="e-h4">
          hello@wherewewander.co.uk
        </a>
      </div>
      <div class="u-grid__col u-grid__col--12 u-text-center">
        <span class="e-h1 s-contact-icon">
          <?php get_template_part( 'template-parts/social', 'none' ); ?>
        </span>
      </div>
    </div>
  </div>
</div>
<?php
get_template_part( 'template-parts/page-end', 'none' );
get_footer();
