<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wide
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="outer-container">
	  <div class="wrapper">

				<?php the_title( '<h1 class="heading-underline">', '</h1>' ); ?>

				<?php if( get_field('article_content') ): ?>
					<div class="article">
						<?php the_field('article_content'); ?>
					</div>
				<?php endif; ?>

		</div>
	</div>

</article><!-- #post-## -->
