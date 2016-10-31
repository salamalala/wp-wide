<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wide
 */

?>

		</main><!-- site content-->

		<footer class="footer" role="footer">

				<div class="footer__support">
					<div class="outer-container">
						<div class="wrapper">

							<!-- Begin MailChimp Signup Form -->
							<div id="mc_embed_signup" class="footer__newsletter">
								<form action="//wide-network.us12.list-manage.com/subscribe/post?u=77a567236b6e5cd3dfe13d53d&amp;id=0780bfd7dd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								    <div id="mc_embed_signup_scroll">
										<div class="mc-field-group">
											<input type="email" value="" name="EMAIL" class="required email footer__input" id="mce-EMAIL" placeholder="Emailadresse">
										</div>

										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_77a567236b6e5cd3dfe13d53d_0780bfd7dd" tabindex="-1" value=""></div>
								    <div class="clear">
											<input type="submit" value="Anmelden" name="subscribe" id="mc-embedded-subscribe" class="footer__submit">
										</div>
								    </div>
								</form>
							</div>

							<!--End mc_embed_signup-->



							<a class="footer__support-button" href="#">Mitmachen</a>
							<a class="footer__support-button" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Unterstützen' ) ) ); ?>">Unterstützen</a>
							<a target="_blank" class="footer__support-button footer__support-facebook" href="https://www.facebook.com/NetworkWIDE"><?php get_template_part('assets/img/svg/inline', 'facebook.svg'); ?></a>

						</div>
					</div>
				</div>


				<div class="footer__info outer-container">
						<p class="footer__copyright">
							© 2016 Wide Switzerland | <span class="footer__impressum"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Impressum' ) ) ); ?>">Impressum</a></span>
						</p>

						<p class="footer__address">
							info@wide-network.ch
						</p>
				</div>

		</footer>

	</div><!-- body__wrapper-->

	<?php wp_footer(); ?>

	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<script  type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/ofi.browser.js"></script>

	<script  type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/main-min.js"></script>

	</body>
</html>
