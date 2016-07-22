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

	<?php endwhile; // End of the loop. ?>

	<?php if( have_rows('gallery_item') ): ?>

		<div class="outer-container">
			<div class="wrapper gallery">

			<?php while( have_rows('gallery_item') ): the_row();

				$image = get_sub_field('image');
				$caption = get_sub_field('caption');
				$paragraph = get_sub_field('paragraph', false, false);
				$email = get_sub_field('emailaddress');

				?>

				<figure class="gallery__item">
					<img class="gallery__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					<div class="gallery__text">
						<figcaption class="gallery__caption"> <?php echo $caption; ?> </figcaption>
						<p class="gallery__paragraph"> <?php echo $paragraph; ?> </p>
						<a class="gallery__email" href="mailto:<?php echo $email; ?>" >Email</a>
					</div>
				</figure>


			<?php endwhile; ?>

			</div>
		</div>

	<?php endif; ?>

<?php get_footer(); ?>
