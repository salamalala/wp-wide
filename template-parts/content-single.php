<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wide
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="outer-container">
		<div class="wrapper">

			<h1><?php the_field('article_title'); ?></h1>
			<div>
				<?php the_field('article_content'); ?>
			</div>


		</div>
	</div>


</article><!-- #post-## -->
