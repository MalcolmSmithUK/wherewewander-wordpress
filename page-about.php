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
  <div class="u-grid__col u-grid__col--4">
    <article class="c-well">
      <h3>
        Where
      </h3>
      <p class="u-margin-nmb">
        Read all about <a href="where.php">where</a> Downunder we travel to. From small villages to big cities &amp; all the hidden gems in between. Stopping along the way whilst travelling to feed our culture cravings is also a must. Anything from trying new food &amp; sampling new wines, waywardly wandering around museums &amp; galleries, discovering different music, to experiencing pretty much anything &amp; everything live. Simply put. We want to see it all.
      </p>
    </article>
    <article class="c-well">
      <h3>
        About us
      </h3>
      <p class="u-margin-nmb">
        For us, travelling is more than just a holiday away from work and an excuse to get a tan. We love learning and like to get to find out as much as we can about the places we visit; understanding their customs, experiencing their unique cultures and getting a real taste of what it would be like to actually live there, rather than just being a visitor. With our London jobs behind us and our bags (over)packed, we now have nothing holding us back from exploring Australia's beautifully vast landscape and rich culture with absolutely no constraints. 
      </p>
    </article>
  </div>
  <div class="u-grid__col u-grid__col--4">
    <article class="c-well">
      <h3>
        We
      </h3>
      <ul class="u-margin-nmb">
        <li>
          February 2014 was the last time we stepped on Australian soil.
        </li>
        <li>
          Combined, we have travelled to 18 countries, so far.
        </li>
        <li>
          Kefalonia, Greece was our first get-away together.
        </li>
        <li>
          Wine is our poison &amp; visiting wineries is one of our top hobbies.
        </li>
        <li>
          Our favourite winery (so far) is <a href="http://www.vassefelix.com.au/" target="_blank">Vasse Felix in Margaret River</a>.
        </li>
        <li>
          We met in September 2009 whilst working together on Chitty Chitty Bang Bang.
        </li>
        <li>
          Charlotte is a theatre geek. Top shows are The Curious Incident of the Dog in the Night-Time, Memphis, The Woman in Black, The Drowned Man &amp; Jersey Boys.
        </li>
        <li>
          Ross is a film geek. Top films are Fight Club, City of God, Back To The Future, Inception, Goodfellas &amp; Anchorman.
        </li>
        <li>
          We have collectively worked on 6 different Fashion Weeks, 9 Fashion Shows, 10 Plays, 10 Stand-up Comedy Shows, 11 Christmas Pantomimes, 15 Ballets &amp; 30 Musicals.
        </li>
        <li>
          Steak (always cooked rare) is our favourite food.
        </li>
      </ul>
    </article>
  </div>
  <div class="u-grid__col u-grid__col--4">
    <article class="c-well">
      <h3>
        Wander
      </h3>
      <p class="h4">
        <a href="<?php echo get_home_url(); ?>/wander/">Wander</a> through our gallery see the photos we snap along the way...</a>
      </p>
      <div>
        Check out our <a href="<?php echo get_home_url(); ?>">map</a>, to see where we plan to go...</a>
      </div>
    </article>
  </div>
  <div class="u-grid__col u-grid__col--4 u-grid--break-top">
    <a href="<?php echo get_home_url(); ?>" class="u-show">
      <img src="<?php bloginfo('template_directory');?>/img/www-map.png" class="u-center u-show"/>
    </a>
  </div>
<?php
get_template_part( 'template-parts/page-end', 'none' );
get_footer();
