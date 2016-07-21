<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Wide
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<div class="outer-container">
			<div class="wrapper article">

				<?php if( have_rows('gallery_item') ): ?>

					<div class="gallery">

					<?php while( have_rows('gallery_item') ): the_row();

						// vars
						$image = get_sub_field('image');
						$caption = get_sub_field('caption');
						$text = get_sub_field('text');
						$email = get_sub_field('email');

						?>

						<figure class="gallery__item">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
								<figcaption><?php echo $caption; ?></figcaption>
								<p>
									<?php echo $caption; ?>
								</p>
								<a href="mailto:<?php $email; ?>" <?php  ?>>Email</a>
						</figure>


					<?php endwhile; ?>

					</div>

				<?php endif; ?>

			<?php endwhile; // End of the loop. ?>
		</div>
	</div>


<?php get_footer(); ?>
