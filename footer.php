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

		  </div><!-- main wrapper-->

		</main><!-- site content-->

		<footer class="footer" role="footer">

			<div class="newsletter">
				<div>
					<input type="text" placeholder="Emailadresse"/>
				</div>
			</div>
			

			<div class="footer__content">
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

	<script  type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/main-min.js"></script>

	</body>
</html>
