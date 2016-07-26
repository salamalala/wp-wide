<?php

/* Template Name: Kontakt */

get_header();

?>

<div class="outer-container">
  <div class="wrapper contact">

    <?php the_title( '<h1 class="heading-underline">', '</h1>' ); ?>

    <div class="contact">
      <?php the_field('kontakt'); ?>
    </div>

  </div>
</div>

<?php get_footer();   ?>
