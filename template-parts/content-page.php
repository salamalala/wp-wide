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

			<header class="entry-header">
				<?php the_title( '<h1>', '</h1>' ); ?>
			</header><!-- .entry-header -->
		</div>
	</div>

</article><!-- #post-## -->
