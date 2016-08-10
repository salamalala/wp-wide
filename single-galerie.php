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
				$name = get_sub_field('name');
				$function = get_sub_field('funktion');
				$statement = get_sub_field('statement', false, false);
				$email = get_sub_field('email');

				?>

				<figure class="gallery__item">
					<img class="gallery__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					<div class="gallery__text">
						<figcaption class="gallery__caption"> <?php echo $name; ?> </figcaption>
						<h3 class="gallery__function"> <?php echo $function; ?> </h3>
						<p class="gallery__paragraph">
							<span> <?php get_template_part('assets/img/svg/inline', 'quotes.svg'); ?>
							</span>
							<?php echo $statement; ?>
						</p>

						<?php if( $email ): ?>
							<a class="gallery__email" href="mailto:<?php echo $email; ?>" >Email</a>
						<?php endif; ?>
					</div>
				</figure>


			<?php endwhile; ?>

			</div>
		</div>

	<?php endif; ?>

<?php get_footer(); ?>
