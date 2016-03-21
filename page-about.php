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
      <p>
        Welcome to Where We Wander, a travel and culture blog which will document our year of wandering across Australia.
      </p>
      <p>
        Australia's a big country, but we want to see as much of it as we possibly can, from small villages to big cities - and everything in between.  So, in our attempt to see as much as we can, we'll be travelling around by car, camper van, motorbike, bicycle, plane and ferry.  Being big road trip fans, we'll be hitting the open road a lot.
      </p>
      <p>
        We're passionate about food, drink and culture, so you'll also read about our favourite foodie finds, the best wines we sample and our discoveries as we wander around Australia's unique natural landscapes, museums and galleries.  We also love live music and theatre and film and fashion, so we hope to satisfy our cultural cravings by finding out what Australia has to offer.  And of course, we are looking to tick a few important things off our bucket list.  From braving the seas with shark diving on the south coast, to taking in the best view of Sydney Harbour by paragliding and a sunset camel-ride in Broome.
      </p>
      <p>
        Simply put: we want to see it all, and share it all.  Read all about <a href="<?php echo get_home_url(); ?>/where/">where</a> we go.
      </p>
    </article>
  </div>
  <div class="u-grid__col u-grid__col--4">
    <article class="c-well">
      <h3>
        We
      </h3>
      <p>
        Allow us to introduce ourselves properly: we're Charlotte and Ross, a 30-year-old couple from London.  We met in September 2009, when we were working together on <em>Chitty Chitty Bang Bang</em> at a London theatre.  We've spent our careers working in cultural industries, and have collectively worked on six different fashion weeks, nine fashion shows, ten plays, ten stand-up comedy shows, 11 Christmas pantomimes and 30 musicals.
      </p>
      <p>
        But culture isn't just our career, it's our passion.  Charlotte is a theatre geek, and her favourite shows are <em>The Curious Incident of the Dog in the Night-Time</em>, <em>Memphis</em>, <em>The Woman in Black</em>, <em>The Drowned Man</em> and <em>Jersey Boys</em>.  Ross is a film geek, with an equally varied list of favourite films that includes <em>Fight Club</em>, <em>City of God</em>, <em>Back to the Future</em>, <em>Inception</em>, <em>Goodfellas</em> and <em>Anchorman</em>.
      </p>
      <p>
        In between working and watching shows and films, we also love our food and drink.  Steak (always cooked rare) is our favourite food, and wine is our poison.  Visiting wineries is one of our top hobbies, so you can expect to read lots of wine-related posts as we travel across Australia's many wine regions.
      </p>
      <p>
        And finally, you've guessed it, we <em>love</em> to travel.  Combined, we have travelled to 18 countries, so far, but we hope this list will get much bigger.  Kefalonia in Greece was our first get-away together, and we last stepped on Australian soil in February 2014.
      </p>
      <p>
        As you'll discover as you read our blog, travelling means more to us that just a break from work and an excuse to get a tan.  We love learning and like to get to find out as much as we can about the places we visit.  This means understanding a country's customs, experiencing its unique cultures and getting a real taste of what it would be like to actually live there.  With our London jobs behind us and our bags (over)packed, we have nothing holding us back from exploring Australia's vast landscape and rich culture as honorary residents, rather than whistle-stop visitors.
      </p>
    </article>
  </div>
  <div class="u-grid__col u-grid__col--4">
    <article class="c-well">
      <h3>
        Wander
      </h3>
      <p>
        We love our photography, whether it's instagram photos (gotta love those filters), slo-mo and time-lapse iPhone videos or landscape shots with our Canon Powershot Digital Camera.  As we <a href="<?php echo get_home_url(); ?>/wander/">Wander</a> across Australia, we'll share our pictures in our gallery to bring you a glimpse of Down Under through our eyes - and lenses.</a>
      </p>
      <div>
        Check out our <a href="<?php echo get_home_url(); ?>">map</a>, to see where we plan to wander.</a>
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
