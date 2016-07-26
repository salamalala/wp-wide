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

							<div class="footer__newsletter">
								<input class="footer__input" type="email" placeholder="Emailadresse"/>
								<input class="footer__submit" type="submit" name="name" value="Anmelden">
							</div>

							<a class="footer__support-button" href="#">Mitmachen</a>
							<a class="footer__support-button" href="/de/unterstutzung/">Unterstützen</a>

						</div>
					</div>
				</div>


				<div class="footer__info outer-container">
						<p class="footer__copyright">
							© 2016 Wide Switzerland | <span class="footer__impressum"><a href="#">Impressum</a></span>
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
	<script  type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/main-min.js"></script>

	</body>
</html>
