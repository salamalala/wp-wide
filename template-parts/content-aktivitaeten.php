<?php

/* Template Name: Aktivitäten */

get_header();

?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>

<div class="outer-container">
  <div class="wrapper menu-page">

    <ul class="border-list">

    <?php

      $args = array(
         'post_type' => 'aktivitaet',
         'orderby' => 'modified',
         'order'   => 'DESC'
       );

      $loop = new WP_Query( $args );

      if( $loop->have_posts() ):
        while( $loop->have_posts() ) : $loop->the_post(); ?>

        <a href="<?php the_permalink()?>">
          <li> <?php the_field('article_title'); ?></li>
        </a>

        <?php endwhile; ?>
      <?php endif; ?>

    <?php wp_reset_query(); ?>

    </ul>
  </div>
</div>

<?php get_footer();   ?>