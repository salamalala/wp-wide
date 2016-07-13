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

  <div class="intro">
    <div class="outer-container">
      <div class="wrapper">
        <div class="intro__content">
          <h1 class="intro__title"><?php the_field('eingangstext_titel'); ?> </h1>
          <p class="intro__paragraph">
            <?php the_field('eingangstext'); ?>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="outer-container">
    <div class="wrapper">
      <?php if( have_rows('news') ): ?>

        <h1>Aktuelles:</h1>
        <div class="news">

    	   <?php while( have_rows('news') ): the_row();

      		$titel = get_sub_field('titel');
      		$text = get_sub_field('text');
      		$kategorie = get_sub_field('kategorie');
          $page_link = get_sub_field('link_zur_seite');
      		?>

          <section class="news__item">
            <h3 class="news__category rotated-text"><?php echo $kategorie; ?></h3>
            <h2 class="news__title"><?php echo $titel; ?></h2>
            <p class="news__text"><?php echo $text; ?></p>
            <p>Mehr Infos: <a href="<?php echo $page_link; ?>">hier</a> </p>
          </section>

        <?php endwhile; ?>

        </div>

      <?php endif; ?>
  </div>


  <?php get_footer(); ?>
