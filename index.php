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

get_header(); ?>

	<div class="o-page__inset">
		<div class="u-grid u-grid--fixed">
			<div class="u-grid__row">
				<div class="u-grid__col u-grid__col--4">
					<article class="c-well">
						Welcome to Where We Wander... A travel &amp; culture blog sharing stories &amp; snaps from Charlotte &amp; Ross, as they quit their jobs within the Fashion &amp; Theatre Industries in London, and move to Australia for a year of wandering. 
					</article>
					<article class="c-well">
						<p class="u-text-lead">
							One year.<br />
							One country.<br />
							One big adventure.<br /><br />
							Follow us to see<br />
							<a href="where.php">Where</a> We <a href="wander.php">Wander</a>...
						</p>
						<div class="e-h1">
							<a href="https://www.instagram.com/wherewewander_/" target="_blank" class="c-icon-link">
								<i class="t-icon t-icon--instagram"></i>
							</a>
							<a href="https://www.pinterest.com/wherewewander/" target="_blank" class="c-icon-link">
								<i class="t-icon t-icon--pinterest"></i>
							</a>
							<a href="https://twitter.com/WhereWeWander" target="_blank" class="c-icon-link">
								<i class="t-icon t-icon--twitter"></i>
							</a>
							<a href="https://vine.co/u/1232693002611675136" target="_blank" class="c-icon-link">
								<i class="t-icon t-icon--vine"></i>
							</a>
						</div>
					</article>
				</div>
				<div class="u-grid__col u-grid__col--8">
					<div class="c-map" id="js-popover">
						<div class="c-map__container u-center">
							<div class="c-map__anchor">
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 62%; left: 11%;">
									<div class="c-popover__menu u-text-center">
										<div class="e-h4 c-popover__title">Perth</div>
										<div>
											<span>To be discovered...</span><br />
											<span>January 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 35%; left: 4%;">
									<div class="c-popover__menu u-text-center">
										<div class="e-h4 c-popover__title">Exmouth</div>
										<div>
											<span>To be discovered...</span><br />
											<span>January 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 36%; left: 49%;">
									<div class="c-popover__menu u-text-center">
										<div class="e-h4 c-popover__title">Red Centre</div>
										<div>
											<span>To be discovered...</span><br />
											<span>February 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 67%; left: 89%;">
									<div class="c-popover__menu c-popover__menu--push-left u-text-center">
										<div class="e-h4 c-popover__title">Syndey</div>
										<div>
											<span>To be discovered...</span><br />
											<span>March 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 20%; left: 22%;">
									<div class="c-popover__menu u-text-center">
										<div class="e-h4 c-popover__title">Broome</div>
										<div>
											<span>To be discovered...</span><br />
											<span>June 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 4%; left: 44%;">
									<div class="c-popover__menu u-text-center">
										<div class="e-h4 c-popover__title">Darwin</div>
										<div>
											<span>To be discovered...</span><br />
											<span>June 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 17%; left: 81%;">
									<div class="c-popover__menu u-text-center">
										<div class="e-h4 c-popover__title">Cairns</div>
										<div>
											<span>To be discovered...</span><br />
											<span>July 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 49%; left: 96%;">
									<div class="c-popover__menu c-popover__menu--push-left u-text-center">
										<div class="e-h4 c-popover__title">Brisbane</div>
										<div>
											<span>To be discovered...</span><br />
											<span>July 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 67%; left: 62%;">
									<div class="c-popover__menu u-text-center">
										<div class="e-h4 c-popover__title">Adelaide</div>
										<div>
											<span>To be discovered...</span><br />
											<span>August 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 70%; left: 58%;">
									<div class="c-popover__menu u-text-center">
										<div class="e-h4 c-popover__title">Kangaroo Island</div>
										<div>
											<span>To be discovered...</span><br />
											<span>August 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 70%; left: 16%;">
									<div class="c-popover__menu u-text-center">
										<div class="e-h4 c-popover__title">Albany</div>
										<div>
											<span>To be discovered...</span><br />
											<span>September 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 68%; left: 10%;">
									<div class="c-popover__menu u-text-center">
										<div class="e-h4 c-popover__title">Margaret River</div>
										<div>
											<span>To be discovered...</span><br />
											<span>October 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 75%; left: 70%;">
									<div class="c-popover__menu u-text-center">
										<div class="e-h4 c-popover__title">Melbourne</div>
										<div>
											<span>To be discovered...</span><br />
											<span>November 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<a href="where.php" class="c-popover c-map__pin js-popover__cta" style="top: 88%; left: 77%;">
									<div class="c-popover__menu u-text-center">
										<div class="e-h4 c-popover__title">Tasmania</div>
										<div>
											<span>To be discovered...</span><br />
											<span>December 2016</span>
										</div>
									</div>
									<i class="t-icon t-icon--www c-map__icon"></i>
								</a>
								<img class="c-map__img" src="<?php bloginfo('template_directory');?>/img/sketch-map-fill.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
