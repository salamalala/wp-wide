<?php

/* Template Name: Unterstützung */

get_header();

?>

<div class="outer-container">
  <div class="wrapper support">

    <?php the_title( '<h1 class="support__title heading-underline">', '</h1>' ); ?>


    <?php
    	$currentlang = get_bloginfo('language');
    	if($currentlang=="de-CH"):?>

        <?php echo do_shortcode( '[contact-form-7 id="234" title="Unterstützungs-Formular"]' ); ?>

      <?php else: ?>

        <?php echo do_shortcode( '[contact-form-7 id="240" title="Support-Form"]' ); ?>

      <?php endif; ?>

  </div>
</div>

<?php get_footer();   ?>
