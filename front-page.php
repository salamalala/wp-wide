<?php /* Template Name: Front-Page */
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wp-sanspapier
 */

?>

<?php get_header(); ?>

  <div class="entrytext">

    <p>
      <span class="entrytext__title"> <?php the_field('eingangstext_titel'); ?> </span>

      <?php the_field('eingangstext'); ?>
    </p>

  </div>

<?php get_footer(); ?>
