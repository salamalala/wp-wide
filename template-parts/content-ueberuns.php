<?php

/* Template Name: Über Uns */

get_header();

?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>

<div class="outer-container">
  <div class="wrapper menu-page">

    <ul class="menu-page__list">

    <?php

      $args = array(
         'post_type' => 'ueberuns',
         'numberposts' => -1,
         'order' => 'ASC',
         'orderby' => 'menu_order'
       );

      $loop = new WP_Query( $args );


      if( $loop->have_posts() ):
        while( $loop->have_posts() ) : $loop->the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'menu-item' ); ?>

        <?php endwhile; ?>
      <?php endif; ?>

    <?php wp_reset_query(); ?>

    </ul>
  </div>
</div>

<?php get_footer();   ?>
