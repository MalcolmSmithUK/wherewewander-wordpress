<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Where_We_Wander
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/favicon.png" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> onkeyup="www && www.gallery.processKey(event)">
	<a class="u-screen-reader" href="#content"><?php esc_html_e( 'Skip to content', 'where-we-wander' ); ?></a>

	<div class="o-page o-page--fixed">
		<section class="u-anchor">
			<div class="c-header">
				<div class="u-grid u-grid--fixed">
					<div class="u-grid__row">
						<div class="u-grid__col u-grid__col--4">
							<div class="o-banner o-banner--fill">
								<div class="o-banner__cell c-well">
									<div class="o-media o-media--middle">
										<div class="o-media__img e-h2">
											<i class="t-icon t-icon--location"></i>
										</div>
										<div class="o-media__body e-h4">
											<strong>Current Location</strong><br />
											<span editable>Perth, WA Australia</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="u-grid__col u-grid__col--4">
							<div class="o-banner u-center">
								<div class="o-banner__cell o-banner__cell--displace">
							<?php if ( is_front_page() && is_home() ) : ?>
									<h1 class="u-margin-nmb">
							<?php else : ?>
									<p class="u-margin-nmb">
							<?php endif; ?>

										<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-logo">
											<img src="<?php bloginfo('template_directory');?>/img/www-logo-grey.png" alt="<?php bloginfo( 'name' ); ?>" class="o-banner__content o-banner__content--displaced c-logo__image"/>
											<span class="u-visually-hidden"><?php bloginfo( 'name' ); ?></span>
										</a>

							<?php if ( is_front_page() && is_home() ) : ?>
									</h1>
							<?php else : ?>
									</p>
							<?php endif; ?>			
								</div>
							</div>
						</div>
						<div class="u-grid__col u-grid__col--4">
							<div class="o-banner o-banner--fill u-text-right">
								<div class="o-banner__cell c-well">
									<div class="e-h1">
										<a href="https://www.instagram.com/wherewewander_/" target="_blank" class="c-icon-link c-icon-link--header">
											<i class="t-icon t-icon--instagram"></i>
										</a>
										<a href="https://www.pinterest.com/wherewewander/" target="_blank" class="c-icon-link c-icon-link--header">
											<i class="t-icon t-icon--pinterest"></i>
										</a>
										<a href="https://twitter.com/WhereWeWander" target="_blank" class="c-icon-link c-icon-link--header">
											<i class="t-icon t-icon--twitter"></i>
										</a>
										<a href="https://vine.co/u/1232693002611675136" target="_blank" class="c-icon-link c-icon-link--header">
											<i class="t-icon t-icon--vine"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			<div class="c-nav">
				<div class="u-grid u-grid--fixed">
					<div class="u-grid__row">
						<div class="u-grid__col u-grid__col--6 u-grid__col--offset-3">
							<div class="c-nav__guideline c-nav__guideline--top"></div>
							<nav class="o-list o-list--distributed u-text-center c-nav__anchor e-h4">
								<a href="<?php get_home_url(); ?>" class="o-list__item c-nav__item c-nav__item--active">Home</a>
								<a href="about.php" class="o-list__item c-nav__item">About</a>
								<a href="where.php" class="o-list__item c-nav__item">Where</a>
								<a href="wander.php" class="o-list__item c-nav__item">Wander</a>
								<a href="contact.php" class="o-list__item c-nav__item">Contact</a>
							</nav>
						</div>
					</div>
					<div class="c-nav__guideline c-nav__guideline--bottom"></div>
				</div>
			</div>
			<div class="c-waves">
				<div class="c-waves__wave c-waves__wave--top c-waves__wave--small"></div>
				<div class="c-waves__wave c-waves__wave--top c-waves__wave--mid"></div>
				<div class="c-waves__wave c-waves__wave--top c-waves__wave--large"></div>
			</div>
		</section>
		<section id="content">
