<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
			Welcome to Where We Wander: a travel and culture blog.  We're Charlotte and Ross - a 30 year-old couple from London now travelling around Australia.  We love to travel and this is our first time uprooting from home for a year to truly experience as much of Australia's unique natural landscape as possible.  Through business and pleasure, we also love theatre, film and fashion, so discovering Australia's culture will be a big part of our blog too, as will food and wine.  We love trying new cuisines, so we can't wait to sample each region's cafes, restaurants and wineries and create new recipes.  We'll be sharing our journey across Australia as we experience all things travel and culture through our <a href="<?php echo get_home_url(); ?>/where/">Where</a> blog and <a href="<?php echo get_home_url(); ?>/wander/">Wander</a> gallery.
		</article>
		<article class="c-well">
			<p class="u-text-lead">
				One year.<br />
				One country.<br /><br />
				Follow us to see<br />
				<a href="<?php echo get_home_url(); ?>/where/">Where</a> We <a href="<?php echo get_home_url(); ?>/wander/">Wander</a>...
			</p>
			<div class="e-h1">
				<?php get_template_part( 'template-parts/page-start', 'none' ); ?>
			</div>
		</article>
	</div>
	<div class="u-grid__col u-grid__col--8">
		<div class="c-map" id="js-popover">
			<div class="c-map__container u-center">
				<div class="c-map__anchor">
					<a href="<?php echo get_home_url(); ?>/category/perth/" class="c-popover c-map__pin c-map__pin--active js-popover__cta" style="top: 62%; left: 11%;">
						<div class="c-popover__menu c-popover__menu--right">
							<div class="e-h4 c-popover__title">Perth</div>
							<div>
								<span>Discovered...</span>
								<span>January</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/exmouth/" class="c-popover c-map__pin c-map__pin--active js-popover__cta" style="top: 35%; left: 4%;">
						<div class="c-popover__menu c-popover__menu--right">
							<div class="e-h4 c-popover__title">Exmouth</div>
							<div>
								<span>Discovered...</span>
								<span>January</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/red-center/" class="c-popover c-map__pin c-map__pin--active js-popover__cta" style="top: 36%; left: 49%;">
						<div class="c-popover__menu c-popover__menu--right">
							<div class="e-h4 c-popover__title">Red Centre</div>
							<div>
								<span>Discovered...</span>
								<span>February</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/sydney/" class="c-popover c-map__pin c-map__pin--active js-popover__cta" style="top: 67%; left: 89%;">
						<div class="c-popover__menu c-popover__menu--left">
							<div class="e-h4 c-popover__title">Sydney</div>
							<div>
								<span>Discovered...</span>
								<span>March</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/broome/" class="c-popover c-map__pin js-popover__cta" style="top: 20%; left: 22%;">
						<div class="c-popover__menu c-popover__menu--right">
							<div class="e-h4 c-popover__title">Broome</div>
							<div>
								<span>To be discovered...</span>
								<span>June</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/darwin/" class="c-popover c-map__pin js-popover__cta" style="top: 4%; left: 44%;">
						<div class="c-popover__menu c-popover__menu--right">
							<div class="e-h4 c-popover__title">Darwin</div>
							<div>
								<span>To be discovered...</span>
								<span>June</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/cairns/" class="c-popover c-map__pin js-popover__cta" style="top: 17%; left: 81%;">
						<div class="c-popover__menu c-popover__menu--left">
							<div class="e-h4 c-popover__title">Cairns</div>
							<div>
								<span>To be discovered...</span>
								<span>July</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/brisbane/" class="c-popover c-map__pin js-popover__cta" style="top: 49%; left: 96%;">
						<div class="c-popover__menu  c-popover__menu--left">
							<div class="e-h4 c-popover__title">Brisbane</div>
							<div>
								<span>To be discovered...</span>
								<span>July</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/adelaide/" class="c-popover c-map__pin js-popover__cta" style="top: 67%; left: 62%;">
						<div class="c-popover__menu c-popover__menu--right">
							<div class="e-h4 c-popover__title">Adelaide</div>
							<div>
								<span>To be discovered...</span>
								<span>August</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/kangaroo-island/" class="c-popover c-map__pin js-popover__cta" style="top: 70%; left: 58%;">
						<div class="c-popover__menu c-popover__menu--left">
							<div class="e-h4 c-popover__title">Kangaroo Island</div>
							<div>
								<span>To be discovered...</span>
								<span>August</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/albany/" class="c-popover c-map__pin js-popover__cta" style="top: 70%; left: 16%;">
						<div class="c-popover__menu c-popover__menu--right">
							<div class="e-h4 c-popover__title">Albany</div>
							<div>
								<span>To be discovered...</span>
								<span>September</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/margaret-river/" class="c-popover c-map__pin js-popover__cta" style="top: 68%; left: 10%;">
						<div class="c-popover__menu c-popover__menu--left">
							<div class="e-h4 c-popover__title">Margaret River</div>
							<div>
								<span>To be discovered...</span>
								<span>October</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/melbourne/" class="c-popover c-map__pin js-popover__cta" style="top: 75%; left: 70%;">
						<div class="c-popover__menu c-popover__menu--left">
							<div class="e-h4 c-popover__title">Melbourne</div>
							<div>
								<span>To be discovered...</span>
								<span>November</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<a href="<?php echo get_home_url(); ?>/category/tasmania/" class="c-popover c-map__pin js-popover__cta" style="top: 88%; left: 77%;">
						<div class="c-popover__menu c-popover__menu--left">
							<div class="e-h4 c-popover__title">Tasmania</div>
							<div>
								<span>To be discovered...</span>
								<span>December</span>
							</div>
						</div>
						<i class="t-icon t-icon--www c-map__icon"></i>
					</a>
					<img class="c-map__img" src="<?php bloginfo('template_directory');?>/img/www-map.png" />
				</div>
			</div>
		</div>
	</div>
<?php
get_template_part( 'template-parts/page-end', 'none' );
get_footer();
