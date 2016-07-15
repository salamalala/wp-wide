<?php

/* Template Name: Aktivitäten */

get_header();

?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>

<div class="outer-container">
  <div class="wrapper menu-page">

    <ul class="menu-page__list">

    <?php

      $args = array(
         'post_type' => 'aktivitaet',
         'orderby' => 'modified',
         'order'   => 'DESC'
       );

      $loop = new WP_Query( $args );

      if( $loop->have_posts() ):
        while( $loop->have_posts() ) : $loop->the_post(); ?>

        <a class="menu-page__link" href="<?php the_permalink()?>">
          <li class="menu-page__item"> <?php the_field('article_title'); ?>
            <span class="menu-page__arrow"><?php get_template_part('assets/img/svg/inline', 'arrow-right.svg'); ?></span>
          </li>
          <div class="menu-page__item--shadow"></div>
        </a>


        <?php endwhile; ?>
      <?php endif; ?>

    <?php wp_reset_query(); ?>

    </ul>
  </div>
</div>

<?php get_footer();   ?>
