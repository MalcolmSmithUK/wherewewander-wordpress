<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Where_We_Wander
 */

?>

		</section><!-- #content -->
	</div>
	<section>
		<div class="c-waves">
			<div class="c-waves__wave c-waves__wave--bottom c-waves__wave--large"></div>
			<div class="c-waves__wave c-waves__wave--bottom c-waves__wave--mid"></div>
			<div class="c-waves__wave c-waves__wave--bottom c-waves__wave--small"></div>
		</div>
		<footer class="c-footer">
			<div class="u-grid u-grid--fixed">
				<div class="u-grid__row">
					<div class="u-grid__col u-grid__col--9">
						<div class="o-valign">
							<div class="o-valign__content o-valign__content--middle c-footer__content">
							<?php $www_footer_quote = where_we_wander_footer_quote($post->post_name); ?>
								<span class="e-h5">&quot;<?php echo $www_footer_quote['text']; ?>&quot;</span> - <em class="u-text-nowrap"><?php echo $www_footer_quote['author']; ?></em>
							</div>
						</div>
					</div>
					<div class="u-grid__col u-grid__col--3">
						<div class="o-valign">
							<div class="o-valign__content o-valign__content--middle c-footer__content u-text-right">
								Copyright &copy;<?php echo date("Y"); ?> <span class="u-text-nowrap">Where We Wander</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</section>

<div class="c-modal__body">
	<div class="c-modal__overlay" onClick="www.gallery.close()"></div>
	<div class="c-modal__content">
		<div class="c-modal__header">
			<h4 class="c-modal__caption">
				<span id="js-gallery-caption"></span>
				<span id="js-gallery-number"></span>
			</h4>
		</div>
		<div class="c-gallery__loading">
			<i class="t-icon t-icon--loading"></i>
		</div>
		<div class="c-modal__img" id="js-gallery-img">
		</div>
		<a href="#" class="c-modal__navigate c-modal__navigate--left" onClick="www.gallery.selectPrev(event)">
			<i class="t-icon t-icon--left c-modal__navigate-icon"></i>
		</a>
		<a href="#" class="c-modal__navigate c-modal__navigate--right" onClick="www.gallery.selectNext(event)">
			<i class="t-icon t-icon--right c-modal__navigate-icon"></i>
		</a>
		<div class="c-modal__close" onClick="www.gallery.close()">X</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
